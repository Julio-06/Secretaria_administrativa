<?php
class  Session{
    public function __construct(){
        session_start();
    }
    public function usuario($user){
        $_SESSION['user']=$user;
        
    }
    public function rol($rol){
        $_SESSION['rol']=$rol;
    }
    public function id($id){
        $_SESSION['id']=$id;
    }
    public function idU($id){
        $_SESSION['idU']=$id;
    }
    public function getid(){
        return $_SESSION['id'];
    }
    public function getrol(){
        return $_SESSION['rol'];
    }
    public function getusuario(){
        return $_SESSION['user'];
    }
    public function closeSession(){
        session_unset();
        session_destroy();
    }
}
?>