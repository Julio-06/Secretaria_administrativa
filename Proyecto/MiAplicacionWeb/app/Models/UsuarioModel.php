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
        $consulta = $this->db->query("select * from usuarios where usuario= '$usuario' and contrasena = '$pass' ");
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
    public function list(){
        $consulta = $this->db->query("select docentes.primer_nombre, docentes.primer_apellido, docentes.cedula,docentes.correo_personal1,
        usuarios.id_rol from docentes inner join usuarios on usuarios.idusuarios = docentes.usuario_id union select administrativos.primer_nombre,
        administrativos.primer_apellido, administrativos.cedula, administrativos.correo_personal1, usuarios.id_rol from administrativos inner join usuarios
        on usuarios.idusuarios = administrativos.usuario_id order by primer_nombre ASC");
        while($doc = $consulta->fetch_assoc()){
            if($doc['id_rol'] == 2){
            $doc['id_rol']='administrativo';
            $this->docentes[] = $doc;
            }
            elseif($doc['id_rol'] == 3){
                $doc['id_rol']='docente';
                $this->docentes[] = $doc; 
            }
        }
        return $this->docentes;
        }  
       
        
    
    public function search($id,$n){
            
            $consul = $this->db->query("SELECT * FROM docentes where cedula='$id' union select * from  administrativos where cedula='$id'");
            $this->consuli = $consul->fetch_assoc();
            return($this->consuli);
       }
    /*AGREGAR ESTA FUNCION*/
    public function registrar($datos){
        /*print_r($prueba);
        NOTA: ARREGLAR QUERYS*/
        $consul = $this->db->query("SELECT COUNT(*) FROM usuarios where usuario='$datos[0]'");
        $valid = $consul->fetch_row();
        $prueb = $this->db->query("SELECT COUNT(*) FROM docentes where cedula='$datos[10]' union SELECT COUNT(*) FROM administrativos where cedula='$datos[10]'");
        $valid2 = $prueb->fetch_row();
        if ($valid[0] == 0){
            if($valid2[0] == 0){
                if($datos[2] == 2){
                        $this->db->query("INSERT INTO usuarios(usuario,contrasena,estado_usuario,id_rol) VALUES('$datos[0]','$datos[1]','act','$datos[2]')");
                        $id_us = $this->db->query("SELECT idusuarios FROM usuarios where usuario='$datos[0]'");
                        $valid3 = $id_us->fetch_row();
                        $this->db->query("INSERT INTO administrativos(primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, fecha_de_nacimiento,
                        celular, telefono_casa, cedula, genero, sangre, peso, estatura, estado_salud, estado_civil, correo_personal1,usuario_id)
                        VALUES('$datos[3]','$datos[4]','$datos[5]','$datos[6]','$datos[7]','$datos[8]','$datos[9]','$datos[10]','$datos[11]',
                        '$datos[12]','$datos[13]','$datos[14]','$datos[15]','$datos[16]','$datos[0]','$valid3[0]')");
                        return($valid2[0]);
                }
                elseif($datos[2] == 3){
                        $this->db->query("INSERT INTO usuarios(usuario,contrasena,estado_usuario,id_rol) VALUES ('$datos[0]','$datos[1]','act','$datos[2]')");
                        $id_us = $this->db->query("SELECT idusuarios FROM usuarios where usuario='$datos[0]'");
                        $valid3 = $id_us->fetch_row();
                        $this->db->query("INSERT INTO docentes(primer_nombre, segundo_nombre, primer_apellido,
                        segundo_apellido, fecha_de_nacimiento, celular, telefono_casa, cedula, genero, sangre, peso,
                        estatura, estado_salud, estado_civil, correo_personal1, usuario_id) VALUES('$datos[3]','$datos[4]',
                        '$datos[5]','$datos[6]','$datos[7]','$datos[8]','$datos[9]','$datos[10]','$datos[11]','$datos[12]',
                        '$datos[13]','$datos[14]','$datos[15]','$datos[16]','$datos[0]','$valid3[0]')");
                        return($valid2[0]);
                }    
                else{
                        return($valid2[0]);
                }   
            }
            else{
                return($valid2[0]);
            }
        }
        else{
            return($valid[0]);
        }
        }
}
?>