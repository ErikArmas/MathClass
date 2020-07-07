<?php

include 'conexion.php';
include 'entidades/usuarios.php';

/**
 * 
 */
class UsuariosDao extends Conexion
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
     * Metodo que sirve para validar el login
     *
     * @param      object         $usuario
     * @return     boolean
     */
    public static function login($usuario)
    {
        $query = "SELECT * FROM usuario WHERE usuario = :usuario AND pw = :pw";

        self::getConexion();

        $resultado = self::$cn->prepare($query);

        $resultado->bindValue(":usuario", $usuario->getUsuario());
        $resultado->bindValue(":pw", $usuario->getPw());

        $resultado->execute();

        if ($resultado->rowCount() > 0) {
            $filas = $resultado->fetch();
            if ($filas["usuario"] == $usuario->getUsuario()
                && $filas["pw"] == $usuario->getPw()) {
                return true;
            }
        }

        return false;
    }
}
