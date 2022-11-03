<?php

class Imagen {

    protected $src;
    protected $border;
    protected $ruta_imagenes = 'imagenes/';

    function __construct($src, $borde = 0)
    {
        $this -> src = $this -> setSrc($src);

        $this -> border = $this -> setBorder($borde);
    }
    function __toString(){
        return  "<img src='".   $this -> src. " ' border='" . $this -> border . "' />";
    }

    function setSrc($ruta){
        $ruta_real = $_SERVER['DOCUMENT_ROOT'] . '/Tema5/T5-ClasesImagenes/' . $this -> ruta_imagenes . $ruta;

        if(file_exists($ruta_real)) {
            return $this -> ruta_imagenes . $ruta;
        } else {
            exit('La ruta de imagen no existe');
        }
    }

    function setBorder($pBorder) {
        if(is_int($pBorder) && $pBorder >= 0){
            return $pBorder;
        }else{
            exit ('El borde no es un int mayor o igual a 0') ;
        }
    }

}

?> 