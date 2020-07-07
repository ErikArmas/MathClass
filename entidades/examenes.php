<?php 
/**
 *Modelo de Examenes 
 */
class Examen
{
	private $folioExamen;
	private $profesor; 
	private $tiempo; 
	private $descripcion; 
	private $fechaPublicacion;
	private $fechaCierre;
	private $idLeccion;

	public function getFolioExamen()
	 {
	 	return $this->folioExamen;
	 }
	 
	 public function setFolioExamen($folioExamen)
	 {
	 	$this->folioExamen = $folioExamen;
	 } 

	 public function getProfesor()
	 {
	 	return $this->profesor;
	 }
	 
	 public function setProfesor($profesor)
	 {
	 	$this->profesor = $profesor;
	 }

	 public function getTiempo()
	 {
	 	return $this->tiempo;
	 }
	 
	 public function setTiempo($tiempo)
	 {
	 	$this->tiempo = $tiempo;
	 }

	 public function getDescripcion()
	 {
	 	return $this->descripcion;
	 }
	 
	 public function setDescripcion($descripcion)
	 {
	 	$this->descripcion = $descripcion;
	 }

	 public function getFechaPublicacion()
	 {
	 	return $this->fechaPublicacion;
	 }
	 
	 public function setFechaPublicacion($fechaPublicacion)
	 {
	 	$this->fechaPublicacion = $fechaPublicacion;
	 }

	 public function getFechaCierre()
	 {
	 	return $this->fechaCierre;
	 }
	 
	 public function setFechaCierre($fechaCierre)
	 {
	 	$this->fechaCierre = $fechaCierre;
	 }

	 public function getIdLeccion()
	 {
	 	return $this->idLeccion;
	 }
	 
	 public function setIdLeccion($idLeccion)
	 {
	 	$this->idLeccion = $idLeccion;
	 }
}