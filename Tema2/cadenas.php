<?php

//Muestra el valor de un parámetro llamado nombre recibido por querystring eliminando los caracteres '/' del principio y el final si los hubiera (función trim). Si no se pasa un parámetro nombre se utilizará tu nombre de pila.
$nombre = $_GET['nombre'] ?? 'Dani';

$eje1 = function ($nombre) {  
    echo '<br>Ejercicio 1 <br>' . trim($nombre , '/');
};
$eje1($nombre);

//Muestra la longitud del parámetro nombre (función strlen)
$eje2 = function ($nombre) {
    echo '<br>Ejercicio 2 <br>' . strlen($nombre);
};
$eje2($nombre);

//Muestra el nombre en mayúsculas (función strtoupper)
$eje3 = function ($nombre) {
    echo '<br>Ejercicio 3 <br>' . strtoupper($nombre);
};
$eje3($nombre);
// Muestra el nombre en minúsculas (función strtolower)
$eje4 = function ($nombre) {
    echo '<br>Ejercicio 4 <br>' . strtolower($nombre);
};
$eje4($nombre);
//Pasa un segundo parámetro por querystring llamado prefijo (para pasar más de un parámetro por la querystring debes separarlos utilizando el carácter &). Después indica si el nombre comienza por el prefijo pasado o no (función strpos), se distinguirá entre mayúsculas y minúsculas. Si no se pasa el prefijo no se realizará esta operación.
$prefijo = $_GET['pre'];

$eje5 = function ($nombre, $prefijo) {
    echo  '<br>Ejercicio 5 <br>';
    $pos = strpos($nombre, $prefijo);

    echo $pos === 0 ? 'El nombre cominenza por el prefijo' : 'El nombre NO comienza por el prefijo';
};

echo isset($prefijo) == 1 ? $eje5($nombre, $prefijo) : '<br>Ejercicio 5 <br> No determinado el prefijo';

// Muestra el número de veces que aparece la letra a (mayúscula o minúscula) en el parámetro nombre (funciones substr_count + (strtoupper o strtolower)).
$eje6 = function ($nombre){
    echo  '<br>Ejercicio 6 <br>';
    $x = substr_count(strtolower($nombre) . strtoupper($nombre), 'a');
    
    echo $x > 0 ? 'La letra A aparece ' .$x . ' veces' : 'La letra A no aparece';
    $y = stripos(strtolower($nombre) . strtoupper($nombre), 'a');
};

$eje6($nombre);

//Muestra la posición de la primera a existente en el nombre (sea mayúscula o minúscula). Si no hay ninguna mostrará un texto indicándolo (función stripos).

$eje7 = function ($nombre){
    echo  '<br>Ejercicio 7 <br>';
    $x = stripos(strtolower($nombre) . strtoupper($nombre), 'a');

    echo $x ?'La letra A aparece en la '. ($x + 1) . ' posicion': 'La letra A no aparece';
};
$eje7($nombre);

//Muestra el nombre sustituyendo las letras ‘o’ por el número cero (sea mayúscula o minúscula) (función str_ireplace).

$eje8 = function ($nombre) {
   echo '<br>Ejercicio 8 <br>' . str_ireplace('o','0',$nombre);
};
$eje8($nombre);
?>