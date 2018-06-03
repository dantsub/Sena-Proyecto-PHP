<?php
// session_start();
if (!$_SESSION['login']) {
  header('Location:login_registro');
  exit();
}
?>

<div id="bgcinza"></div><!-- bgcinza -->

<div id="criartopico" class="container">

  <div class="sessao">
    <a href="index" class="viewer" title="Visualizar temas">&laquo; Visualizar temas</a> 
    
    <h2>SENASoft Cauca 2013</h2>
    <h3>Descripci�n del tema Descripci�n del tema Descripci�n del tema Descripci�n del tema </h3>
  </div><!-- div sessao -->
  
  <div id="criar">
  	<form method="post" action="">
    	<table>
          <tr>
            <td><label for="nometopico">Nombre del tema</label></td>
            <td><input type="text" name="nometopico" id="nometopico" /></td>
          </tr>
          
          <tr>
            <td><label for="textotopico">Descripci�n</label></td>
            <td><textarea id="textotopico"></textarea></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td class="direita"><input type="image" src="views/images/btcriar.png" /></td>
          </tr>
        </table>

    </form>
  </div><!-- div criar -->

</div><!-- div criartopico -->