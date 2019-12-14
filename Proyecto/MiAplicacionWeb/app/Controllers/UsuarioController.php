<?php
include_once 'Models/UsuarioModel.php';
class UsuarioSession
{
    function __construct()
    {

    }
    
    function validar($usu,$pass){
        $user = $usu;
        $contra = $pass;
        $rob=new Usuario();
        $iniciar=$rob->validar($user,$contra);
        if(sizeof($iniciar)>0){
            foreach ($iniciar as $idrol) {
                $id_rol = $idrol["id_rol"];
            }
            return $id_rol;
            
        }else{
            return 0;
        }
    }
    function ingresar($user){
        $rob=new Usuario();
        $iniciar=$rob->usuario($user);

    }
    function usuario(){
        $model=new Usuario();
        $usuario=$model->getUsuario();
        if($usuario!=NULL){
            return $usuario;
        }
    }
    function rol(){
        $model=new Usuario();
        $rol=$model->getRol();
        

        return $rol;
    }
    function add(){
		$docente = new Usuario();
		require_once('Views/Usuario/add.php');
	}
    function save(){
        $datos = array($_POST['usuario'],$_POST['contrasena'],$_POST['rol'],
        $_POST['primer_nombre'], $_POST['segundo_nombre'], $_POST['primer_apellido'],
        $_POST['segundo_apellido'], $_POST['fecha_de_nacimiento'], $_POST['celular'],
        $_POST['telefono_casa'], $_POST['cedula'],$_POST['genero'], $_POST['sangre'],
        $_POST['peso'], $_POST['estatura'], $_POST['estado_salud'], $_POST['estado_civil']);
		/*print_r($datos);*/
		$Usuario = new Usuario();
		$User = $Usuario->registrar($datos);
		if ($User == 0){
			require_once('Views/Usuario/registrado.php');
		}
		else{
			require_once('Views/Usuario/existente.php');;
		}
		
	}

}
?>