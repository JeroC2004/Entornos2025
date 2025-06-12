<head>
    <title>Modificacion</title>
</head>

<body>
    <?php
    include("conexion.inc");
    $vCiudad = $_POST['Ciudad'];
    $vPais = $_POST['Pais'];
    $vHabitantes = $_POST['Habitantes'];
    $vSuperficie = $_POST['Superficie'];
    $vMetro = isset($_POST['Metro']) ? 1 : 0;
    $vCiudadOriginal = $_POST['CiudadOriginal'];
    $vPaisOriginal = $_POST['PaisOriginal'];
    $vSql = "UPDATE ciudades set Ciudad='$vCiudad', Pais='$vPais', Habitantes='$vHabitantes', Superficie='$vSuperficie', tieneMetro='$vMetro' where Ciudad='$vCiudadOriginal' and Pais='$vPaisOriginal'";
    mysqli_query($link, $vSql) or die(mysqli_error($link));
    echo ("La ciudad fue Modificada<br>");
    echo ("<A href= 'Menu.html'>Volver al Menu del ABM</A>");
    mysqli_close($link);
    ?>
</body>

</html>