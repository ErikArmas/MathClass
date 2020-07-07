<?php 
try {
	$cn = new PDO("mysql:host=localhost;dbname=plataforma","root","");
	
	 $query = "SELECT * FROM preguntas WHERE FolioExamen = 1";

	$resultado = $cn->prepare($query);
	$resultado->execute();

	echo $resultado->rowCount();

/*	$data = $resultado->fetchAll(PDO::FETCH_ASSOC);

	echo json_encode($data);
*/	
	if ($resultado->rowCount() > 0) {
    	while($rows = $resultado->fetchAll(PDO::FETCH_OBJ)) {
			$data = $rows;
		}
 		print (json_encode($rows));
 		
 	}else{
 		echo 'No se encontro valores';
 	}


}catch(PDOException $e) {
	die("Error connection: ".$e->getMessage());
}


 ?>