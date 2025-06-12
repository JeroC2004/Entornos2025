<html>

<head>
    <title> Listados completo </title>
    <link rel="stylesheet" href="estilos.css" />
</head>

<body>
    <?php
    include("conexion.inc");

    $vSql = "SELECT * FROM ciudades";
    $vResultado = mysqli_query($link, $vSql);
    $total_registros = mysqli_num_rows($vResultado);
    ?>
    <table>
        <tr>
            <td><b>Id</b></td>
            <td><b>Ciudad</b></td>
            <td><b>Pais</b></td>
            <td><b>Habitantes</b></td>
            <td><b>Superficie</b></td>
            <td><b>TieneMetro</b></td>
        </tr>
        <?php
        while ($fila = mysqli_fetch_array($vResultado)) {
        ?>
            <tr>
                <td><?php echo ($fila['Id']); ?></td>
                <td><?php echo ($fila['Ciudad']); ?></td>
                <td><?php echo ($fila['Pais']); ?></td>
                <td><?php echo ($fila['Habitantes']); ?></td>
                <td><?php echo ($fila['Superficie']); ?></td>
                <td>
                    <input type="checkbox" disabled <?php if ($fila['tieneMetro']) echo 'checked'; ?>>
                </td>
            </tr>
        <?php
        }
        mysqli_free_result($vResultado);
        mysqli_close($link);
        ?>
    </table>
    <p style="text-align: center;"><a href="Menu.html">Volver al menu del ABML</a></p>
</body>

</html>