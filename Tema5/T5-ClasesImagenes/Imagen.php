<?php

class Imagen {

    public $src;
    private $border;
    private $ruta_imagenes = 'imagenes/';

    function __construct($src, $borde = 0)
    {
        $this -> src = $this -> ruta_imagenes . $src;
        $this -> border = $borde;
    }
    function __toString(){
        return  "<img src='".   $this -> src. " ' border='" . $this -> border . "' />";
    }

}

?> 