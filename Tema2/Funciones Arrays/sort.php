<?php
//Escribe un script PHP para ordenar un array asociativo. Por ejemplo:
echo '<br>';
$edades=array("Juan"=>"31","María"=>"41","Andrés"=>"39","Berta"=>"40");
$imprimir = function ($array){
    foreach($array as $key => $val){
        echo "$key = $val ";
    }
    echo'<br>';
};
//Ordenado por Nombre, ascendente
ksort($edades);
$imprimir($edades);
//Ordenado por Edad, ascendente
asort($edades);
$imprimir($edades);
//Ordenado por Nombre, descenden
krsort($edades);
$imprimir($edades);
//Ordenado por Edad, descendente
arsort($edades);
$imprimir($edades);

//A partir de una cadena con las temperaturas de un mes, realiza la media e imprime las 5 temperaturas mínimas y las 5 máximas
echo '<br>';
$temperaturas = [30,20,32,30,20,30,20,32,30,20,30,20,32,30,20,30,20,32,30,20,30,20,32,30,20,30,20,32,30,20];

$media = array_sum($temperaturas)/ count($temperaturas);
echo "La media es: $media <br>";

arsort($temperaturas);
print_r(array_slice($temperaturas, 0 , 5)) ;
echo '<br>';
print_r(array_slice($temperaturas, -5 )) ;

?>