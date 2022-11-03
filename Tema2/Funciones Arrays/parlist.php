<?php

//scribe función partlist que devuelva todas las formas de dividir una lista (array) de al menos dos elementos en dos partes no vacías que contengan todos los elementos.
echo '<br>';
$array = ["Seguro", "que", "apruebo", "esta", "asignatura"];

function partlist($a){
    $n = count($a);
    for ($i=0; $i < $n ; $i++) { 
        $new [$i][0] = implode( ' ' , array_slice($a, 0, $i + 1));
        $new [$i][1] = implode( ' ' , array_slice($a, ($i + 1)));


        if ($i === ($n -2)) {
            break; // Sale fuera del bucle
        }
        echo $n;
    }
    
	echo '<pre>';
    print_r($new);
	echo '</pre>';
}
partlist($array);

?>