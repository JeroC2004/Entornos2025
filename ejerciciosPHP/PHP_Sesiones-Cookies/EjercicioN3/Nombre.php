<?php
if (isset($_POST["usuario"])) {     // verifica si el campo usuario existe
    $nombreUsuario = $_POST["usuario"];
    setcookie("usuario", $nombreUsuario, time() + (86400 * 30));    // Guarda el nombre de usuario en una cookie por 30 días 
} else {
    $nombreUsuario = isset($_COOKIE["usuario"]) ? $_COOKIE["usuario"] : "";   // si ya existe la cookie "usuario" guarda su valor en $nombreUsuario; si no, deja $nombreUsuario como cadena vacía.
}
?>

<head>
    <meta charset="UTF-8">
    <title>Formulario con Cookie</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <h2>Formulario de Usuario</h2>

    <?php if (!empty($nombreUsuario)): ?>
        <p>Último nombre de usuario ingresado: <?php echo ($nombreUsuario); ?></p>
    <?php endif; ?>

    <form action="Nombre.php" method="post">
        <label for="usuario">Nombre de usuario:</label>
        <input type="text" id="usuario" name="usuario" required>
        <input type="submit" value="GuardarNombre">
    </form>
</body>