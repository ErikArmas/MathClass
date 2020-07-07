<?php
class Pregunta{

	private $idPregunta;
    private $pregunta;
    private $respuestaUno;
    private $respuestaDos;
    private $respuestaTres;
    private $respuestaCuatro;
    private $respuestaCorrecta;
    private $folioExamen;

    public function getIdPregunta()
    {
        return $this->idPregunta;
    }
    public function setIdPregunta($idPregunta)
    {
        $this->idPregunta = $idPregunta;

        return $this;
    }

    public function getPregunta()
    {
        return $this->pregunta;
    }

    public function setPregunta($pregunta)
    {
        $this->pregunta = $pregunta;

        return $this;
    }

    public function getRespuestaUno()
    {
        return $this->respuestaUno;
    }

    public function setRespuestaUno($respuestaUno)
    {
        $this->respuestaUno = $respuestaUno;

        return $this;
    }

    public function getRespuestaDos()
    {
        return $this->respuestaDos;
    }

    public function setRespuestaDos($respuestaDos)
    {
        $this->respuestaDos = $respuestaDos;

        return $this;
    }

    public function getRespuestaTres()
    {
        return $this->respuestaTres;
    }

    public function setRespuestaTres($respuestaTres)
    {
        $this->respuestaTres = $respuestaTres;

        return $this;
    }

    public function getRespuestaCuatro()
    {
        return $this->respuestaCuatro;
    }

    public function setRespuestaCuatro($respuestaCuatro)
    {
        $this->respuestaCuatro = $respuestaCuatro;

        return $this;
    }

    public function getRespuestaCorrecta()
    {
        return $this->respuestaCorrecta;
    }

    public function setRespuestaCorrecta($respuestaCorrecta)
    {
        $this->respuestaCorrecta = $respuestaCorrecta;

        return $this;
    }

    public function getFolioExamen()
    {
        return $this->folioExamen;
    }

    public function setFolioExamen($folioExamen)
    {
        $this->folioExamen = $folioExamen;

        return $this;
    }
}