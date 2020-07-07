<?php  

class Materia{
	private $idMateria;
	private $claveMateria; 
	private $nombreMateria;
	private $idUsuarios; 

	public function getIdMateria()
	{
		return $this->idMateria;
	}
	
	public function setIdMateria($idMateria)
	{
		$this->idMateria = $idMateria;
	}

	public function getClaveMateria()
	{
		return $this->claveMateria;
	}
	
	public function setClaveMateria($claveMateria)
	{
		$this->claveMateria = $claveMateria;
	}

	public function getNombreMateria()
	{
		return $this->nombreMateria;
	}
	
	public function setNombreMateria($nombreMateria)
	{
		$this->nombreMateria = $nombreMateria;
	}

	public function getIdUsuarios()
	{
		return $this->idUsuarios;
	}
	
	public function setIdUsuarios($idUsuarios)
	{
		$this->idUsuarios = $idUsuarios;
	}
	
}