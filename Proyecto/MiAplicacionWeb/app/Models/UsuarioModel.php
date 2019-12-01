<?php
include 'Db/db.php';

class Usuario{
    private $db;
    private $usuario;
    private $rol;
    private $usuariorg;
    

    public function __construct(){
        $this->db= Conexion::conectar();
        $this->usuariorg= array();
        
    }
    public function validar($usuario,$pass){
        $consulta = $this->db->query("select id_rol,usuario from usuarios where usuario= '$usuario' and contrasena = '$pass' ");
        while ($row = $consulta->fetch_assoc()){
            $this->usuariorg[]=$row;
            
            

        }
        return $this->usuariorg;

    }

    public function usuario($usuario){
        $consulta = $this->db->query("select usuario,id_rol from usuarios where usuario= '$usuario'");
        foreach ($consulta as $usuariobd) {
           $this->usuario = $usuariobd['usuario'];
           $this->rol = $usuariobd['id_rol'];
           
        }
        
    }
    public function getUsuario(){
        return $this->usuario;
    }
    public function getRol(){
        return $this->usuariorg;
    }


}
?>