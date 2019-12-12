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
            foreach ($iniciar as $dato) {
                $datos =array($dato["idusuarios"],$dato["id_rol"],$dato["usuario"]); 
                
            }
            return $datos;
            
        }else{
            return 0;
        }
        
    }
    function ingresar($user){
        $rob=new Usuario();
        $iniciar=$rob->usuario($user);

    }
}
?>