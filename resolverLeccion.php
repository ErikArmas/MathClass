<?php
	include 'assets/head.php';
	include 'assets/header.php';
	include 'datos/conexionDos.php';
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
		$data = $rows;
	}	
	json_encode($data);
}else{

	echo "<script>swal({
				type: 'warning',
                title: 'aviso',
                text: 'No se encontraron datos de la leccion'
            }).then(function() {
                window.location.href = 'inicio.php';
            })</script>";
}
?>
<link rel="stylesheet" href="css/resolverLeccion.css">

<div class="contenedor-lecciones">
	<div class="contenido">
		<h1 class="titulo"><?php echo $data["titulo"];  ?></h1>
		<p><?php echo $data["contenido"]; ?></p>
	</div>
	<div class="ejercicio">
		<h2>Ejercicio:</h2>
		<p><?php echo $data["ejercio"]; ?></p>

		<div class="respuesta"> 
			<div class="form">
				<label for="respuesta">Respuesta:</label>
				<input type="text" placeholder="Introduce tu respuesta" name="respuesta" id="respuesta">
				<input  id="respuestaCorrecta"	type="hidden" value="<?php echo $data['respuestaTema'] ?>" name="respuestaCorrecta" disabled="disabled">

				<input type="submit" value="Contestar" id="boton">
			</div>
			<div id="MostrarRespuesta"></div>
		</div>

	</div>

</div>

<script src="js/mostrarLecciones.js"></script>

<?php
 	include 'assets/footer.php';
 ?>