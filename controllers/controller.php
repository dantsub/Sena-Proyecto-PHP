<?php
require_once "models/crud.php";
session_start();

class MvcController
{
    #Mostrar Plantilla
    #---------------------------------------------
    public function template(){
        include "views/template.php";
    }
    #RUTAS
    #---------------------------------------------
    public function rutasController()
    {
        if (isset($_GET['action'])) {
            
            $enlaces = $_GET["action"];
            $answer = Ruta::pageModel($enlaces);
            include $answer;
        }else{
            header('Location:index');
        }
    }
    #REGISTRO DE USUARIOS
    #---------------------------------------------
    public function userRegisterController(){
        
        if(isset($_POST['nombre'])){
            $datos_c = array('nombre' => $_POST['nombre'],
                            // 'apellido' => $_POST['apellido'],
                            'nickname' => $_POST['nickname'],
                            'email' => $_POST["email"],
                            'password' => $_POST['password'],
                            'genero' => $_POST['sexo'],
                            // 'foto' => $_POST['foto']
                            );
            $answer = Datos::userRegisterModel($datos_c, "usuario");
            echo $answer;
        }
    }
    #INGRESO DE USUARIO
    #---------------------------------------------
    public function userLoginController()
    {
        if($_SERVER['REQUEST_METHOD']=='POST'){
            if (isset($_POST['email-login'])) {
                # code...
                $datos_c = array('email-login' => $_POST['email-login'],
                                'password-login' => $_POST['password-login']);

                $answer = Datos::userLoginModel($datos_c, "usuario");

                if ($answer['email_usuario'] == $_POST['email-login'] && $answer['password_usuario'] == $_POST['password-login']) {
                    
                      
                    $_SESSION['login'] = true;
                    header('Location: index.php');

                }else {
                    
                    header('Location: error');

                }
            }  
        }              
    }
    #ACTUALIZACION DE USUARIO
    #---------------------------------------------
    public function userUpdateController()
    {
        $datos_c = "";
        $answer = Datos::userUpdateModel($datos_c, "usuario");
        if ($answer == "success") {
            header("Location:index");
        }else {
            echo "error";
        }

    }
    #INGRESAR 
    #---------------------------------------------
}

