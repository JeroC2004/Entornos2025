<?php
include("conexion.inc");
session_start();
$vCarro = $_SESSION['carro'] ?? [];
foreach ($vCarro as $key => $cantidad) {
    if ($key === "" || intval($cantidad) < 1) {
        unset($vCarro[$key]);
    }
}
$_SESSION['carro'] = $vCarro;
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="estilo.css" />
    <title>Carrito</title>
</head>

<body>
    <?php if (!empty($vCarro)) : ?>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th colspan="6">
                            <div class="titulo">Carrito</div>
                        </th>
                    </tr>
                    <tr>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Subtotal</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $vTotal = 0;
                    foreach ($vCarro as $vId => $vCantidad) :
                        $vId = intval($vId);
                        $vCantidad = intval($vCantidad);
                        $vConsulta = mysqli_query($link, "SELECT producto, precio FROM catalogo WHERE id = $vId");
                        if ($vFila = mysqli_fetch_assoc($vConsulta)) :
                            $vProducto = $vFila['producto'];
                            $vPrecio = $vFila['precio'];
                            $vSubtotal = $vPrecio * $vCantidad;
                            $vTotal += $vSubtotal;
                    ?>
                            <tr>
                                <td data-label="Producto"><?= htmlspecialchars($vProducto) ?></td>
                                <td data-label="Cantidad">
                                    <form method="post" action="comprar.php">
                                        <input type="hidden" name="id" value="<?= $vId ?>" />
                                        <input type="number" name="cantidad" value="<?= $vCantidad ?>" min="1" />
                                        <button type="submit" name="comprar">Comprar ahora</button>
                                    </form>
                                </td>
                                <td data-label="Precio">$<?= number_format($vPrecio, 2) ?></td>
                                <td data-label="Subtotal">$<?= number_format($vSubtotal, 2) ?></td>
                                <td data-label="Eliminar">
                                    <form method="post" action="borrarcar.php" onsubmit="return confirm('¿Eliminar este producto?');">
                                        <input type="hidden" name="id" value="<?= $vId ?>" />
                                        <button type="submit" name="eliminar">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                    <?php
                        endif;
                    endforeach;
                    ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3" style="font-weight: 700; text-align:right;">Total general:</td>
                        <td colspan="2" style="font-weight: 700;">$<?= number_format($vTotal, 2) ?></td>
                    </tr>
                </tfoot>
            </table>
            <div style="text-align: center">
                <a href="catalogo.php">Volver</a>
            </div>
        </div>
    <?php else : ?>
        <div class="table-container no-productos">
            <p>No hay productos en el carrito.</p>
            <a href="catalogo.php">Volver al catálogo</a>
        </div>
    <?php endif; ?>

</body>

</html>