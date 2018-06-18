<?php 

require_once '../../controllers/controller.php';
require_once '../../models/crud.php';


class Ajax
{
    public $usuario;
    public $email;
    public $captcha;

    public function usuarioAjax()
    {
        $datos = $this -> usuario;
        $answer = mvcController::validarUsuarioController($datos);
        echo $answer;
    }

    public function emailAjax()
    {
        $datos = $this -> email;
        $answer = mvcController::validarEmailController($datos);
        echo $answer;
    }
    public function captchaAjax()
    {
        $datos = $this -> captcha;
        $answer = mvcController::validarCaptchaController($datos);
        echo $answer;
    }
}
#============== NICKNAME ================#
if (isset($_POST["validarUsuario"])) {
	$a = new Ajax();
	$a -> usuario = $_POST["validarUsuario"];
	$a -> usuarioAjax();
}
#============== EMAIL ================#
if (isset($_POST["validarEmail"])) {
	$b = new Ajax();
	$b -> email = $_POST["validarEmail"];
	$b -> emailAjax();	
}


