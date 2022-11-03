<?php 
require 'Session.php';

$session = new Session();

if ($session -> getSession('nombre'))
{
    $session -> setAttribbute('nombre' , 'Daniel');
    echo 'valor de la propiedad nombre: ' . $session -> getAttribbute('nombre') . '<br>';
    $session -> deleteAttribbute('nombre' , 'Fernando');
    echo 'valor de la propiedad nombre: ' . $session -> getAttribbute('nombre');
}

$session -> destroySession();


?>