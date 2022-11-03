<?php
//Escribe un script php que calcule la longitud máxima y mínima de las cadenas de un array. 
echo '<br>';
$cadenas = ['hola', 'adioos', 'uno', 'tres'];

function width($t){
    return strlen($t);

}
$a = array_map('width',$cadenas);
echo 'Numero maximo de caracteres: ' . max($a) .' <br>';
echo 'Numero minimo de caracteres: ' .min($a);
?>