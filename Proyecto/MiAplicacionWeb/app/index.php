<?php
include_once 'includes/session.php';
include_once 'Controllers/UsuarioController.php';

$userSession = new UserSession();
$user = new UsuarioSession();

if(isset($_SESSION['user'])){
    $user->ingresar($userSession->getusuario);
    include_once 'Views/Layouts/layout.php';
}
elseif (isset($_POST['email']) && isset($_POST['pass'])) {
    $userForm = $_POST['email'];
    $passForm = $_POST['pass'];

    if($user-> validar($userForm,$passForm)){
        $userSession->usuario($userForm);
        $user->ingresar($userForm);
        include_once 'Views/Layouts/layout.php';
    }
    else{
        $errorLogin = "Nombre de usuario y/o contraseña es incorrecto";
        include_once 'Views/Login/login.php';
    }
}
else {
    
    include_once 'Views/Login/login.php';
}
?>

