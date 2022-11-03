<?php
require 'ImagenMejorada.php';

$img = new Imagen('homer.jpg');

echo $img;

$img2 = new Imagen('homer.jpg', 10);

echo $img2;

echo var_dump($img2);
$img ->border = 'asdsa';
echo $img;

$img2 -> setBorder(-10);
$img2 -> setSrc('hola.jgp');

/*
Qué pasa si le damos valor a los atributos sin pasar por setSrc() y setBorder()?

Crea la etiqueta HTML igual con esos parametros  erroneos
img src='homer.jgp' border='asdsa' /> 
y continua con el script

*/


?>