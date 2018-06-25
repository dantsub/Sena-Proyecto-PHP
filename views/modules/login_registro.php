
<?php
// session_start();
// if(isset($_SESSION['login'])){
//     $_SESSION['login'] = false;
// }
  $register = new MvcController();
  $register -> userRegisterController();

  $login = new MvcController();
  $login -> userLoginController();

  if (isset($_GET['action'])) {
    
    if ($_GET['action'] == "ok") {
      //echo "Registro exitoso";
    }
    
    if ($_GET['action'] == "error") {
      //echo "Correo no registrado";
    }
  }



?>
<div id="bgcinza"></div><!-- bgcinza -->

<div id="login_e_cadastro" class="container">

  <div class="sessao">
    <a href="index" class="viewer" title="Visualizar Tópicos">&laquo; Visualizar temas</a> 
  </div><!-- div sessao -->
  
  <div class="sessao">
  	<div class="col-esquerda">
    
    	<h3>Entrar</h3>
        <span>¿Ya estás registrado? Entonces accede con tu email y contraseña!</span>
    
    	<form method="post">
        	<table>
            <tr>
              <td><label for="email-login">E-Mail:</label></td>
              <td><input type="email" placeholder=" Ingrese email" name="email-login" id="email-login" /></td>
            </tr>
            <tr>
              <td><label for="contrasena-login">Contraseña:</label></td>
              <td><input type="password" placeholder=" Ingrese contraseña" name="password-login" id="password-login" /></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><input class="btn-submit i" type="submit" value=""></td>
            </tr>
          </table>

        </form>
    </div><!-- div col-esquerda -->
    <div class="col-direita">
    	<h3>Registrarse</h3>
        <span>¿Aún no tienes una cuenta? hacer tu registro ahora, fácil y rápido!</span>
        <form method="post" enctype="multipart/form-data" onsubmit="return validarRegistro()">
            <table>
            <tr>
              <td><label for="nombre">Primer nombre<span></span></label></td>
              <td><input name="nombre" placeholder="Escriba su nombre" id="nombre" type="text" /></td>
            </tr>
            <tr>
              <td><label for="apellido">Apellido<span></span></label></td>
              <td><input name="apellido" placeholder="Escriba su apellido" id="apellido" type="text" required /></td>
            </tr> 
            <tr>
              <td><label for="nickname">Nickname: <span></span></label></td>
              <td><input type="text" placeholder=" Escriba su nickname" name="nickname" id="nickname" required /></td>
            </tr>
            <tr>
              <td><label for="email">E-Mail:<span></span></label></td>
              <td><input type="email" placeholder=" Escriba su correo electrónico" name="email" id="email" required /></td>
            </tr>
            <tr>
              <td><label for="password">Contraseña:<span></span></label></td>
              <td><input type="password" minlength="8" placeholder=" Mínimo 8 caracteres" name="password" id="password" required /></td>
            </tr>
            <tr>
            	<td>Sexo</td>
                <td><label><input type="radio" name="sexo" id="sexo" value="M" /> M </label>&nbsp;&nbsp;&nbsp;<label><input type="radio" name="sexo" id="sexo" value="F" /> F </label></td>
            </tr>
            <tr>
              <td><label for="foto-cad">Foto para avatar</label></td>
              <td><input type="file" name="foto" id="foto-cad" accept="image/*" /></td>
            </tr>
            <tr>
              <td><label for="cod-cad">Captcha</label></td>
              <td>
                <span>Código de seguirdad</span>
                <div>
                  <img id="captcha" src="views/modules/captcha.php" alt="">
                </div>  
                <span><label for="cod-cad">Ingrese el código de arriba <span></span></label></span>
                <input type="text" name="cod-cad" id="cod-cad" required />
              </td>
            </tr>            
            <tr>
              <td>&nbsp;</td>
              <td class="direita"><input class="btn-submit r" id="btn-submit" type="submit" value="" /></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
          </table>

      </form>  
    </div><!-- div col-direita -->
  </div><!-- div sessao -->

</div><!-- div login_e_cadastro -->