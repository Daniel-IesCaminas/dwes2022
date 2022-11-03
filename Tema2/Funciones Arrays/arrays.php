<?php
//Crea un array llamado nombres que contenga varios nombres.
$nombres = ['Dani', 'Alba', 'Antonio'];
// Muestra el número de elementos que tiene el array (función count) 
echo count($nombres);
echo '<br>';
// Crea una cadena que contenga los nombres de los alumnos existentes en el array separados por un espacio y muéstrala (función de strings implode) 
echo $cadena;
$cadena = implode( ' ', $nombres);
echo '<br>';
// Muestra el array ordenado alfabéticamente (función asort) 
echo '<br>';
echo asort($nombres);
// Muestra el array en el orden inverso al que se creó (función array_reverse) 
echo '<br>';
echo array_reverse($nombres);
// Muestra la posición que tiene tu nombre en el array (función array_search) 
echo '<br>';
echo array_search('Alba',$nombres);
//Crea un array de alumnos donde cada elemento sea otro array que contenga el id, nombre y edad del alumno.
echo '<br>';
$alumnos = [
    [
        'id' => 0,
        'nombre' => 'Sara',
        'edad' => 25
    ],
    [
        'id' => 1,
        'nombre' => 'Pedro',
        'edad' => 35
    ],
    [
        'id' => 3,
        'nombre' => 'Dani',
        'edad' => 30
    ],
    [
        'id' => 4,
        'nombre' => 'Juan',
        'edad' => 24
    ],
];
//Crea una tabla html en la que se muestren todos los datos de los alumnos.
echo '<br>';
echo '<table border="1">';

foreach ( $alumnos as $alu ) {
    echo '<tr> ';
    foreach ( $alu as $datos) {
        echo '<td>'.$datos.'</td>';
        }
        echo '</tr>';
}
echo '</table>';

//Utiliza la función array_column para obtener un array indexado que contenga únicamente los nombres de los alumnos y muéstralo por pantalla. 
echo '<br>';
$nombres = array_column($alumnos, 'nombre');
foreach ( $nombres as $n) {
    echo $n . ' ' ;
}
//Crea un array con 10 números y utiliza la función array_sum para obtener la suma de los 10 números. 
echo '<br>';
$numeros = [1,2,3,4,5,6,88,8,9,12];
echo array_sum($numeros);


?>