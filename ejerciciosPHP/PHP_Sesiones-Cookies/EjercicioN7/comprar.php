<?php
session_start();
include("conexion.inc");

if (isset($_POST['comprar'])) {
    $id = intval($_POST['id']);
    $cantidad = intval($_POST['cantidad']);
    if ($cantidad < 1) {
        $cantidad = 1;
    }

    if (isset($_SESSION['carro'][$id])) {
        $_SESSION['carro'][$id] = $cantidad;
    }
}
?>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <title>Compra</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="estilo.css" />
</head>

<body>
    <div class="table-container no-productos">
        <p>Próximamente esta función estará activa.</p>
        <a href="vercarrito.php">Volver al carrito</a>
    </div>
</body>

</html>