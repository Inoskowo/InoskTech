<?php
session_start();

function agregarProducto($id, $nombre, $precio, $cantidad) {
    $producto = array(
        'id' => $id,
        'nombre' => $nombre,
        'precio' => $precio,
        'cantidad' => $cantidad
    );

    if (!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = array($producto);
    } else {
        $encontrado = false;
        foreach ($_SESSION['carrito'] as &$p) {
            if ($p['id'] == $id) {
                $p['cantidad'] += $cantidad;
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

function eliminarProducto($id) {
    foreach ($_SESSION['carrito'] as $key => $p) {
        if ($p['id'] == $id) {
            unset($_SESSION['carrito'][$key]);
            break;
        }
    }
}

function mostrarCarrito() {
    if (isset($_SESSION['carrito'])) {
        $total = 0;
        foreach ($_SESSION['carrito'] as $p) {
            $subtotal = $p['precio'] * $p['cantidad'];
            $total += $subtotal;
            echo "<p>{$p['nombre']} x {$p['cantidad']} = \${$subtotal}</p>";
        }
        echo "<p>Total: \${$total}</p>";
    } else {
        echo "<p>No hay productos en el carrito</p>";
    }
}
?>
