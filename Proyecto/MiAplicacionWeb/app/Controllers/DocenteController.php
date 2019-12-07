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
		$docente = new DocenteModel();
		require_once('Views/Docente/add.php');	

	}
	function save(){
		$datos = array($_POST['primer_nombre'], $_POST['segundo_nombre'], $_POST['primer_apellido'], $_POST['segundo_apellido'], $_POST['cedula'], $_POST['fecha_de_nacimiento'] , $_POST['genero'], $_POST['sangre'], $_POST['peso'], $_POST['estatura'], $_POST['estado_salud'], $_POST['estado_civil']);
		/*print_r($datos);*/
		$Docente = new DocenteModel();
		$Docent = $Docente->registrar($datos);
		if ($Docent == 0){
			require_once('Views/Docente/registrado.php');
		}
		else{
			require_once('Views/Docente/existente.php');;
		}
		
	}
 	function register(){
		require_once('Views/Docente/register.php');
	}

	function update(){
		echo 'esta haciendo update';
	}

	}
	/*if (isset($_POST['action'])) {
		$DocenteController = new DocenteController();
		//se añade el archivo usuario.php
		require_once('../Models/Docente.php');
		
		//se añade el archivo para la conexion
		require_once('Db/db.php');
 
		//if ($_POST['action']=='register') {
			$Docente= new Docente(null,$_POST['primer_nombre'],$_POST['segundo_nombre'],$_POST['primer_apellido'],$_POST['segundo_apellido'],null,null,null,$_POST['cedula'],null,null,null,null,null,null,null,null);
			$DocenteController->save($Docente);}
		}
		if (isset($_GET['action'])) {
			if ($_GET['action']!='register'&$_GET['action']!='index') {
				require_once('Db/db.php');
				$DocenteController=new DocenteController();
				//para eliminar
				if ($_GET['action']=='delete') {		
					$DocenteController->delete($_GET['id']);
				}elseif ($_GET['action']=='update') {//mostrar la vista update con los datos del registro actualizar
					require_once('../Models/usuario.php');				
					$usuario=Usuario::getById($_GET['id']);		
					//var_dump($usuario);
					//$usuarioController->update();
					require_once('../Views/Usuario/update.php');
				}	
			}	
		}
		
	 function error(){
		require_once('Views/Docente/error.php');
	} */


?>
