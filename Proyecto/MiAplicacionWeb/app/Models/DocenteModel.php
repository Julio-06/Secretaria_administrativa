<?php

class DocenteModel{
    private $db;
    private $docentes;
    
 
    public function __construct(){
        $this->db = Conexion::conectar();
        $this->Docentes = array();
    }
    public function listar(){
        $consulta = $this->db->query("select * from docentes;");
        while($filas = $consulta->fetch_assoc()){
            $this->Docentes[] = $filas;
        }
        return $this->Docentes;
    }
    public function registrar($datos){
        $prueba = $datos[1];
        $consul = $this->db->query("SELECT nombre FROM prueba where nombre='$prueba'->fetch()");
        
        if ($consul == 0){
            $this->db->query("INSERT INTO prueba VALUES('$datos[0]','$datos[1]');");
            return($mandato); 
        }
        else{
            
            return ($mandato);
        }
    }
    /*Arreglar esto
    if(mysql_num_rows($rsexiste)>0)
    http://www.uterra.com/base_datos_mysql/codigo_mysql.php?ref=evitar_registros_duplicados_en_mysql
    */
   
}

?>