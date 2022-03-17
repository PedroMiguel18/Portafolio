<?php

$Conexion = mysli_connect('localhost', 'root', '', 'datos') 
or die(mysql_error($mysqli));

insertar($Conexion);

function insertar($Conexion){
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];

    $consulta = "INSERT INTO persona(Username, Password)
    VALUES ('$Username', '$Password')";
    mysqli_query($Conexion, $consulta);
    mysqli_clase($Conexion);
}

?>