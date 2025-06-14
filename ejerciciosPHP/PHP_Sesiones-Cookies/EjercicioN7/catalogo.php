<?php
session_start();
include("conexion.inc");
$_SESSION['carro'] = $_SESSION['carro'] ?? [];

if (isset($_POST['agregar'])) {
    $vId = intval($_POST['agregar']);
    $verifica = mysqli_query($link, "SELECT id FROM catalogo WHERE id = $vId");
    if (mysqli_num_rows($verifica) > 0) {
        $_SESSION['carro'][$vId] = ($_SESSION['carro'][$vId] ?? 0) + 1;
    }
    header("Location: catalogo.php");
    exit;
}
$vResultado = mysqli_query($link, "SELECT * FROM catalogo ORDER BY producto ASC");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="estilo.css" />
    <title>Catalogo</title>
</head>

<body>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th colspan="3">
                        <div class="titulo">Catalogo de Productos</div>
                    </th>
                </tr>
                <tr>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Agregar</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($fila = mysqli_fetch_array($vResultado)) : ?>
                    <tr>
                        <td data-label="Producto"><?= htmlspecialchars($fila['producto']) ?></td>
                        <td data-label="Precio">$<?= number_format($fila['precio'], 2) ?></td>
                        <td data-label="Agregar">
                            <form method="post" action="">
                                <input type="hidden" name="agregar" value="<?= $fila['id'] ?>" />
                                <button type="submit">Agregar</button>
                            </form>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3" style="text-align:center;">
                        <a href="vercarrito.php">Ver Carrito</a>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>

    <?php
    mysqli_free_result($vResultado);
    mysqli_close($link);
    ?>

</body>

</html>