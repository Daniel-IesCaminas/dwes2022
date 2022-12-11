<?php
    //Conectar a la base de datos
    $conexion = mysqli_connect('localhost', 'root','','blogapp');
    
    //Comprobar si la conexion es correcta
    if(mysqli_connect_errno()){
        echo 'La conexion a la base de datos ha fallado: ' . mysqli_connect_error();
    } else {
        echo 'Conexion realizada correctamente';
    }
       
    // Consulta configurar codificacion de caracteres
    mysqli_query($conexion, "SET NAMES 'utf8' ");
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog App</title>
</head>
<body>
<form method="post">
    Nombre Usuario: <input type="text" name="nombre"><br>
    Password: <input type="password" name="password"><br>
    <input type="submit" value="Enviar" name="enviar">
</form>
</body>
</html>

<?php
//Insertar un dato 
if(isset($_POST['enviar'])){
    $usuario = $_POST['nombre'];
    $pass = $_POST['password'];

    $sql = "INSERT INTO usuarios VALUES (null, '$usuario' , '$pass', 'Usuario')";
    $insert = mysqli_query($conexion, $sql);
    
    if($insert){
        echo '<h3?>Datos insertados correctamente </h3>';
    }else {
        echo 'Error: ' . mysqli_error($conexion);
    }
}

//Consulta SELECT desde PHP
$query = mysqli_query($conexion, "SELECT * FROM usuarios");
while ( $n = mysqli_fetch_assoc($query)) {
    echo '<br>';
    var_dump($n);
    echo '<br>';
    echo $n['usuario'];
    echo '<br>';
}

?>