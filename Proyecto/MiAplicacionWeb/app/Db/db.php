<?php

class Conexion
{

    public static function conectar()
    {
        $conexion = new mysqli("mysql", "root", "1sf132", "Secretaria_administrativa");
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }

}

?>
