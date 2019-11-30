<?php
include 'Db/db.php';

class Usuario{
    private $db;
    private $usuario;
    private $usuariorg;
    

    public function __construct(){
        $this->db= Conexion::conectar();
        $this->usuariorg= array();
    }
    public function validar($usuario,$pass){
        $consulta = $this->db->query("select * from usuarios where usuario= '$usuario' and contrasena = '$pass' ");
        while ($row = $consulta->fetch_assoc()){
            $this->usuariorg[]=$row;

        }
        return $this->usuariorg;

    }

    public function usuario($usuario){
        $consulta = $this->db->query("select usuario from usuarios where usuario= '$usuario'");
        foreach ($consulta as $usuariobd) {
           $this->usuario = $usuariobd['usuario'];
        }
    }
    public function getUsuario(){
        return $this->usuario;
    }


}
?>