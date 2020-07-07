<?php 
/**
 * Modelo de datos Usuarios
 */
class Usuario
{
	private $id;
    private $usuario;
    private $LastName;
    private $FirstName;
    private $pw;
    private $correo;
    
    public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getUsuario(){
		return $this->usuario;
	}

	public function setUsuario($usuario){
		$this->usuario = $usuario;
	}

	public function getLastName(){
		return $this->LastName;
	}

	public function setLastName($LastName){
		$this->LastName = $LastName;
	}

	public function getFirstName(){
		return $this->FirstName;
	}

	public function setFirstName($FirstName){
		$this->FirstName = $FirstName;
	}

	public function getPw(){
		return $this->pw;
	}

	public function setPw($pw){
		$this->pw = $pw;
	}

	public function getCorreo(){
		return $this->correo;
	}

	public function setCorreo($correo){
		$this->correo = $correo;
	}
}