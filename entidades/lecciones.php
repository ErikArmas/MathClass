<?php 
/**
 *Modelo de datos para las lecciones
 */
class Leccion
{
	private $idLeccion;
	private $nLeccion;
	private $numTema; 
	private $contenido; 
	private $ejercio; 
	private $respuestaTema;
	private $idMateria;

	public function getIdLeccion()
	{
		return $this->idLeccion;
	}
	
	public function setIdLeccion($idLeccion)
	{
		$this->idLeccion = $idLeccion;
	}

	public function getNLeccion()
	{
		return $this->nLeccion;
	}
	
	public function setNLeccion($nLeccion)
	{
		$this->nLeccion = $nLeccion;
	}

	public function getNumTema()
	{
		return $this->numTema;
	}
	
	public function setNumTema($numTema)
	{
		$this->numTema = $numTema;
	}

	public function getContenido()
	{
		return $this->contenido;
	}
	
	public function setContenido($contenido)
	{
		$this->contenido = $contenido;
	}

	public function getEjercio()
	{
		return $this->ejercio;
	}
	
	public function setEjercio($ejercio)
	{
		$this->ejercio = $ejercio;
	}

	public function getRespuestaTema()
	{
		return $this->respuestaTema;
	}
	
	public function setRespuestaTema($respuestaTema)
	{
		$this->respuestaTema = $respuestaTema;
	}

	public function getIdMateria()
	{
		return $this->idMateria;
	}
	
	public function setIdMateria($idMateria)
	{
		$this->idMateria = $idMateria;
	}

}