<?php  
include 'conexionDos.php';
//ajax no puede ejecutar los metodos cuando se manda a llamar desde el jquery por eso marca error

$numeroLeccion = $_GET["id"];

$conexion = new Conexion();
$cn = $conexion ->  conectar();
//Sirve para la codificacion utf8
$cn -> exec("set names utf8");

$query = "SELECT * FROM lecciones WHERE nLeccion = :nLeccion";

$resultado = $cn ->prepare($query);
$resultado->bindValue(":nLeccion",$numeroLeccion);
$resultado->execute();

$numResultado = $resultado ->rowCount();

if ($numResultado > 0) {
	while ($rows = $resultado->fetch(PDO::FETCH_ASSOC)){
		$data["leccion"][] = $rows;
	}	
	echo json_encode($data);
	header("location: ../resolverLeccion.php");
}


