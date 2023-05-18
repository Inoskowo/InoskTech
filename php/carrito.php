<?php
session_start();

// Aquí debes incluir la conexión a tu base de datos
include("conexion.php");

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
}


function actualizarProducto($id, $cantidad) {
    foreach ($_SESSION['carrito'] as &$p) {
        if ($p['id'] == $id) {
            $p['cantidad'] = $cantidad;
            break;
        }
    }
}

function eliminarProducto($indice) {
    if (isset($_SESSION['carrito'][$indice])) {
        unset($_SESSION['carrito'][$indice]);
        $_SESSION['carrito'] = array_values($_SESSION['carrito']); // Reindexar el array
    }
}


function mostrarCarrito() {
    if (isset($_SESSION['carrito'])) {
        $total = 0;
        foreach ($_SESSION['carrito'] as $indice => $p) {
            $subtotal = $p['precio'];
            $total += $subtotal;
            echo "<p>{$p['nombre']} = \${$subtotal}</p>";
            echo "<form action=\"carrito.php\" method=\"post\">";
            echo "<input type=\"hidden\" name=\"indice\" value=\"$indice\">";
            echo "<button type=\"submit\" class=\"btn btn-danger\">Eliminar</button>";
            echo "</form>";
        }
        echo "<p>Total: \${$total}</p>";
    } else {
        echo "<p>No hay productos en el carrito</p>";
    }
}
?>