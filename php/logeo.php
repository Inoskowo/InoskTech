<?php
session_start(); //Inicia la sesión
include  ("conexion.php"); //Conexión a la base de datos

if(isset($_POST['login'])){ //Verifica que se haya enviado el formulario
    $email = $  ['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM `users` WHERE `MAIL_USER`='$email'";
    $result = mysqli_query($conexion, $query);
    
    

    if(mysqli_num_rows($result) > 0){ //Verifica que exista el usuario en la base de datos
        $row = mysqli_fetch_assoc($result);
        $passwordHash = $row['PASSWORD_USER'];

        if(password_verify($password, $passwordHash)){ //Verifica que la contraseña ingresada sea correcta
            $_SESSION['user_id'] = $row['ID_USER']; //Guarda el ID del usuario en la sesión
            header("Location: index.html"); //Redirecciona al perfil del usuario
            exit();
        } else {
            echo "Contraseña incorrecta.";
        }
    } else {
        echo "Usuario no encontrado.";
    }
}