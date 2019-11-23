<?php
require_once ('Models/LoginModel.php');
session_start();
class LoginController
{

    function __construct()
    {

    }
    
    function inicio(){
      require_once('Views/Login/login.php');

    }
    function validar(){
      
      $usu = $_POST ['email'];
      $pass = $_POST['pass'];

      $validar = new LoginModel();
      $iniciar = $validar->validar($usu,$pass);
      if (sizeof($iniciar) > 0){
        foreach ($iniciar as $key => $value) {
          $_SESSION['usuario']=$value[1];
        }
        require_once('Views/Layouts/layout.php');
      }
      else {
        echo "usuario incorrecto";
      }



    }
    function salir(){
      session_destroy();
      require_once('Views/Login/login.php');
      
    }

}
?>



