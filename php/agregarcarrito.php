<?php
include("conexion.php");
session_start();
// Aquí debes incluir la conexión a tu base de datos

// Verificar si se ha enviado un formulario de agregar al carrito
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los datos del producto enviado desde el formulario
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];

    // Llamar a la función para agregar el producto al carrito
    agregarProducto($id, $nombre, $precio);
}


// Función para agregar un producto al carrito
function agregarProducto($id, $nombre, $precio) {
    $producto = array(
        'id' => $id,
        'nombre' => $nombre,
        'precio' => $precio
    );

    if (!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = array($producto);
    } else {
        $encontrado = false;
        foreach ($_SESSION['carrito'] as &$p) {
            if ($p['id'] == $id) {
                $encontrado = true;
                break;
            }
        }
        if (!$encontrado) {
            $_SESSION['carrito'][] = $producto;
        }
    }

    // Establecer el mensaje de confirmación en la variable de sesión
    $_SESSION['mensaje'] = 'El producto ha sido añadido al carrito';

    // Redireccionar al catálogo o a donde desees después de agregar al carrito
    header('Location: /gallery.php');
    exit();
}

// Aquí puedes incluir el resto del código de tu archivo, como la conexión a la base de datos, consultas, etc.
// Recuerda que este ejemplo solo se centra en la parte de agregar al carrito y redireccionar.
?>
