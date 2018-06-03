
<?php

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
    <a href="index" class="viewer" title="Visualizar T�picos">&laquo; Visualizar temas</a> 
  </div><!-- div sessao -->
  
  <div class="sessao">
  	<div class="col-esquerda">
    
    	<h3>Entrar</h3>
        <span>�Ya est�s registrado? Entonces accede con tu email y contrase�a!</span>
    
    	<form method="post">
        	<table>
            <tr>
              <td><label for="email-login">E-Mail:</label></td>
              <td><input type="text" name="email-login" id="email-login" /></td>
            </tr>
            <tr>
              <td><label for="contrasena-login">Contrase�a:</label></td>
              <td><input type="password" name="password-login" id="senha-login" /></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><input type="submit" value="enviar"></td>
            </tr>
          </table>

        </form>
    </div><!-- div col-esquerda -->
    <div class="col-direita">
    	<h3>Registrarse</h3>
        <span>�A�n no tienes una cuenta? hacer tu registro ahora, f�cil y r�pido!</span>
        <form method="post">
            <table>
            <tr>
              <td><label for="pnome-cad">Primer nombre</label></td>
              <td><input name="nombre" id="nombre" type="text" /></td>
            </tr>
            <tr>
              <td><label for="nickname-cad">Nickname:</label></td>
              <td><input type="text" name="nickname" id="nickname"  /></td>
            </tr>
            <tr>
              <td><label for="email-cad">E-Mail:</label></td>
              <td><input type="text" name="email" id="email-cad" /></td>
            </tr>
            <tr>
              <td><label for="contrasena-cad">Contrase�a:</label></td>
              <td><input type="text" name="password" id="contrasena-cad" /></td>
            </tr>
            <tr>
            	<td>Sexo</td>
                <td><label><input type="radio" name="sexo" id="sexo" value="M" />M</label>&nbsp;&nbsp;&nbsp;<label><input type="radio" name="sexo" id="sexo" value="F" />F</label></td>
            </tr>
            <tr>
              <td><label for="foto-cad">Foto para avatar</label></td>
              <td><input type="file" name="foto" id="foto-cad" /></td>
            </tr>
            <tr>
              <td><label for="cod-cad">Captcha</label></td>
              <td>
                <span>C�digo de seguirdad</span>
                <img src="views/images/captcha.jpg" alt="C�digo de confirma��o" />  
                <span><label for="cod-cad">Ingrese el c�digo de arriba</label></span>
                <input type="text" name="cod-cad" id="cod-cad" />
              </td>
            </tr>            
            <tr>
              <td>&nbsp;</td>
              <td class="direita"><input type="image" src="views/images/btcadastrar.png" /></td>
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

