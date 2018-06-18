$(document).ready(function() {

	var userBe = false;
	var emailBe = false;
	var captchaBe = false;
	/*================================
	VALIDAR USUARIO EXISTENTE AJAX
	==================================*/
	$("#nickname").change(function() {

		var usuario = $("#nickname").val();
		var datos = FormData();
		datos.append('validarUsuario', usuario);
		$.ajax({
			url: 'views/modules/ajax.php',
			type: 'POST',
			data: datos,
			cache: false,
			contentType: false,
			processData: false,
			success: function (respuesta) {
				if (respuesta == 0) {
					//accion para que el usuario sepa que el nickname ya existe
					$("label[for='nickname'] span").html("<p>Escriba menos de 11 caracteres por favor</p>")
					var userBe = true;
				}else{
					//puede ser que el input se vuelva de color verde
					var userBe = false;
				}
			} 
		})
		.done(function() {
			console.log("success");
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
		
	});
	/*==VALIDAR USUARIO EXISTENTE AJAX==*/

	/*================================
		VALIDAR EMAIL EXISTENTE AJAX
	==================================*/
	$("#email").change(function() {

		var email = $("#email").val();
		var datos = FormData();
		datos.append('validarEmail', email);
		$.ajax({
			url: 'views/modules/ajax.php',
			type: 'POST',
			data: datos,
			cache: false,
			contentType: false,
			processData: false,
			success: function (respuesta) {
				if (respuesta == 0) {
					//accion para que el usuario sepa que el email ya existe
					var emailBe = true;
				}else{
					//puede ser que el input se vuelva de color verde
					var emailBe = false;
				}
			} 
		})
		.done(function() {
			console.log("success");
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
		
	});
	/*==VALIDAR EMAIL EXISTENTE AJAX==*/

/*================================
	VALIDAR CAPTCHA AJAX
	==================================*/
	$("#btn-submit").submit(function() {

		var captcha = $("#cod-cad").val();
		var datos = FormData();
		datos.append('validarCaptcha', captcha);
		$.ajax({
			url: 'views/modules/ajax.php',
			type: 'POST',
			data: datos,
			cache: false,
			contentType: false,
			processData: false,
			success: function (respuesta) {
				if (respuesta == 0) {
					//accion para el captcha valido
					var captchaBe = true;
				}else{
					//Captcha invalido, recargar captcha y no dejar enviar formulario
					$("#captcha").html("<p>Captchar Incorrecto</p>");
					var captchaBe = false;
				}
			} 
		})
		.done(function() {
			console.log("success");
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
		
	});
	/*==VALIDAR CAPTCHA AJAX==*/

	/*================================
			VALIDAR REGISTRO
	==================================*/
	function validarRegistro() {
		var nickname = $("#nickname").val();
		var password = $("#password").val();
		var email = $("#email").val();

	/*=== Validar usuario ===*/
		if (usuario != "") {
			var caracteres = usuario.length;
			var expresion = /^[a-zA-Z0-9]*$/;

			if (caracteres > 11) {
				$("label[for='nickname'] span").html("<p>Escriba menos de 11 caracteres por favor</p>");
				return false;
			}
			if (!expresion.test(usuario)) {
				$("label[for='nickname'] span").html("<p>No escriba caracteres especiales</p>");
				return false;
			}
			if (userBe) {
				$("label[for='nickname'] span").html("<p>Este usuario ya existe</p>");
				return false;
			}
		}
		/*=== Validar password ===*/
		if (password != "") {
			var caracteres = password.length;
			var expresion = /^[a-zA-Z0-9]*$/;

			if (caracteres < 8) {
				$("label[for='contrasena-cad'] span").html("<p>Escriba mínimo 8 caracteres por favor</p>");
				return false;
			}
			if (!expresion.test(password)) {
				$("label[for='contrasena-cad'] span").html("<p>No escriba caracteres especiales por favor</p>");
				return false;
			}
		}
		/*=== Validar email ===*/
		if (email != "") {
			// var caracteres = email.length;
			var expresion = /^\w+([\.-]?\w+)*@\w+([\.-]?w+)*(\.\w{2,4})+$/;

			if (!expresion.test(email)) {
				$("label[for='email'] span").html("<p>Escriba correctamente el Email</p>");
				return false;
			}
			if (emailBe) {
				$("label[for='email'] span").html("<p>Este email ya esta registrado.</p>");
				return false;
			}
		}
		return true;
	}
});