<?php

class Persona {

    private $nombre;
    private $apellidos;
    private $edad;

    function __construct($nombre, $apellidos, $edad)
    {
        $this -> nombre = $nombre;
        $this -> apellidos = $apellidos;
        $this -> edad = $edad;  
    }

    function __get($name)
    {
        if(property_exists($this,$name)){
            return $this -> $name;
        }
    }

    function __set($name, $valor)
    {
        if(property_exists($this,$name)){
            $this -> $name = $valor;
        }
    }

    function mayorEdad() {
        return $this -> edad >= 18;
    }

    function nombreCompleto() {
        return $this -> nombre . " " . $this -> apellidos; 
    }

}


?>