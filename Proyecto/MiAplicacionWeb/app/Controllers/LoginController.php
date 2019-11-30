<?php
require_once ('../../Models/LoginModel.php');
session_start();
class LoginController
{
    function __construct()
    {

    }
    
    function inicio(){
      
      require_once('../../Views/Login/login.php');

    }
    function validar(){
      
      if($_POST['Iniciar']=='Login'){
        $nom=$_POST["email"];
        $cla=$_POST["pass"];
        
        include '../Models/LoginModel.php';
        $rob=new LoginModel();
        $iniciar=$rob->validar($nom,$cla);
        if(sizeof($iniciar)>0){
            foreach ($iniciar as $key => $valueus) {
                $_SESSION['usu']=$valueus[1];
            }
            header("location:../Views/Layouts/layout.php");
        }else{
            echo "Usuario incorrecto";
        }
        
    }



    }
    function salir(){
      
      require_once('Views/Login/salir.php');
      
    }

}
?>



