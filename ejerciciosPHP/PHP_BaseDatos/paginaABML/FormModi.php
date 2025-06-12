<head>
    <title>Modificacion</title>
    <link rel="stylesheet" href="estilos.css" />
</head>

<body>
    <?php
    include("conexion.inc");
    $vCiudad = $_POST['Ciudad'];
    $vPais = $_POST['Pais'];
    $vSql = "SELECT * FROM ciudades WHERE Ciudad ='$vCiudad' and Pais='$vPais'";
    $vResultado = mysqli_query($link, $vSql) or die(mysqli_error($link));
    $fila = mysqli_fetch_array($vResultado);
    if (mysqli_num_rows($vResultado) == 0) {
        echo ("Ciudad Inexistente...!!! <br>");
        echo ("<A href='FormModiIni.html'>Continuar</A>");
    } else {
    ?>
        <FORM action="Modi.php" method="POST" name="FormModi">
            <input type="hidden" name="CiudadOriginal" value="<?php echo ($fila['Ciudad']); ?>">
            <input type="hidden" name="PaisOriginal" value="<?php echo ($fila['Pais']); ?>">
            <table>
                <tr>
                    <td>Ciudad:</td>
                    <td>
                        <input
                            type="text"
                            name="Ciudad"
                            size="20"
                            maxlength="100"
                            required value="<?php echo ($fila['Ciudad']); ?>">
                    </td>
                </tr>
                <tr>
                    <td>Pais:</td>
                    <td>
                        <input type="text" name="Pais" size="20" maxlength="100" required value="<?php echo ($fila['Pais']); ?>">
                    </td>
                </tr>
                <tr>
                    <td>Habitantes:</td>
                    <td> <input type="number" name="Habitantes" min="0" max="2147483647" step="1" required value="<?php echo ($fila['Habitantes']); ?>">
                    </td>
                </tr>
                <tr>
                    <td>Superficie:</td>
                    <td>
                        <input
                            type="number"
                            name="Superficie"
                            step="1"
                            min="0"
                            max="99999999.99"
                            size="20"
                            required value="<?php echo ($fila['Superficie']); ?>">
                    </td>
                </tr>
                <tr>
                    <td>Tiene Metro:</td>
                    <td><input type="checkbox" name="Metro" value="1" <?php if ($fila['tieneMetro']) echo 'checked'; ?>>Si </td>
                </tr>
                <tr>
                    <td> <input type="SUBMIT" name="Submit"
                            value="Modificar">
                    </td>
                </tr>
            </table>
        </FORM>
    <?php
    }
    mysqli_free_result($vResultado);
    mysqli_close($link);
    ?>