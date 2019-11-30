<?php
include_once 'Models/UsuarioModel.php';
class UsuarioSession
{
    function __construct()
    {

    }
    
    function validar($usu,$pass){
        $user = $usu;
        $contra = $pass;
        $rob=new Usuario();
        $iniciar=$rob->validar($user,$contra);
        if(sizeof($iniciar)>0){
            return true;
            
        }else{
            return false;
        }
    }
    function ingresar($user){
        $rob=new Usuario();
        $iniciar=$rob->usuario($user);

    }
    function salir(){
      
      require_once('Views/Login/salir.php');
      
    }

}
?>