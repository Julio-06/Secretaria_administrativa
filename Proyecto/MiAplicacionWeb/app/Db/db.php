<?php

class Conexion
{

    public static function conectar()
    {
        $conexion = new mysqli("mysql", "root", "juliotupapiriko06", "Secretaria_administrativa");
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }
    

}


?>