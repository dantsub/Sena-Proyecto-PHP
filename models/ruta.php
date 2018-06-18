<?php

class Ruta 
{
    public function pageModel($url)
    {
        if ($url == "creartema" || $url == "login_registro" || $url == "forum") {
            $module = "views/modules/" . $url . ".php";
        }
        elseif ($url == "index") {
            $module = "views/modules/inicio.php";
        }
        elseif ($url == "ok") {
            $module = "views/modules/login_registro.php";
        }
        elseif ($url == "error") {
            $module = "views/modules/login_registro.php";
        }
        else{
            
            $module = "views/modules/inicio.php";

        } 
        return $module;
    }
}
