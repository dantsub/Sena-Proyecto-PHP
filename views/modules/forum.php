<?php
// session_start();
if (!$_SESSION['login']) {
  header('Location:login_registro');
  exit();
}
?>

<div id="bgcinza"></div><!-- bgcinza -->

<div id="topico" class="container">

  <div class="sessao">
    <a href="index" class="viewer" title="Visualizar T�picos">&laquo; Visualizar temas</a> 
    
    <h2>Nombre del tema</h2>
    <h3>Descripci�n del tema Descripci�n del tema Descripci�n del tema Descripci�n del tema </h3>
  </div><!-- div sessao -->
  
  <div class="postagem">
  
  	<div class="userpost">
       	<img src="views/fotos/thumbs/userpost.jpg" alt="foto de quem postou" />
        <table>
          <tr>
            <td colspan="2">Fulano de tal</td>
          </tr>
          <tr>
            <td>Posts:</td>
            <td>29</td>
          </tr>
          <tr>
            <td>Sexo</td>
            <td>Masculino</td>
          </tr>
          <tr>
            <td colspan="2">Ultima participaci�n:</td>
          </tr>
          <tr>
            <td colspan="2">15/03/2012</td>
          </tr>
        </table>

    </div><!-- userpost -->
    
    <div class="msgpost">
    	<div class="datapost">Publicado el 15 de octubre 2010 - 20:22</div><!-- datapost -->
        <div class="msg">
        	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In imperdiet laoreet rhoncus. Donec mollis justo a massa condimentum eleifend sed ultricies mauris. Integer vitae nibh mauris, sed sodales urna. Aenean odio urna, vulputate id sodales vitae, consequat blandit ipsum. Curabitur mollis tempus rutrum. Suspendisse mi eros, feugiat sit amet malesuada eget, rhoncus elementum risus. Maecenas sapien massa, ultrices sit amet interdum a, faucibus eu dui. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut sed enim ut eros mattis hendrerit ac in nulla. Sed pulvinar lorem a justo blandit suscipit. Aliquam commodo pulvinar gravida.</p>

<p>Vestibulum posuere blandit metus convallis semper. Pellentesque cursus nulla sit amet ipsum feugiat in rhoncus orci scelerisque. Quisque ultrices rutrum dictum. Nam in nisl in diam venenatis pharetra vel eu est. Proin ut orci felis. Nullam in eros ante, ut venenatis eros. Phasellus turpis leo, ullamcorper vel commodo eu, molestie condimentum arcu. Cras scelerisque quam ut diam vehicula venenatis.</p>

<p>Etiam dignissim leo eget justo aliquet imperdiet ut eget risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Quisque nec augue sapien. Integer semper tempor ante, in rutrum est egestas nec. Nulla bibendum luctus tortor, non laoreet ipsum porta ac. Aliquam erat volutpat. Duis eros lectus, semper in tincidunt sit amet, condimentum a magna. Ut tincidunt eleifend rhoncus. Nullam venenatis lobortis ante, et congue tellus rutrum ut. Praesent ut purus vel quam faucibus suscipit ac eget ante. Nunc eros nisl, ultrices sit amet aliquet id, pharetra ut nunc. Mauris ac felis velit, facilisis viverra velit. Ut pellentesque volutpat orci, vitae rutrum urna euismod ut.</p>
        </div><!-- msg -->
    </div><!-- div msgpost -->
    
  </div><!-- div postagem -->
  
  <div class="postagem">
  
  	<div class="userpost">
       	<img src="views/fotos/thumbs/userpost.jpg" alt="foto de quem postou" />
        <table>
          <tr>
            <td colspan="2">Fulano de tal</td>
          </tr>
          <tr>
            <td>Posts:</td>
            <td>29</td>
          </tr>
          <tr>
            <td>Sexo</td>
            <td>Masculino</td>
          </tr>
          <tr>
            <td colspan="2">Ultima pariticipac�on:</td>
          </tr>
          <tr>
            <td colspan="2">15/03/2012</td>
          </tr>
        </table>

    </div><!-- userpost -->
    
    <div class="msgpost">
    	<div class="datapost">Publicado el 15 de octubre 2010 - 20:22</div><!-- datapost -->
        <div class="msg">
        	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In imperdiet laoreet rhoncus. Donec mollis justo a massa condimentum eleifend sed ultricies mauris. Integer vitae nibh mauris, sed sodales urna. Aenean odio urna, vulputate id sodales vitae, consequat blandit ipsum. Curabitur mollis tempus rutrum. Suspendisse mi eros, feugiat sit amet malesuada eget, rhoncus elementum risus. Maecenas sapien massa, ultrices sit amet interdum a, faucibus eu dui. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut sed enim ut eros mattis hendrerit ac in nulla. Sed pulvinar lorem a justo blandit suscipit. Aliquam commodo pulvinar gravida.</p>

<p>Vestibulum posuere blandit metus convallis semper. Pellentesque cursus nulla sit amet ipsum feugiat in rhoncus orci scelerisque. Quisque ultrices rutrum dictum. Nam in nisl in diam venenatis pharetra vel eu est. Proin ut orci felis. Nullam in eros ante, ut venenatis eros. Phasellus turpis leo, ullamcorper vel commodo eu, molestie condimentum arcu. Cras scelerisque quam ut diam vehicula venenatis.</p>

<p>Etiam dignissim leo eget justo aliquet imperdiet ut eget risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Quisque nec augue sapien. Integer semper tempor ante, in rutrum est egestas nec. Nulla bibendum luctus tortor, non laoreet ipsum porta ac. Aliquam erat volutpat. Duis eros lectus, semper in tincidunt sit amet, condimentum a magna. Ut tincidunt eleifend rhoncus. Nullam venenatis lobortis ante, et congue tellus rutrum ut. Praesent ut purus vel quam faucibus suscipit ac eget ante. Nunc eros nisl, ultrices sit amet aliquet id, pharetra ut nunc. Mauris ac felis velit, facilisis viverra velit. Ut pellentesque volutpat orci, vitae rutrum urna euismod ut.</p>
        </div><!-- msg -->
    </div><!-- div msgpost -->
    
  </div><!-- div postagem -->
  
  <div class="postagem">
  
  	<div class="userpost">
       	<img src="views/fotos/thumbs/userpost.jpg" alt="foto de quem postou" />
        <table>
          <tr>
            <td colspan="2">Fulano de tal</td>
          </tr>
          <tr>
            <td>Posts:</td>
            <td>29</td>
          </tr>
          <tr>
            <td>Sexo</td>
            <td>Masculino</td>
          </tr>
          <tr>
            <td colspan="2">Ultima pariticipac�on:</td>
          </tr>
          <tr>
            <td colspan="2">15/03/2012</td>
          </tr>
        </table>

    </div><!-- userpost -->
    
    <div class="msgpost">
    	<div class="datapost">Publicado el 15 de octubre 2010 - 20:22</div><!-- datapost -->
        <div class="msg">
        	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In imperdiet laoreet rhoncus. Donec mollis justo a massa condimentum eleifend sed ultricies mauris. Integer vitae nibh mauris, sed sodales urna. Aenean odio urna, vulputate id sodales vitae, consequat blandit ipsum. Curabitur mollis tempus rutrum. Suspendisse mi eros, feugiat sit amet malesuada eget, rhoncus elementum risus. Maecenas sapien massa, ultrices sit amet interdum a, faucibus eu dui. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut sed enim ut eros mattis hendrerit ac in nulla. Sed pulvinar lorem a justo blandit suscipit. Aliquam commodo pulvinar gravida.</p>

<p>Vestibulum posuere blandit metus convallis semper. Pellentesque cursus nulla sit amet ipsum feugiat in rhoncus orci scelerisque. Quisque ultrices rutrum dictum. Nam in nisl in diam venenatis pharetra vel eu est. Proin ut orci felis. Nullam in eros ante, ut venenatis eros. Phasellus turpis leo, ullamcorper vel commodo eu, molestie condimentum arcu. Cras scelerisque quam ut diam vehicula venenatis.</p>

<p>Etiam dignissim leo eget justo aliquet imperdiet ut eget risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Quisque nec augue sapien. Integer semper tempor ante, in rutrum est egestas nec. Nulla bibendum luctus tortor, non laoreet ipsum porta ac. Aliquam erat volutpat. Duis eros lectus, semper in tincidunt sit amet, condimentum a magna. Ut tincidunt eleifend rhoncus. Nullam venenatis lobortis ante, et congue tellus rutrum ut. Praesent ut purus vel quam faucibus suscipit ac eget ante. Nunc eros nisl, ultrices sit amet aliquet id, pharetra ut nunc. Mauris ac felis velit, facilisis viverra velit. Ut pellentesque volutpat orci, vitae rutrum urna euismod ut.</p>
        </div><!-- msg -->
    </div><!-- div msgpost -->
    
  </div><!-- div postagem -->

	<div id="paginacao">
    	<a id="primeiro" href="#" title="Primeira p�gina">� Primero</a>
        
        	<span>1</span>
            <a href="#" class="pag" title="Primeira n�mero 2">2</a>
            <a href="#" class="pag" title="Primeira n�mero 1">3</a>
        <a id="ultimo" href="#" title="Primeira p�gina">�ltimo �</a>
    </div><!-- paginacao -->
    <?php 
      if ($_SESSION['login'] == true) {
        include 'respuesta.php';
      }
     ?>
</div><!-- div topico -->