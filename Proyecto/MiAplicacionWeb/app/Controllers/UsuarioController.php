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
            foreach ($iniciar as $idrol) {
                $id_rol = $idrol["id_rol"];
            }
            return $id_rol;
            
        }else{
            return 0;
        }
    }
    function ingresar($user){
        $rob=new Usuario();
        $iniciar=$rob->usuario($user);

    }
    function usuario(){
        $model=new Usuario();
        $usuario=$model->getUsuario();
        if($usuario!=NULL){
            return $usuario;
        }
    }
    function rol(){
        $model=new Usuario();
        $rol=$model->getRol();
        

        return $rol;
    }
    

}
?>