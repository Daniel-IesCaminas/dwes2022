<?php 
//Crea un fichero php llamado funciones.php 


//Queremos crear una función llamada insert que nos genere una sentencia insert into en sql. Para ello la función recibirá dos parámetros: El nombre de la tabla y un array asociativo que contendrá los nombres y valores de los campos de la tabla. 

$tabla = "alumnos";
$campos = array("nombre" => "Juan", "apellidos" => "Martínez");

function insert($tabla,$campos){
    $keys = array_keys($campos);
    return 'insert into ' . $tabla .  '(' . implode(', ', $keys) .  ') values ( :' . implode(', :', $campos) . ')';
}

echo 'Ejercicio 1 <br>';
echo insert($tabla,$campos) . '<br>';




/*Crea una función llamada insertReferencia, como el ejercicio anterior pero con los siguientes cambios:
   // La cadena resultante se pasará por referencia. Pasaremos la cadena de la siguiente forma:
   // "insert into tabla (campos) values (valores)"
   // Dentro de la función sustituiremos lo siguiente:
        //El texto tabla por el nombre de la tabla.
       //El texto campos por los nombres de los campos separados por comas
       // El texto valores por los nombres de los campos separados por comas y el carácter ‘:’ delante.
*/
$referencia = "insert into tabla (campos) values (valores)";

function insertReferencia (&$referencia, $tabla, $campos){
    $keys = array_keys($campos);
    $referencia = str_replace('tabla', $tabla , $referencia);
    $referencia = str_replace('campos', implode(', ', $keys) , $referencia);
    $referencia = str_replace('valores', ':' . implode(', :', $campos) , $referencia);

    return $referencia;
}

insertReferencia($referencia,$tabla,$campos);

echo 'Ejercicio 2 <br>';
echo $referencia . '<br>';





//Crea una función llamada update para generar una sentencia update de sql. A partir del siguiente array:

$tabla = "alumnos";
$campos = array("id" => 1, "nombre" => "Juan", "apellidos" => "Martínez");

//Generará la siguiente cadena:
//UPDATE alumnos SET nombre=:nombre, apellidos=:apellidos WHERE id = :id 

function update ($tabla , $campos){
    $keys = array_keys($campos);
    return 'UPDATE ' . $tabla .  ' SET ' . $keys[1] . '=:' . $campos['nombre'] . ' , ' .   $keys[2] . '=:' . $campos['apellidos'] . ' WHERE  ' .  $keys[0] . '=:' . $campos['id'];
}
echo 'Ejercicio 3 <br>';
echo update($tabla , $campos);
?>