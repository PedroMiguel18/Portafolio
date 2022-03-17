<?php

$Cone = mysli_connect('localhost', 'root', '', 'usuarios') 
or die(mysql_error($mysqli));

insertar($Cone);

function insertar($Cone){
    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $Correo = $_POST['Correo'];
    $Contraseña = $_POST['Contraseña'];

    $consulta = "INSERT INTO persona(Nombre, Apellido, Correo, Contraseña )
    VALUES ('$Nombre', '$Apellido', '$Correo', '$Contraseña')";
    mysqli_query($Cone, $consulta);
    mysqli_clase($Cone);
}

?>