<?php 
/**
* 
*/
require_once('Models/DocenteModel.php');

class DocenteController
{
	
	function __construct()
	{
		
	}

	function index(){
		$docente = new DocenteModel();
		$datos = $docente->listar();
		require_once('Views/Docente/index.php');
	}

	function add(){
		require_once('Views/Docente/add.php');
	}

	function save(){
		$datos = array($_POST['usuario'],$_POST['contrasena'],$_POST['rol'],$_POST['primer_nombre'], $_POST['segundo_nombre'], $_POST['primer_apellido'], $_POST['segundo_apellido'], $_POST['cedula'], $_POST['fecha_de_nacimiento'] , $_POST['genero'], $_POST['sangre'], $_POST['peso'], $_POST['estatura'], $_POST['estado_salud'], $_POST['estado_civil']);
		/*print_r($datos);*/
		$Usuario = new Usuario();
		$User = $Usuario->registrar($datos);
		if ($Docent == 0){
			require_once('Views/Usuario/registrado.php');
		}
		else{
			require_once('Views/Usuario/existente.php');
		}
		
	}

	/* function error(){
		require_once('Views/Docente/error.php');
	} */

}
?>
