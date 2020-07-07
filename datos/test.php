<?php 
include 'Conexion.php';
include 'entidades/preguntas.php';

class Test extends Conexion
{
	protected static $cn;

    private static function getConexion()
    {
        self::$cn = Conexion::conectar();
    }

    private static function desconectar()
    {
        self::$cn = null;
    }

    /**
     * Metodo que obtiene las preguntas de los examenes
     *
     * @param      object         $preguntas
     * @return     boolean
     */
    public static function getPreguntas($pregunta)
    {
        $query = "SELECT * FROM preguntas WHERE FolioExamen = :FolioExamen";

        self::getConexion();

        $resultado = self::$cn->prepare($query);
        $resultado->bindValue(":FolioExamen", $pregunta->getFolioExamen());
        $resultado->execute();

        if ($resultado->rowCount() > 0) {
            $filas = $resultado->fetch(PDO::FETCH_ASSOC);
            echo (json_encode($resultado));
        }

        return false;
    }
}

