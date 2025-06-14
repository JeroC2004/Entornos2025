<?php
include('conexion.inc');
$buscar = '';
$resultado = [];

if (!empty($_POST['buscar'])) {
    $buscar = htmlspecialchars($_POST['buscar']);
    $buscar = $link->real_escape_string($buscar);
    $sql = "SELECT canciones FROM buscador WHERE canciones LIKE '%$buscar%'";
    $res = $link->query($sql);

    if ($res) {
        while ($fila = $res->fetch_assoc()) {
            $resultado[] = $fila['canciones'];
        }
    }
}
?>

<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Filtro</title>
</head>

<body>
    <a href="buscador.php" class="btn-volver">← Volver</a>
    <?php if ($buscar !== ''): ?>
        <h2 class="results-title">Resultados para: "<?php echo htmlspecialchars($buscar); ?>"</h2>
        <?php if (count($resultado) > 0): ?>
            <ul class="results-list">
                <?php foreach ($resultado as $cancion): ?>
                    <li class="result-item"><?php echo htmlspecialchars($cancion); ?></li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p class="no-results">No se encontraron canciones.</p>
        <?php endif; ?>
    <?php endif; ?>
    <script>
        const pastelColors = [
            '#FFD1DC',
            '#C1E1C1',
            '#FFECB3',
            '#B3D9FF',
            '#FFCCBC',
            '#D1C4E9'
        ];

        document.querySelectorAll('.result-item').forEach((el) => {
            const color = pastelColors[Math.floor(Math.random() * pastelColors.length)];
            el.style.backgroundColor = color;
        });
    </script>
</body>

</html>