<head>
    <title>Contador de visitas</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<?php
if (isset($_COOKIE['contador'])) {
    $contador = $_COOKIE['contador'] + 1;
    setcookie("contador", $contador, time() + (86400 * 30));
    echo "<div>Has visitado esta página $contador veces.</div>";
} else {
    $contador = 1;
    setcookie("contador", $contador, time() + (86400 * 30));
    echo "<div>¡Bienvenido! Esta es tu primera visita</div>";;
}
