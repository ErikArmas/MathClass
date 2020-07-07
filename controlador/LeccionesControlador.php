<?php 
include 'datos/resolverLecciones.php';

class LeccionesControlador
{
    public static function getLeccion($id)
    {
    	echo "Este es el valor del id desde el controlador".$id."<br>";
        return json_encode(Leccion::obtenerLeccion($id));
    }
}