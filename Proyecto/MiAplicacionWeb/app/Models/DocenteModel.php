<?php

class DocenteModel{
    private $db;
    private $docentes;
 
    public function __construct(){
        $this->db = Conexion::conectar();
        $this->docentes = array();
    }
    public function listar(){
        $consulta = $this->db->query("select * from docentes;");
        while($filas = $consulta->fetch_assoc()){
            $this->docentes[] = $filas;
        }
        return $this->docentes;
    }
    public function consultar($id,$tabla){
        if ($tabla=="docentes"){
            $consulta = $this->db->query("select * from $tabla where usuario_id = '$id';");

        }
        else {
            $consulta = $this->db->query("select * from $tabla where docente_id = '$id';");
        }
        while($filas = $consulta->fetch_assoc()){
            $this->docentes[] = $filas;
        }
        return $this->docentes;
    }
}

?>
