<?php
//Hostname
//username
//password
//nombre base de datos
$HOSTNAME = 'localhost';
$USERNAME = 'id20753194_inosktech';
$PASSWORD = 'InoskTech123!';
$BASENAME = "InoskTech";

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
else{
    echo 'Conexión exitosa';
}

?>