<?php
//Hostname
//username
//password
//nombre base de datos
$HOSTNAME = 'localhost';
$USERNAME = 'id20753194_inosktech';
$PASSWORD = 'Inosuke123!';
$BASENAME = "id20753194_inosktech";

//NO OLVIDAR PRENDER EL XAMMP E INSERTAR PÁGINA EN HTDOCS

$conexion = mysqli_connect(
    $HOSTNAME, 
    $USERNAME,
    $PASSWORD, 
    $BASENAME
);

if(!$conexion){
    echo 'Error al conectar';
}


?>