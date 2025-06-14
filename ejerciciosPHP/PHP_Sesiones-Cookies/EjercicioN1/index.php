<?php
$modo = $_COOKIE["modo"] ?? "claro"; //se fija si la cookie existe, si no, se asigna "claro" como valor por defecto
$clase = "";
if ($modo === "oscuro") $clase = "oscuro";
if ($modo === "atardecer") $clase = "atardecer";
if ($modo === "claro") $clase = "claro";
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Modo Tema</title>
  <link rel="stylesheet" href="estilos.css" />
</head>

<body class="<?= $clase ?>">
  <div class="theme-toggle">
    <div class="circle">
      <ion-icon class="sun" name="sunny"></ion-icon>
    </div>
  </div>

  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <script src="script.js"></script>
</body>

</html>