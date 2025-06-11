<?php
session_start();

if (!isset($_SESSION["contador"])) {
    $_SESSION["contador"] = 1;
} else {
    $_SESSION["contador"]++;
}
?>
<html>

<head>
    <title>Cuenta</title>
</head>

<body>
    <p>Contador actualizado.</p>
    <p><a href="cant_visitas.php">Ver visitas</a></p>
    <p><a href="paginaPrincipal.php">Volver al inicio</a></p>
</body>

</html>