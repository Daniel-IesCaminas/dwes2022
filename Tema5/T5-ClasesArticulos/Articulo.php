<?php 

class Articulo {

    protected $nombre;
    protected $precio;

    function __construct($pNombre,$pPrecio)
    {
        $this -> nombre = $pNombre;
        $this -> precio = $pPrecio;
    }

    function __toString()
    {
        return  'Nombre: '.$this->nombre.'<br />'.'Precio: '.$this->precio.'&euro;<br />';
    }

    function getPrecio(){
        return $this -> precio;
    }
    function setPrecio($pPrecio){
        !is_int($pPrecio) ?:  $this -> precio = $pPrecio ;
    }
}


?>