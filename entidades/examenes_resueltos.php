<?php 
/**
 * Modelo para los examenes resueltos
 */
class ExamenResuelto
{
	private $folioExamenResuelto;
	private $matricula;
	private $respuesta;
	private $nota;
	private $fkExamenResuelto;

    public function getFolioExamenResuelto()
    {
        return $this->folioExamenResuelto;
    }

    public function setFolioExamenResuelto($folioExamenResuelto)
    {
        $this->folioExamenResuelto = $folioExamenResuelto;

        return $this;
    }

    public function getMatricula()
    {
        return $this->matricula;
    }

    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;

        return $this;
    }

    public function getRespuesta()
    {
        return $this->respuesta;
    }

    public function setRespuesta($respuesta)
    {
        $this->respuesta = $respuesta;

        return $this;
    }

    public function getNota()
    {
        return $this->nota;
    }

    public function setNota($nota)
    {
        $this->nota = $nota;

        return $this;
    }

    public function getFkExamenResuelto()
    {
        return $this->fkExamenResuelto;
    }

    public function setFkExamenResuelto($fkExamenResuelto)
    {
        $this->fkExamenResuelto = $fkExamenResuelto;

        return $this;
    }
}