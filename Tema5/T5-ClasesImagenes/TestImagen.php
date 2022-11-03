<?php
require 'Imagen.php';

$img = new Imagen('homer.jpg');

echo $img;

$img2 = new Imagen('homer.jpg', 10);

echo $img2;

$img2 -> src = 'hola';

echo var_dump($img2);

?>