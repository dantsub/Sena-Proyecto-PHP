<?php



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
            //Validación
            if (preg_match('/^[a-zA-Z0-9]+$/',$_POST['nombre']) && 
                preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/',$_POST["email"]) && 
                preg_match('/^[a-zA-Z0-9]+$/', $_POST['password'])) {

                if(isset($_FILES['foto'])){
                    $dir = $_SERVER['DOCUMENT_ROOT'].'SENA/PHP1/Proyecto/views/fotos/thumbs';
                    $photo = $_FILES['foto'];
                    $share_photo = Foto::uploadPhoto($dir,$photo);
                }else{
                    $share_photo = null;
                }

                $datos_c = array('nombre' => $_POST['nombre'],
                                'apellido' => $_POST['apellido'],
                                'nickname' => $_POST['nickname'],
                                'email' => $_POST["email"],
                                'password' => md5($_POST['password']),
                                'foto' => $share_photo,
                                'genero' => $_POST['sexo']
                                );
                $answer = Datos::userRegisterModel($datos_c, "usuario");
                // echo $answer;
            }
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
                                'password-login' => md5($_POST['password-login']));

                $answer = Datos::userLoginModel($datos_c, "usuario");
                                
                if ($answer['email_usuario'] == $_POST['email-login'] && $answer['password_usuario'] == md5($_POST['password-login'])) {
                    session_start();    
                    $user=$answer['nickname_usuario'];
                    $_SESSION['user'] = $user;
                    $_SESSION['login'] = true;
                    
                    header('Location: index');

                }else {
                    // $_SESSION['login'] = false;
                    header('Location: error');

                }
            }  
        }              
    }
    #ACTUALIZACION DE USUARIO
    #---------------------------------------------
   /* public function userUpdateFController()
    {
        $datos_c = "";
        $answer = Datos::userUpdateModel($datos_c, "usuario");
        if ($answer == "success") {
            header("Location:index");
        }else {
            echo "error";
        }

    }*/
    #INGRESAR 
    #---------------------------------------------
    #VALIDAR USUARIO EXISTENTE
    #---------------------------------------------
    public function validarUsuarioController($valUsurio)
    {
        $datos_c = $valUsurio;
        $answer = Datos::validarUsuarioModel($datos_c, "usuario");
        if (isset($answer['nickname_usuario'])) {
            echo 0;
        }else{
            echo 1;
        }
    }
    #VALIDAR EMAIL EXISTENTE
    #---------------------------------------------
    public function validarEmailController($valEmail)
    {
        $datos_c = $valEmail;
        $answer = Datos::validarEmailModel($datos_c, "usuario");
        // print_r($answer);
        if (isset($answer["email_usuario"])) {
            echo 0;
        }else{
            echo 1;
        }
    }
    public function validarCaptchaController($valCaptcha)
    {
        $datos_c = $valCaptcha;
        $captcha_cookie = $_COOKIE['captcha'];
        if ($captcha_cookie == sha1($datos_c)) {
            echo 0;
        }else{
            echo 1;
        } 
    }
}

