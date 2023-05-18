<?php
include("carrito.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $indice = $_POST['indice'];
   eliminarProducto($indice);
}
   $_SESSION['mensaje'] = 'El producto ha sido eliminado del carrito';
// Redireccionar al carrito o a donde desees después de eliminar el producto
header('Location: /carrito.php');
exit();
?>
