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
    //funciones para actualizar un registro
    public function consultaT($id,$tabla){
        switch ($tabla) {
            case 'docentes':
                $consulta = $this->db->query("select * from $tabla where iddocentes = '$id';");
                break;
            case 'residencia_docentes':
                $consulta = $this->db->query("select * from $tabla where idresidencia = '$id';");
                break;
            case 'informacion_institucional_docentes':
                $consulta = $this->db->query("select * from $tabla where idinformacion_institucional = '$id';");
                break;
            case 'familiares_emergencia_docentes':
                $consulta = $this->db->query("select * from $tabla where idfamiliares_emergencia = '$id';");
                break;
            case 'laboral_docentes':
                $consulta = $this->db->query("select * from $tabla where iddocentes_laboral = '$id';");
                break;
            case 'capacitaciones_docentes':
                $consulta = $this->db->query("select * from $tabla where idcapacitaciones = '$id';");
                break;
            case 'diplomados_docentes':
                $consulta = $this->db->query("select * from $tabla where iddiplomados = '$id';");
                break;
            case 'registros_academicos_docentes':
                $consulta = $this->db->query("select * from $tabla where idregistros_academicos = '$id';");
                break;
            
            default:
                # code...
                break;
        }
        

        while($filas = $consulta->fetch_assoc()){
            $this->docentes[] = $filas;
        }
        return $this->docentes;
    }

    public function updateResidencia($id,$tabla,$provincia,$distrito,$corregimiento,$direccion){
        $update = $this->db->query("update $tabla 
        set provincia='$provincia',distrito='$distrito',corregimiento='$corregimiento', direccion_actual='$direccion'  
        where idresidencia = '$id';");
        if ($update==TRUE) {
            return TRUE;
        }
        else {
            return FALSE;
        }
    }
    public function updateInstitucional($id,$tabla,$correo_inst,$telefono_inst,$extension){
        $update = $this->db->query("update $tabla 
        set correo_institucional='$correo_inst',telefono_institucional='$telefono_inst',extension='$extension'  
        where idinformacion_institucional = '$id';");
        if ($update==TRUE) {
            return TRUE;
        }
        else {
            return FALSE;
        }
    }
    public function updateFamiliares($id,$tabla,$parentesco,$nombre,$apellido,$localizar,$prioridad,$fecha,$celular,$telefono_resi,$telefono_ofi,$correo){
        $update = $this->db->query("update $tabla 
        set parentesco='$parentesco',nombre='$nombre',apellido='$apellido',localizar_emergencia='$localizar',
        prioridad_localizar='$prioridad',fecha_de_nacimiento_f='$fecha',celular_f='$celular',telefono_residencia='$telefono_resi',telefono_oficina='$telefono_ofi',correo_electronico='$correo'
        where idfamiliares_emergencia = '$id';");
        if ($update==TRUE) {
            return TRUE;
        }
        else {
            return FALSE;
        }
    }
    public function updateLaboral($id,$tabla,$categoria,$departamento,$cargo,$ubicacion,$repre){
        $update = $this->db->query("update $tabla 
        set categoria_docente='$categoria',departamento='$departamento',cargo_administrativo='$cargo',
        ubicacion='$ubicacion',repre_organos_gobierno='$repre'
        where iddocentes_laboral = '$id';");
        if ($update==TRUE) {
            return TRUE;
        }
        else {
            return FALSE;
        }
    }
    public function updateCapacitaciones($id,$tabla,$capacitacion,$año,$rol,$horas,$institucion){
        $update = $this->db->query("update $tabla 
        set nombre_capacitacion='$capacitacion',año='$año',rol='$rol',horas='$horas',institucion='$institucion'
        where idcapacitaciones = '$id';");
        if ($update==TRUE) {
            return TRUE;
        }
        else {
            return FALSE;
        }
    }
    public function updateDiplomados($id,$tabla,$titulo,$año,$intitucion){
        $update = $this->db->query("update $tabla set titulo_obtenido='$titulo',año='$año',institucion='$intitucion'  where iddiplomados = '$id';");
        if ($update==TRUE) {
            return TRUE;
        }
        else {
            return FALSE;
        }
    }
    public function updateAcademico($id,$tabla,$titulo,$nivel,$año,$institucion){
        $update = $this->db->query("update $tabla 
        set titulo_obtenido='$titulo',nivel='$nivel',año='$año',institucion='$institucion'  
        where idregistros_academicos = '$id';");
        if ($update==TRUE) {
            return TRUE;
        }
        else {
            return FALSE;
        }
    }
    public function updateDocentes($id,$tabla,$nombre1,$nombre2,$apellido1,$apellido2,$fecha,$celular,$telefono,$correo1,$correo2,$cedula,$genero,$sangre,$peso,$estatura,$salud,$estado_civil){
        $update = $this->db->query(
            "update $tabla set primer_nombre='$nombre1', segundo_nombre='$nombre2', primer_apellido='$apellido1',
            segundo_apellido='$apellido2', fecha_de_nacimiento='$fecha', celular='$celular', telefono_casa='$telefono',
            cedula='$cedula', genero='$genero', sangre='$sangre', peso='$peso', estatura='$estatura', estado_salud='$salud',
            estado_civil='$estado_civil', correo_personal1='$correo1', correo_personal2='$correo2'
            where iddocentes = '$id';");
        if ($update==TRUE) {
            return TRUE;
        }
        else {
            return FALSE;
        }
    }

    public function delete($id,$tabla){


        switch ($tabla) {
            case 'residencia_docentes':
                $delete = $this->db->query("DELETE FROM $tabla WHERE idresidencia='$id'");
                if ($delete==TRUE) {
                    return TRUE;
                }
                else {
                    return FALSE;
                }
                break;
            case 'informacion_institucional_docentes':
                $delete = $this->db->query("DELETE FROM $tabla WHERE idinformacion_institucional='$id'");
                if ($delete==TRUE) {
                    return TRUE;
                }
                else {
                    return FALSE;
                }
                break;
            case 'familiares_emergencia_docentes':
                $delete = $this->db->query("DELETE FROM $tabla WHERE idfamiliares_emergencia='$id'");
                if ($delete==TRUE) {
                    return TRUE;
                }
                else {
                    return FALSE;
                }
                break;
            case 'docentes':
                $delete = $this->db->query("DELETE FROM $tabla WHERE iddocentes='$id'");
                if ($delete==TRUE) {
                    return TRUE;
                }
                else {
                    return FALSE;
                }
                break;
            case 'registros_academicos_docentes':
                $delete = $this->db->query("DELETE FROM $tabla WHERE idregistros_academicos='$id'");
                if ($delete==TRUE) {
                    return TRUE;
                }
                else {
                    return FALSE;
                }
                break;
            case 'diplomados_docentes':
                $delete = $this->db->query("DELETE FROM $tabla WHERE iddiplomados='$id'");
                if ($delete==TRUE) {
                    return TRUE;
                }
                else {
                    return FALSE;
                }
                break;
            case 'capacitaciones_docentes':
                $delete = $this->db->query("DELETE FROM $tabla WHERE idcapacitaciones='$id'");
                if ($delete==TRUE) {
                    return TRUE;
                }
                else {
                    return FALSE;
                }
                break;
            case 'laboral_docentes':
                $delete = $this->db->query("DELETE FROM $tabla WHERE iddocentes_laboral='$id'");
                if ($delete==TRUE) {
                    return TRUE;
                }
                else {
                    return FALSE;
                }
                break;
            default:
                # code...
                break;
        }
        
    }

    //funciones para buscar un registro
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


    //funcion para insertar un nuevo registro
    public function insertDiplomados($titulo,$año,$instituto,$tabla,$usuario){
        $registro = $this->db->query("insert into $tabla (titulo_obtenido, año, institucion,docente_id) values ('$titulo','$año','$instituto','$usuario');");
        
        if ($registro==TRUE) {
            return TRUE;
        }
        else {
            return FALSE;
        }
        
        
    }
    public function insertCapacitaciones($capacitacion,$año,$rol,$horas,$institucion,$tabla,$usuario){
        $registro = $this->db->query(
            "insert into $tabla (nombre_capacitacion,año,rol,horas,institucion,docente_id) 
            values ('$capacitacion','$año','$rol','$horas','$institucion','$usuario');");
        
        if ($registro==TRUE) {
            return TRUE;
        }
        else {
            return FALSE;
        }
        
        
    }
    public function insertDocentes($titulo,$año,$instituto,$tabla,$usuario){
        $registro = $this->db->query("insert into $tabla (titulo_obtenido, año, institucion,docente_id) values ('$titulo','$año','$instituto','$usuario');");
        
        if ($registro==TRUE) {
            return TRUE;
        }
        else {
            return FALSE;
        }
        
        
    }
    public function insertFamiliares($parentesco,$nombre,$apellido,$localizar,$prioridad,$fecha,$celular,$telefono_resi,$telefono_ofi,$correo,$tabla,$usuario){
        $registro = $this->db->query(
            "insert into $tabla (parentesco, nombre, apellido,localizar_emergencia,prioridad_localizar,fecha_de_nacimiento_f,celular_f,telefono_residencia,telefono_oficina,correo_electronico,docente_id) 
            values ('$parentesco','$nombre','$apellido','$localizar','$prioridad','$fecha','$celular','$telefono_resi','$telefono_ofi','$correo','$usuario');");
        
        if ($registro==TRUE) {
            return TRUE;
        }
        else {
            return FALSE;
        }
        
        
    }
    public function insertInstitucional($correo_inst,$telefono_inst,$extension,$tabla,$usuario){
        $registro = $this->db->query(
            "insert into $tabla (correo_institucional, telefono_institucional, extension,docente_id) 
            values ('$correo_inst','$telefono_inst','$extension','$usuario');");
        
        if ($registro==TRUE) {
            return TRUE;
        }
        else {
            return FALSE;
        }
        
        
    }
    public function insertLaboral($categoria,$departamento,$cargo,$ubicacion,$repre,$tabla,$usuario){
        $registro = $this->db->query(
            "insert into $tabla (categoria_docente, departamento, cargo_administrativo,ubicacion,repre_organos_gobierno,docente_id) 
            values ('$categoria','$departamento','$cargo','$ubicacion','$repre','$usuario');");
        
        if ($registro==TRUE) {
            return TRUE;
        }
        else {
            return FALSE;
        }
        
        
    }
    public function insertAcademico($titulo,$nivel,$año,$institucion,$tabla,$usuario){
        $registro = $this->db->query(
            "insert into $tabla (titulo_obtenido,nivel, año, institucion,docente_id) 
            values ('$titulo','$nivel','$año','$institucion','$usuario');");
        
        if ($registro==TRUE) {
            return TRUE;
        }
        else {
            return FALSE;
        }
        
        
    }
    public function insertResidencia($provincia,$distrito,$corregimiento,$direccion,$tabla,$usuario){
        $registro = $this->db->query(
        "insert into $tabla (provincia, distrito, corregimiento, direccion_actual,docente_id) 
        values ('$provincia','$distrito','$corregimiento','$direccion','$usuario');");
        
        if ($registro==TRUE) {
            return TRUE;
        }
        else {
            return FALSE;
        }
        
        
    }
}

?>
