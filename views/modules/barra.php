<?php
session_start();

?> 

<div id="topo">

	<div id="barra-superior"></div><!-- div barra-superior -->
    
	<div class="container">
    
    	<h1><a id='logo' href="index.php" title="SENASoft Cauca 2013"></a></h1>
    
        <div id="opcoes-usuario">
        <?php
            if(isset($_SESSION['login']) && $_SESSION['login'] == true){
                
                echo"<ul>
                    <li><a href='#' title='usuario'>";
 
                $user = $_SESSION['user'];
                echo($user);
                                              
                echo"</a></li>
                    <li><a href='login_registro' title='Cerrar sesion'>cerrar sesion</a></li>
                </ul>"; 
                
            }else{
                echo"<ul>
                    <li><a href='login_registro' title='Entrar'>Entrar</a></li>
                    <li><a href='login_registro' title='Cadastre-se'>Registrarse</a></li>
                </ul>"; 
            }
        ?> 
            </div><!-- div opcoes-usuario -->
       
        <div id="busca">
        	<form method="post" action="">
            	<input type="text" name="cbusca" id="cbusca" />
                <input type="image" name="btbusca" id="btbusca" src="views/images/btbusca.jpg" />
            </form>
        </div><!-- div busca -->
        
    </div><!-- div container -->
    
	<div id="barra-inferior"></div><!-- div barra-inferior -->
    
</div><!-- div topo -->