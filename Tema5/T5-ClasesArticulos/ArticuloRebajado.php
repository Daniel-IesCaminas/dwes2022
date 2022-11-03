<?php 

final class ArticuloRebajado extends Articulo {

    private $rebaja;

    function __construct($pNombre,$pPrecio,$pRebaja)
    {
        parent::__construct($pNombre,$pPrecio);
        $this -> rebaja = $pRebaja;

    }

    private function calculaDescuento() {
        return $this -> precio * $this -> rebaja / 100;
    }

    public function precioRebajado() {
        return $this -> precio - $this -> calculaDescuento();
    }

    function __toString()
    {
        ob_start();
        var_dump($this);
        $result = ob_get_clean();

        return  
        parent::__toString() . 
        'La rebaja es: ' . $this -> rebaja . ' % <br>' .
        'El descuento es '. self::calculaDescuento(). '€<br>'.
        'El precio del articulo rebajado es '. self::precioRebajado(). '€<br>'.
        $result;
    }

}


?>