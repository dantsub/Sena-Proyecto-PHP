<?php

require_once "connection.php";

class Datos extends Connection 
{
    #REGISTRO DE USUARIOS
    #-------------------------------------------------
    public function userRegisterModel($datos,$table)
    {
        $stmt = Connection::connect()->prepare("INSERT INTO $table (nombre_usuario, email_usuario, nickname_usuario, password_usuario ,) VALUES (:nombre, :email, :nickname, :password1)");
        $stmt -> bindParam(":nombre", $datos['nombre'], PDO::PARAM_STR);
        // $stmt -> bindParam(":apellido", $datos['apellido'], PDO::PARAM_STR);
        $stmt -> bindParam(":email", $datos['email'], PDO::PARAM_STR);
        $stmt -> bindParam(":nickname", $datos['nickname'], PDO::PARAM_STR);
        $stmt -> bindParam(":password1", $datos['password'], PDO::PARAM_STR);
        // $stmt -> bindParam(":foto", $datos['foto'], PDO::PARAM_STR);
        $stmt -> bindParam(":genero", $datos['genero']);
        
        if ($stmt -> execute()) {
            return "success";
        }else{
            return "error";
        }
        $stmt -> close();
    }
    #INGRESO DE USUARIOS
    #-------------------------------------------------
    public function userLoginModel($datos,$table)
    {
        try{
            
            $stmt = Connection::connect()->prepare("SELECT email_usuario, password_usuario FROM $table WHERE email_usuario = :email");
            $stmt -> bindParam(":email", $datos['email-login'], PDO::PARAM_STR);
            $stmt -> execute();
            return $stmt -> fetch();
        // $stmt -> close();
        }catch(PDOException $e){
            
            return $e;
        }
    }
    #ACTUALIZACION DE USUARIOS
    #-------------------------------------------------
    public function userUpdatenModel($datos,$table)
    {
        $stmt = Connection::getBD()->prepare("UPDATE $table SET foto = :foto WHERE id = :id");
        $stmt -> bindParam(":id", $datos['id'], PDO::PARAM_INT);
        $stmt -> bindParam(":foto", $datos['foto'], PDO::PARAM_STR);
        $stmt -> execute();
        if ($stmt -> execute()) {
            return "success";
        }else {
            return "error";
        }
        $stmt -> close();
    }
}
