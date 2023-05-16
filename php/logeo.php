<?php
session_start(); // Inicia la sesión
include("conexion.php"); // Conexión a la base de datos

$email = $_POST['email']; // Obtiene el correo electrónico ingresado por el usuario
$password = $_POST['password']; // Obtiene la contraseña ingresada por el usuario

$query = "SELECT * FROM `users` WHERE `MAIL_USER`='$email'"; // Construye la consulta SQL para seleccionar el usuario con el correo electrónico proporcionado
$result = mysqli_query($conexion, $query); // Ejecuta la consulta y guarda el resultado en $result

if ($result !== false) { // Verifica si el resultado de la consulta no es falso
    $filas = mysqli_num_rows($result); // Obtiene el número de filas devueltas por la consulta

    if ($filas) { // Si se encontró al menos una fila (un usuario con el correo electrónico proporcionado)
        $row = mysqli_fetch_assoc($result); // Obtiene una fila del resultado como un arreglo asociativo
        $passwordHash = $row['PASSWORD_USER']; // Obtiene la contraseña almacenada en la base de datos para el usuario encontrado

        if (password_verify($password, $passwordHash) || $password == $passwordHash) { // Verifica si la contraseña ingresada coincide con la contraseña almacenada
            $_SESSION['user_id'] = $row['ID_USER'];
            $_SESSION['user_name'] = $row['NOMBRE_USER']; 
            header("Location: /index.php"); // Redirige al usuario a la página principal
            exit(); // Finaliza el script
        } else { // Si la verificación de la contraseña falla
            echo '<script> alert("Contraseña incorrecta"); 
            window.history.go(-1); 
            </script>'; // Muestra un mensaje de error y redirige al usuario a la página anterior
        }
    } else { // Si no se encontró ningún usuario con el correo electrónico proporcionado
        echo '<script> alert("Usuario no encontrado"); 
        window.history.go(-1); 
        </script>'; // Muestra un mensaje de error y redirige al usuario a la página anterior
    }

    mysqli_free_result($result); // Libera los recursos del resultado de la consulta
} else { // Si hubo un error en la consulta
    echo "Error en la consulta: " . mysqli_error($conexion); // Muestra un mensaje de error
}

mysqli_close($conexion); // Cierra la conexión a la base de datos
?>
