<?php

include_once 'conexion.php';

$Nombre = $_REQUEST['Nombre'];  //Esto recibira los datos del form y los almacena en variables
$Email = $_REQUEST['Mail'];
$Numero = $_REQUEST['Numero'];
$Contrasena = $_REQUEST['password'];
$Contrasena1 = $_REQUEST['passwordConfirm'];


if($Contrasena != $Contrasena1){  //si las contraseñas no coinciden
    echo '<script> alert("Las contraseñas no coinciden"); //mensaje de error
    window.history.go(-1); 
    </script>';    //redireccionar a la pagina de registro
    exit;
}


$contrasenaEncriptada = password_hash($Contrasena, PASSWORD_DEFAULT);

$insertarU = "INSERT INTO `users`(`NOMBRE_USER`, `MAIL_USER`,`NUMERO_USER`, `PASSWORD_USER`)
 VALUES ('$Nombre','$Email','$Numero','$contrasenaEncriptada')";  //creando una variable como instruccion

$resultado = mysqli_query($conexion, $insertarU);  //creando otra variable para ejecutar el query de la base de datos


if(!$resultado){
    echo 'Error al registrar: '.mysqli_error($conexion);

}
else{
    echo'<script> alert("Registro con exito! :D");
    window.history.go(-1); 
     </script>'; //mensaje de exito
}

?>