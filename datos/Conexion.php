<?php

class Conexion
{
	/**
 	*Conexion a la base de datos 
 	*@return PDO
 	*/
 	/*
		public function __construct(){
			this->host = 'localhost';
		}

 	*/

	public static function conectar(){
		try {
			$cn = new PDO("mysql:host=localhost;dbname=plataforma","root","");
			return $cn;

		} catch (PDOException $e) {
			die("Error connection: ".$e->getMessage());
		}
	}

	
}
