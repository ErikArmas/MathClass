<?php 
include 'conexionDos.php';

$conexion = new Conexion();
$cn = $conexion ->  conectar();
//Sirve para la codificacion utf8
$cn -> exec("set names utf8");

//consulta de las lecciones existentes
$query = "SELECT nLeccion,titulo,estado FROM lecciones";
$resultado = $cn ->prepare($query);
$resultado->execute();

$numResultado = $resultado ->rowCount();





//print json_encode($row);
if ($numResultado > 0) {
	while ($rows = $resultado->fetch(PDO::FETCH_ASSOC)){
		$data["leccion"][] = $rows;
	}	
	 echo json_encode($data);
}
