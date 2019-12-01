<?php
include_once 'includes/session.php';
include_once 'Controllers/UsuarioController.php';
include_once 'Models/UsuarioModel.php';
$userSession = new Session();
$user = new UsuarioSession();

if(isset($_SESSION['user'])){
    $user->ingresar($userSession->getusuario);
    include_once 'Views/Layouts/layout.php';
}
elseif (isset($_POST['email']) && isset($_POST['pass'])) {
    $userForm = $_POST['email'];
    $passForm = $_POST['pass'];
    $valor=$user->validar($userForm,$passForm);

    if($valor>0){
        
        $userSession->usuario($userForm);
        $user->ingresar($userForm);
        $userSession->rol($valor);

            switch ($valor) {
                case 1:
                    include_once 'Views/Layouts/layout.php';
                    break;

                case 2:
                    include_once 'Views/Layouts/layout_administrativo.php';
                    break;

                case 3:
                    include_once 'Views/Layouts/layout_docentes.php';
                    break;

                default:
                    # code...
                    break;
            }
        
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

