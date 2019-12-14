<?php
require_once("../../Db/db.php");
class LoginModel{
    private $db;
    private $login;

    public function __construct(){
        $this->db= Conexion::conectar();
        $this->login=array();
    }
    public function validar($usuario,$pass){
        $consulta = $this->db->query("select * from usuarios where usuario= '$usuario' and contrasena = '$pass' ");
        while ($row = $consulta->fetch_assoc()){
            $this->login[]=$row;

        }
        return $this->login;

    }
}







?>