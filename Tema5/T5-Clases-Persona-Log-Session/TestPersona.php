<?php 
require 'Persona.php';

$persona = new Persona('Daniel' , 'Bayarri' , 30);

if ($persona -> mayorEdad()){
    echo $persona -> nombreCompleto(). ' es mayor de edad <br>';
}else {
    echo $persona -> nombreCompleto(). ' no es mayor de edad';
}

?>