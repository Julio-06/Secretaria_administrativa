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
	if($_SESSION['rol'] != 2 ){
		header('location: Views/Login/login.php');
	}
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
	<title>Secretaría Administrativa - FISC Administrativo</title>
	<meta charset="utf-8">
	<link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">
	<link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.min.css">
	<link href="../../bootstrap/css/dashboard.css" rel="stylesheet">
</head>

<body>
	<header>
		<?php require_once('menu.php'); ?>
	</header>
	<div class="container-fluid">
        <div class="row">
		<?php require_once("routes.php");    ?>
		
        </div>
	</div>
	

</body>

</html>