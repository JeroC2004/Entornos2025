<?php
session_start();
?>
<html>

<head>
    <title>Visitas</title>
</head>

<body>
    <h2>
        <?php
        if (isset($_SESSION["contador"])) {
            echo "Has visitado " . $_SESSION["contador"] . " paginas.";
        } else {
            echo "no has visitado ninguna página.";
        }
        ?>
    </h2>
    <p><a href="cuenta.php">Ir a otra página</a></p>
    <p><a href="paginaPrincipal.php">Volver al inicio</a></p>
</body>

</html>