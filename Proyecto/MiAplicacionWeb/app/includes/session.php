<?php
class  UserSession{
    public function __construct(){
        session_start();
    }
    public function usuario($user){
        $_SESSION['user']=$user;
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