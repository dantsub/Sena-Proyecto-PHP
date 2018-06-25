<?php

require_once "conexion.php";

class Datos 
{
    #REGISTRO DE USUARIOS
    #-------------------------------------------------
    public function userRegisterModel($datos,$table)
    {
        $con = Connection::getInstancia();
        $db = $con->getBD();
        $stmt = $db->prepare("INSERT INTO $table
        (nombre_usuario, apellido_usuario, email_usuario, nickname_usuario, password_usuario, foto_usuario, genero_usuario) VALUES 
        (:nombre, :apellido, :email, :nickname, :password1, :foto, :genero)");
        $stmt->bindParam(":nombre", $datos['nombre'], PDO::PARAM_STR);
        $stmt->bindParam(":apellido", $datos['apellido'], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datos['email'], PDO::PARAM_STR);
        $stmt->bindParam(":nickname", $datos['nickname'], PDO::PARAM_STR);
        $stmt->bindParam(":password1", $datos['password'], PDO::PARAM_STR);
        $stmt->bindParam(":foto", $datos['foto'], PDO::PARAM_STR);
        $stmt->bindParam(":genero", $datos['genero'], PDO::PARAM_STR);
        
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
            $con = Connection::getInstancia();
            $db = $con->getBD();
            $stmt = $db->prepare("SELECT email_usuario, password_usuario, nickname_usuario FROM $table WHERE email_usuario = :email");
            $stmt -> bindParam(":email", $datos['email-login'], PDO::PARAM_STR);
            $stmt -> execute();
            return $stmt -> fetch();
            $stmt -> close();
        }catch(PDOException $e){
            
            return $e;
        }
    }
    #ACTUALIZACION DE USUARIOS
    #-------------------------------------------------
    public function userUpdateFModel($datos,$table)
    {
        $con = Connection::getInstancia();
        $db = $con->getBD();
        $stmt = $db->prepare("UPDATE $table SET foto = :foto WHERE id = :id");
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
    #VALIDAR USUARIO EXISTENTE
    #---------------------------------------------
    public function validarUsuarioModel($datos,$table)
    {
        $con = Connection::getInstancia();
        $db = $con->getBD();
        $stmt = $db->prepare("SELECT nickname_usuario FROM $table WHERE nickname_usuario = :nickname");
        $stmt -> bindParam(':nickname',$datos,PDO::PARAM_STR);
        $stmt -> execute();

        return $stmt -> fetch();

        $stmt -> close();
    }
     #VALIDAR EMAIL EXISTENTE
    #---------------------------------------------
    public function validarEmailModel($datos,$table)
    {
        $con = Connection::getInstancia();
        $db = $con->getBD();
        $stmt = $db->prepare("SELECT email_usuario FROM $table WHERE email_usuario = :email");
        $stmt -> bindParam(':email',$datos,PDO::PARAM_STR);
        $stmt -> execute();

        return $stmt -> fetch();

        $stmt -> close();
    }
}
