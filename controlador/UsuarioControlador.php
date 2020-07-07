<?php

include 'datos/UsuariosDao.php';

class UsuarioControlador
{

    public static function login($usuario, $password)
    {
        $obj_usuario = new Usuario();
        $obj_usuario->setUsuario($usuario);
        $obj_usuario->setPw($password);

        return UsuariosDao::login($obj_usuario);
    }
}