<?php
/**
 * Description of conexion
 *
 * @author STC
 */
require_once "config.php";

class Connection{
	//Declaracion de variables
private $conexion = null;
private $pdo; // Variable de conexion por PDO
	
final private function __construct(){
	try{
		self::getBD();
	}catch(PDOException $e){
		
	}
}
	
public static function getInstancia(){
	if(self::$conexion === null){
		self::$conexion = new self();
	}
	
	return self::$conexion;
} 
	//Función de conexión
public function getBD(){
	if(self::$pdo == null){
		self::$pdo = new PDO('mysql:host='.configBD::$hostname_con.';dbname='.configBD::$database_con,configBD::$username_con,configBD::$password_con);
		self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		self::$pdo->exec("SET CHARACTER SET UTF8");
	}
	
	return self::$pdo;
		//Finaliza proceso de conexión
	}
	
public static function destroyBD(){
	mysql_close($this->conexion);
	//Finaliza proceso de terminar conexión
	}
}

