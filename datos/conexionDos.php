<?php
class Conexion
{
	public static function conectar(){
		try {
			$cn = new PDO("mysql:host=localhost;dbname=mathclass","root","");
			return $cn;

		} catch (PDOException $e) {
			die("Error en la conexion: ".$e->getMessage());
		}
	}

	
}