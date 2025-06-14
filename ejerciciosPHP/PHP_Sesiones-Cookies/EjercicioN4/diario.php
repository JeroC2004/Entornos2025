<?php
if (isset($_POST["titular"])) {
    setcookie("titular", $_POST["titular"], time() + (86400 * 30));
    $titularGuardado = $_POST["titular"];
} else {
    $titularGuardado = $_COOKIE["titular"] ?? "todos";
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="estilo.css" />
    <title>Diario</title>
</head>

<body>
    <div class="top-bar">
        <div class="logo">rosario4</div>
    </div>
    <div class="navbar">
        <div class="menu-centro">
            <a href="#" class="<?php echo ($titularGuardado == 'politica') ? 'active' : ''; ?>">POLITICA</a>
            <a href="#" class="<?php echo ($titularGuardado == 'economia') ? 'active' : ''; ?>">ECONOMIA</a>
            <a href="#" class="<?php echo ($titularGuardado == 'deportes') ? 'active' : ''; ?>">DEPORTES</a>
        </div>
        <a href="borrar_cookie.php" class="borrar-link">Borrar preferencia guardada</a>
    </div>


    <?php
    if ($titularGuardado == "todos") {
        echo '<h3 class="tituloh3" style="color: darkred">Noticias politicas importante del dia</h3>';
        echo '<h3 class="tituloh3" style="color: green">Noticias economicas destacadas</h3>';
        echo '<h3 class="tituloh3" style="color: blue">Noticias deportivas de ultimo momento</h3>';
    }
    if ($titularGuardado == "politica") {
        echo '<h3 class="tituloh3" style="color: darkred">Noticias politicas importante del dia</h3>';
    }
    if ($titularGuardado == "economia") {
        echo '<h3 class="tituloh3" style="color: green">Noticias economicas destacadas</h3>';
    }
    if ($titularGuardado == "deportes") {
        echo '<h3 class="tituloh3" style="color: blue">Noticias deportivas de ultimo momento</h3>';
    }

    ?>
    <form method="post" class="formulario">
        <p>Elegí qué tipo de titular querés ver:</p>
        <input type="radio" name="titular" value="politica" id="poli" <?php if ($titularGuardado == 'politica') echo 'checked'; ?>>
        <label for="poli" class="label">Noticia política</label><br>
        <input type="radio" name="titular" value="economia" id="eco" <?php if ($titularGuardado == 'economia') echo 'checked'; ?>>
        <label for="eco" class="label">Noticia económica</label><br>
        <input type="radio" name="titular" value="deportes" id="dep" <?php if ($titularGuardado == 'deportes') echo 'checked'; ?>>
        <label for="dep" class="label">Noticia deportiva</label><br><br>
        <button type="submit">Guardar preferencia</button>
    </form>
</body>

</html>