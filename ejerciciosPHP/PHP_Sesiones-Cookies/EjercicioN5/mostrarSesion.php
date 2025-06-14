<?php
session_start();
?>

<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Datos del Cliente</title>
</head>

<body>
    <h2 class="titutulo">Datos almacenados en la sesion</h2>

    <?php
    if (isset($_SESSION["usuario"]) && isset($_SESSION["clave"])) {
        echo "<p>Usuario: " . ($_SESSION["usuario"]) . "</p>";
        echo "<p>Clave: " . ($_SESSION["clave"]) . "</p>";
        echo "<p>Clave encriptada: " . md5(($_SESSION["clave"])) . "<pre style='color: red'>aparece de esta forma por md5</pre></p>";
    } else {
        echo "<p>No hay datos guardados en la sesión.</p>";
    }
    ?>
</body>

</html>