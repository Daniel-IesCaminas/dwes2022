<?php
//Escribe un script en PHP que muestre un array de colores como una lista desordenada.
$color = array('blanco', 'verde', 'rojo');
echo '<ul>';
foreach ( $color as $c) {
    echo '<li>' . $c . '</li>';
}
echo '</ul>';

$color2 = array('blanco'=>'blanco.html', 'verde' => 'verde.html', 'rojo' => 'rojo.html');


echo '<ul>';
foreach ( $color2 as $c => $link) {
    echo "<li> <a href='$link'>" . $c . "</a></li>";
}
echo '</ul>';



?>