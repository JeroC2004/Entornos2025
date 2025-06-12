<html>

<head>
    <title>Alta Usuario</title>
</head>

<body>
    <?php
    include("conexion.inc");
    $vCiudad = $_POST['Ciudad'];
    $vPais = $_POST['Pais'];
    $vHabitantes = $_POST['Habitantes'];
    $vSuperficie = $_POST['Superficie'];
    $vMetro = isset($_POST['Metro']) ? 1 : 0;
    $vSql = "SELECT COUNT(*) as canti FROM ciudades WHERE Ciudad='$vCiudad' and Pais='$vPais'";
    $vResultado = mysqli_query($link, $vSql) or die(mysqli_error($link));
    $vCantCiudades = mysqli_fetch_assoc($vResultado);
    if ($vCantCiudades['canti'] != 0) {
        echo ("La ciudad ya Existe<br>");
        echo ("<A href='Menu.html'>VOLVER AL ABML</A>");
    } else {
        $vSql = "INSERT INTO ciudades (Ciudad, Pais, Habitantes, Superficie, tieneMetro)  
VALUES ('$vCiudad', '$vPais', $vHabitantes, $vSuperficie, $vMetro)";
        mysqli_query($link, $vSql) or die(mysqli_error($link));
        echo ("La ciudad fue Registrada");
        echo ("<A href='Menu.html'>VOLVER AL MENU</A>");
    }
    mysqli_free_result($vResultado);
    mysqli_close($link);
    ?></body>

</html>