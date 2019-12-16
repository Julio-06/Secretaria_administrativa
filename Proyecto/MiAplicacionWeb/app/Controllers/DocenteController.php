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
	function confirmacion(){
		require_once('Views/Docente/eliminar.php');
	}

	function index(){
		$docente = new DocenteModel();
		$datos = $docente->listar();
		require_once('Views/Docente/index.php');
	}
	function eliminar(){
		$docente = new DocenteModel();
		$tabla=$_GET['table'];
		$id=$_GET['no'];

		$tablas=array("docentes",
					  "residencia_docentes",
					  "informacion_institucional_docentes",
					  "familiares_emergencia_docentes",
					  "laboral_docentes",
					  "capacitaciones_docentes",
					  "diplomados_docentes",
					  "registros_academicos_docentes",
					);


		$eliminado=$docente->delete($id,$tablas[$tabla]);
		if($eliminado==TRUE){
			include_once 'Views/Docente/mensajes/confirmacion.php';
		}
		else {
			include_once 'Views/Docente/mensajes/error.php';
			
		}
	}
	function agregar(){
		$docente = new DocenteModel();
		$tabla=$_GET['table'];
		$usuario=$_SESSION['idU'];

		$tablas=array("docentes",
					  "residencia_docentes",
					  "informacion_institucional_docentes",
					  "familiares_emergencia_docentes",
					  "laboral_docentes",
					  "capacitaciones_docentes",
					  "diplomados_docentes",
					  "registros_academicos_docentes",
					);

		

		switch ($tabla) {
			
			case '1':
			$provincia=$_POST['provincia'];
			$distrito=$_POST['distrito'];
			$corregimiento=$_POST['corregimiento'];
			$direccion=$_POST['direccion_actual'];

			$datos=$docente->insertResidencia($provincia,$distrito,$corregimiento,$direccion,$tablas[$tabla],$usuario);

			break;
			case '2':
			$correo_inst=$_POST['correo_institucional'];
			$telefono_inst=$_POST['telefono_institucional'];
			$extension=$_POST['extension'];
			$datos=$docente->insertInstitucional($correo_inst,$telefono_inst,$extension,$tablas[$tabla],$usuario);
			break;
			case '3':
			$parentesco=$_POST['parentesco'];
			$nombre=$_POST['nombre'];
			$apellido=$_POST['apellido'];
			$localizar=$_POST['localizar_emergencia'];
			$prioridad=$_POST['prioridad_localizar'];
			$fecha=$_POST['fecha_de_nacimiento_f'];
			$celular=$_POST['celular_f'];
			$telefono_resi=$_POST['telefono_residencia'];
			$telefono_ofi=$_POST['telefono_oficina'];
			$correo=$_POST['correo_electronico'];
			$datos=$docente->insertFamiliares($parentesco,$nombre,$apellido,$localizar,$prioridad,$fecha,$celular,$telefono_resi,$telefono_ofi,$correo,$tablas[$tabla],$usuario);
			break;
			case '4':
			$categoria=$_POST['categoria_docente'];
			$departamento=$_POST['departamento'];
			$cargo=$_POST['cargo_administrativo'];
			$ubicacion=$_POST['ubicacion'];
			$repre=$_POST['repre_organos_gobierno'];
			$datos=$docente->insertLaboral($categoria,$departamento,$cargo,$ubicacion,$repre,$tablas[$tabla],$usuario);
			break;
			case '5':
			$capacitacion=$_POST['nombre_capacitacion'];
			$año=$_POST['año'];
			$rol=$_POST['rol'];
			$horas=$_POST['horas'];
			$institucion=$_POST['institucion'];
			$datos=$docente->insertCapacitaciones($capacitacion,$año,$rol,$horas,$institucion,$tablas[$tabla],$usuario);
			break;
			case '6':
				$titulo = $_POST['titulo'];
				$año=$_POST['año'];
				$instituto=$_POST['institucion'];
				$datos =$docente->insertDiplomados($titulo,$año,$instituto,$tablas[$tabla],$usuario);
			break;
			case '7':
			$titulo=$_POST['titulo'];
			$nivel=$_POST['nivel'];
			$año=$_POST['año'];
			$institucion=$_POST['institucion'];
			$datos=$docente->insertAcademico($titulo,$nivel,$año,$institucion,$tablas[$tabla],$usuario);

			break;
			
			default:
			# code...
			break;
		}
		
		if($datos==TRUE){
			include_once 'Views/Docente/mensajes/confirmacion.php';
		}
		else {
			include_once 'Views/Docente/mensajes/error.php';
			
		}
		
	}
	function editar(){
		$docente = new DocenteModel();
		$id=$_GET['no'];
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

		$consulta = $docente->consultaT($id,$tablas[$tabla]);
		require_once('Views/Docente/editar.php');
	}
	function update(){
		$docente = new DocenteModel();
		$id=$_GET['regi'];
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

		switch ($tabla) {

			case '1':
			$provincia=$_POST['provincia'];
			$distrito=$_POST['distrito'];
			$corregimiento=$_POST['corregimiento'];
			$direccion=$_POST['direccion_actual'];

			$resp=$docente->updateResidencia($id,$tablas[$tabla],$provincia,$distrito,$corregimiento,$direccion);

			break;
			case '2':
			$correo_inst=$_POST['correo_institucional'];
			$telefono_inst=$_POST['telefono_institucional'];
			$extension=$_POST['extension'];
			$resp=$docente->updateInstitucional($id,$tablas[$tabla],$correo_inst,$telefono_inst,$extension);
			break;
			case '3':
			$parentesco=$_POST['parentesco'];
			$nombre=$_POST['nombre'];
			$apellido=$_POST['apellido'];
			$localizar=$_POST['localizar_emergencia'];
			$prioridad=$_POST['prioridad_localizar'];
			$fecha=$_POST['fecha_de_nacimiento_f'];
			$celular=$_POST['celular_f'];
			$telefono_resi=$_POST['telefono_residencia'];
			$telefono_ofi=$_POST['telefono_oficina'];
			$correo=$_POST['correo_electronico'];
			$resp=$docente->updateFamiliares($id,$tablas[$tabla],$parentesco,$nombre,$apellido,$localizar,$prioridad,$fecha,$celular,$telefono_resi,$telefono_ofi,$correo);
			break;
			case '4':
			$categoria=$_POST['categoria_docente'];
			$departamento=$_POST['departamento'];
			$cargo=$_POST['cargo_administrativo'];
			$ubicacion=$_POST['ubicacion'];
			$repre=$_POST['repre_organos_gobierno'];
			$resp=$docente->updateLaboral($id,$tablas[$tabla],$categoria,$departamento,$cargo,$ubicacion,$repre);
			break;
			case '5':
			$capacitacion=$_POST['nombre_capacitacion'];
			$año=$_POST['año'];
			$rol=$_POST['rol'];
			$horas=$_POST['horas'];
			$institucion=$_POST['institucion'];
			$resp=$docente->updateCapacitaciones($id,$tablas[$tabla],$capacitacion,$año,$rol,$horas,$institucion);
			break;
			case '6':
				
				$titulo = $_POST['titulo'];
				$año=$_POST['año'];
				$instituto=$_POST['institucion'];
				$resp=$docente->updateDiplomados($id,$tablas[$tabla],$titulo,$año,$instituto);
			break;
			case '7':
				$titulo=$_POST['titulo'];
				$nivel=$_POST['nivel'];
				$año=$_POST['año'];
				$institucion=$_POST['institucion'];
				$resp=$docente->updateAcademico($id,$tablas[$tabla],$titulo,$nivel,$año,$institucion);

			break;
			
			default:
			# code...
			break;
		}
		
		
		if($resp==TRUE){
			include_once 'Views/Docente/mensajes/confirmacion.php';
		}
		else {
			include_once 'Views/Docente/mensajes/error.php';
			
		}
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
				$_SESSION['idU']=$iddoc;
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
