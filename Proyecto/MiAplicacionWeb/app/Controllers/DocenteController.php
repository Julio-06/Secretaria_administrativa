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
	function buscar(){
		$docente = new DocenteModel();
		$id=$_SESSION['id'];
		
		$tabla=$_GET['table'];

		$tablas=array("docentes",
					  "residencia_docentes",
					  "informacion_institucional_docentes",
					  "familiares_emergencia_docentes",
					  "laboral_docentes",
					  "capacitaciones_docentes",
					  "diplomados_docentes",
					  "registros_academicos_docentes",
					);

		if ($tabla==0) {
			$datos = $docente->consultar($id,$tablas[$tabla]);
		}
		else {
			$idusuario = $docente->consultar($id,$tablas[0]);

			foreach ($idusuario as $dato) {
				$iddoc=$dato["iddocentes"];
			}
			$datos = $docente->consultar($iddoc,$tablas[$tabla]);
		}
		
		
		
		switch ($tabla) {
			case 0:
				require_once('Views/Docente/Informacion/docentes.php');
				break;
			case 1:
				require_once('Views/Docente/Informacion/residencia.php');
				break;

			case 2:
				require_once('Views/Docente/Informacion/informacion_institucional.php');
				break;

			case 3:
				require_once('Views/Docente/Informacion/familiares.php');
				break;

			case 4:
				require_once('Views/Docente/Informacion/laboral.php');
				break;

			case 5:
				require_once('Views/Docente/Informacion/capacitaciones.php');
				break;

			case 6:
				require_once('Views/Docente/Informacion/diplomados.php');
				break;

			case 7:
				require_once('Views/Docente/Informacion/registros_academicos.php');
				break;
			default:
				# code...
				break;
		}
	
		
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
