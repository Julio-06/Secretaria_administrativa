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
        /*print_r($prueba);*/
        $consul = $this->db->query("SELECT COUNT(*) FROM docentes where cedula='$datos[4]'");
        $valid = $consul->fetch_row();

       /* print_r($consul);*/
        /*print_r($consul->type);
        print_r($valid);
        
        die();*/
        
        if ($valid[0] == 0){
            $this->db->query("INSERT INTO docentes(primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, fecha_de_nacimiento, cedula, genero, sangre, peso, estatura, estado_salud, estado_civil) VALUES('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[5]','$datos[4]','$datos[6]','$datos[7]','$datos[8]','$datos[9]','$datos[10]','$datos[11]');");
            return($valid[0]); 
        }
        else{
            return ($valid[0]);
        }
    }
    /*Arreglar esto
    if(mysql_num_rows($rsexiste)>0)
    http://www.uterra.com/base_datos_mysql/codigo_mysql.php?ref=evitar_registros_duplicados_en_mysql
    */
   
}

?>