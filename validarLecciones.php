<?php 

	
$respuesta = $_POST["respuesta"];
$id = $_POST["correcto"];
$dato["obj"][] = array("respuesta" => $respuesta,"correcto" => $id);

print json_encode($dato);




