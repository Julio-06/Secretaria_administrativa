<?php
class AdministrativoModel{
    private $db;
    private $administrativos;
 
    public function __construct(){
        $this->db = Conexion::conectar();
        $this->administrativos = array();
    }
    public function listar(){
        $consulta = $this->db->query("select * from administrativos;");
        while($registros = $consulta->fetch_assoc()){
            $this->administrativos[] = $registros;
        }
        return $this->administrativos;
    }
    //funciones para actualizar un registro
    public function consultaT($id,$tabla){
        switch ($tabla) {
            case 'administrativos':
                $consulta = $this->db->query("select * from $tabla where idadministrativo = '$id';");
                break;
            case 'residencia_administrativos':
                $consulta = $this->db->query("select * from $tabla where idresidencia = '$id';");
                break;
            case 'informacion_institucional_administrativos':
                $consulta = $this->db->query("select * from $tabla where idinformacion_institucional = '$id';");
                break;
            case 'familiares_emergencia_administrativos':
                $consulta = $this->db->query("select * from $tabla where idfamiliares_emergencia = '$id';");
                break;
            case 'laboral_administrativos':
                $consulta = $this->db->query("select * from $tabla where idadministrativo_laboral = '$id';");
                break;
            case 'capacitaciones_administrativos':
                $consulta = $this->db->query("select * from $tabla where idcapacitaciones = '$id';");
                break;
            case 'diplomados_administrativos':
                $consulta = $this->db->query("select * from $tabla where iddiplomados = '$id';");
                break;
            case 'registros_academicos_administrativos':
                $consulta = $this->db->query("select * from $tabla where idregistros_academicos = '$id';");
                break;
            
            default:
                # code...
                break;
        }
        

        while($filas = $consulta->fetch_assoc()){
            $this->administrativos[] = $filas;
        }
        return $this->administrativos;
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
        prioridad_localizar='$prioridad',fecha_de_nacimiento_a='$fecha',celular_a='$celular',telefono_residencia='$telefono_resi',telefono_oficina='$telefono_ofi',correo_electronico='$correo'
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
        set categoria_administrativo='$categoria',departamento='$departamento',cargo_administrativo='$cargo',
        ubicacion='$ubicacion',repre_organos_gobierno='$repre'
        where idadministrativo_laboral = '$id';");
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
    public function updateAdministrativos($id,$tabla,$nombre1,$nombre2,$apellido1,$apellido2,$fecha,$celular,$telefono,$correo1,$correo2,$cedula,$genero,$sangre,$peso,$estatura,$salud,$estado_civil){
        $update = $this->db->query(
            "update $tabla set primer_nombre='$nombre1', segundo_nombre='$nombre2', primer_apellido='$apellido1',
            segundo_apellido='$apellido2', fecha_de_nacimiento='$fecha', celular='$celular', telefono_casa='$telefono',
            cedula='$cedula', genero='$genero', sangre='$sangre', peso='$peso', estatura='$estatura', estado_salud='$salud',
            estado_civil='$estado_civil', correo_personal1='$correo1', correo_personal2='$correo2'
            where idadministrativo = '$id';");
        if ($update==TRUE) {
            return TRUE;
        }
        else {
            return FALSE;
        }
    }

    public function delete($id,$tabla){


        switch ($tabla) {
            case 'residencia_administrativos':
                $delete = $this->db->query("DELETE FROM $tabla WHERE idresidencia='$id'");
                if ($delete==TRUE) {
                    return TRUE;
                }
                else {
                    return FALSE;
                }
                break;
            case 'informacion_institucional_administrativos':
                $delete = $this->db->query("DELETE FROM $tabla WHERE idinformacion_institucional='$id'");
                if ($delete==TRUE) {
                    return TRUE;
                }
                else {
                    return FALSE;
                }
                break;
            case 'familiares_emergencia_administrativos':
                $delete = $this->db->query("DELETE FROM $tabla WHERE idfamiliares_emergencia='$id'");
                if ($delete==TRUE) {
                    return TRUE;
                }
                else {
                    return FALSE;
                }
                break;
            case 'administrativos':
                $delete = $this->db->query("DELETE FROM $tabla WHERE idadministrativo='$id'");
                if ($delete==TRUE) {
                    return TRUE;
                }
                else {
                    return FALSE;
                }
                break;
            case 'registros_academicos_administrativos':
                $delete = $this->db->query("DELETE FROM $tabla WHERE idregistros_academicos='$id'");
                if ($delete==TRUE) {
                    return TRUE;
                }
                else {
                    return FALSE;
                }
                break;
            case 'diplomados_administrativos':
                $delete = $this->db->query("DELETE FROM $tabla WHERE iddiplomados='$id'");
                if ($delete==TRUE) {
                    return TRUE;
                }
                else {
                    return FALSE;
                }
                break;
            case 'capacitaciones_administrativos':
                $delete = $this->db->query("DELETE FROM $tabla WHERE idcapacitaciones='$id'");
                if ($delete==TRUE) {
                    return TRUE;
                }
                else {
                    return FALSE;
                }
                break;
            case 'laboral_administrativos':
                $delete = $this->db->query("DELETE FROM $tabla WHERE idadministrativo_laboral='$id'");
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

        if ($tabla=="administrativos"){
            $consulta = $this->db->query("select * from $tabla where usuario_id = '$id';");

        }
       
        else {
            $consulta = $this->db->query("select * from $tabla where administrativo_id = '$id';");
        }
        
        while($filas = $consulta->fetch_assoc()){
            $this->administrativos[] = $filas;
        }
        return $this->administrativos;
    }


    //funcion para insertar un nuevo registro
    public function insertDiplomados($titulo,$año,$instituto,$tabla,$usuario){
        $registro = $this->db->query("insert into $tabla (titulo_obtenido, año, institucion,administrativo_id) values ('$titulo','$año','$instituto','$usuario');");
        
        if ($registro==TRUE) {
            return TRUE;
        }
        else {
            return FALSE;
        }
        
        
    }
    public function insertCapacitaciones($capacitacion,$año,$rol,$horas,$institucion,$tabla,$usuario){
        $registro = $this->db->query(
            "insert into $tabla (nombre_capacitacion,año,rol,horas,institucion,administrativo_id) 
            values ('$capacitacion','$año','$rol','$horas','$institucion','$usuario');");
        
        if ($registro==TRUE) {
            return TRUE;
        }
        else {
            return FALSE;
        }
        
        
    }
    public function insertAdministrativo($titulo,$año,$instituto,$tabla,$usuario){
        $registro = $this->db->query("insert into $tabla (titulo_obtenido, año, institucion,administrativo_id) values ('$titulo','$año','$instituto','$usuario');");
        
        if ($registro==TRUE) {
            return TRUE;
        }
        else {
            return FALSE;
        }
        
        
    }
    public function insertFamiliares($parentesco,$nombre,$apellido,$localizar,$prioridad,$fecha,$celular,$telefono_resi,$telefono_ofi,$correo,$tabla,$usuario){
        $registro = $this->db->query(
            "insert into $tabla (parentesco, nombre, apellido,localizar_emergencia,prioridad_localizar,fecha_de_nacimiento_a,celular_a,telefono_residencia,telefono_oficina,correo_electronico,administrativo_id) 
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
            "insert into $tabla (correo_institucional, telefono_institucional, extension,administrativo_id) 
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
            "insert into $tabla (categoria_administrativo, departamento, cargo_administrativo,ubicacion,repre_organos_gobierno,administrativo_id) 
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
            "insert into $tabla (titulo_obtenido,nivel, año, institucion,administrativo_id) 
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
        "insert into $tabla (provincia, distrito, corregimiento, direccion_actual,administrativo_id) 
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