<?php

if (isset($_GET['controller']) && isset($_GET['action'])) { // Si hay un controlador y acción (método) definido...
    $controller = $_GET['controller'];
    $action = $_GET['action'];
} else { //Si no se ha definido un controlador y acción (caso cuando se accede la primera vez en la sesión)
    $controller = 'Home';
    $action = 'index';
}

if(!isset($_SESSION['rol'])){
	header('location: Views/Login/login.php');

}
else {
	if($_SESSION['rol'] != 3 ){
		header('location: Views/Login/login.php');
	}
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
	<title>Secretaría Administrativa - FISC docentes</title>
	<meta charset="utf-8">
	<link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">
	<link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.min.css">
	<link href="../../bootstrap/css/dashboard.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
	<div class="row">
		<div class="col-sm-12">
		<?php require_once('menu.php'); ?>
		</div>
		<div class="col-sm-2 bg-dark">
		<?php require_once('menu2_docentes.php'); ?>
		</div>
		<?php require_once('routes.php'); ?>
	</div>


</body>

</html>