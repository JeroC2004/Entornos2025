<body>
    <?php
    $destino = $_POST['emailAmigo'];
    $asunto = "Recomendacion";
    $desde = 'From: ' . $_POST['nombre'] . ' <' . $_POST['email'] . '>';
    $pagina = $_POST['pagina'];
    $comentario = " 
    \n 
    Nombre: $_POST[nombre]\n 
    Email: $_POST[email]\n 
    $_POST[texto]\n 
    $pagina\n";
    mail($destino, $asunto, $comentario, $desde);
    echo "Su recomendacion ha sido enviada.";
    ?>