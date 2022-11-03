<?php 

class Session {

    function __construct()
    {
        if(!isset($_SESSION)) {  //Si no existe sesion start
            session_start();
        }
    }

    function getSession ($attribute) {
        if(
            session_status() === PHP_SESSION_ACTIVE //No existe session
            && is_string($attribute) ) { //Es string

                return true;
        }
        else {
                return false;
        }
    }

    function setAttribbute ($attribute, $value) {
        $_SESSION[$attribute] = $value;
    }


    function getAttribbute ($attribute) {
        if(isset($_SESSION[$attribute]))   //existe atributo 
        return $_SESSION[$attribute];
    }


    function deleteAttribbute ($attribute) {
        if(isset($_SESSION[$attribute]))  //existe atributo
        unset($_SESSION[$attribute]);
    }


    function destroySession () {
        session_destroy();
    }
    
}


?>