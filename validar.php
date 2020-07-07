<?php

include 'controlador/UsuarioControlador.php';

//

header('Content-type: aplication/json');
$resultado = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["nombre"]) && isset($_POST["pw"])) {

        $txtUsuario  = validar_campo($_POST["nombre"]);
        $txtPassword = validar_campo($_POST["pw"]);

        $resultado = array("estado" => "true");

        if (UsuarioControlador::login($txtUsuario, $txtPassword)) {
           //header("Location: inicio.php");   
           return print(json_encode($resultado));
        }
    }
}

$resultado = array("estado" => "false");
return print(json_encode($resultado));


function validar_campo($campo)
{
    $campo = trim($campo);
    $campo = stripcslashes($campo);
    $campo = htmlspecialchars($campo);

    return $campo;
}