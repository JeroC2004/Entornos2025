<body>
    <html>

    <head>
        <title> Listados completo con PAGINACIÓN </title>
        <link rel="stylesheet" href="estilos.css" />
    </head>

    <body>
        <?php
        include("conexion.inc");

        $Cant_por_Pag = 5;
        $pagina = isset($_GET['pagina']) ? $_GET['pagina'] : null;
        if (!$pagina) {
            $inicio = 0;
            $pagina = 1;
        } else {
            $inicio = ($pagina - 1) * $Cant_por_Pag;
        }


        $vSql = "SELECT * FROM ciudades";
        $vResultado = mysqli_query($link, $vSql);
        $total_ciudades = mysqli_num_rows($vResultado);
        $total_paginas = ceil($total_ciudades / $Cant_por_Pag);

        echo '<div style="text-align: center;">';
        echo "Numero de ciudades encontradas: " . $total_ciudades . "<br>";
        echo "Se muestran paginas de " . $Cant_por_Pag . " ciudades cada una<br>";
        echo "Mostrando la pagina " . $pagina . " de " . $total_paginas . "<p>";
        echo '</div>';

        $vSql = "SELECT * FROM ciudades" . " limit " . $inicio . "," . $Cant_por_Pag;
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
        <?php
        if ($total_paginas > 1) {
            echo '<div style="text-align: center; margin-top: 10px;">';
            for ($i = 1; $i <= $total_paginas; $i++) {
                if ($pagina == $i)
                    echo $pagina . " ";
                else
                    echo "<a href='Listado_pag.php?pagina=" . $i . "'>" . $i . "</a> ";
            }
            echo '</div>';
        } ?>
        <p style="text-align: center;"><a href="Menu.html">Volver al men&uacute; del ABM</a></p>
    </body>

    </html>