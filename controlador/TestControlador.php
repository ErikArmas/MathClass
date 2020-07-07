<?php 

include 'datos/test.php';

class TestControlador
{

    public static function test($FolioExamen)
    {
        $obj_test = new Test();
        $obj_test->setFolioExamen($FolioExamen);

        return Test::getPreguntas($obj_test);
    }
}