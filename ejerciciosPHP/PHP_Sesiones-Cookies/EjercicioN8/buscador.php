<?php
$buscar = '';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="estilo.css">
    <title>Buscador de Canciones</title>
</head>

<body>
    <h1 class="title">Buscador de Canciones</h1>
    <form method="POST" action="filtro.php" class="search-form">
        <input type="text" name="buscar" placeholder="Escribe el nombre de la canción" value="<?php echo htmlspecialchars($buscar); ?>" required class="search-input">
        <button type="submit" class="search-button">Buscar</button>
    </form>
</body>

</html>