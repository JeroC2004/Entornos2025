<?php
session_start();
if (isset($_POST['eliminar']) && isset($_POST['id'])) {
    $vId = intval($_POST['id']);
    if (isset($_SESSION['carro'][$vId])) {
        unset($_SESSION['carro'][$vId]);
    }
}
header("Location: vercarrito.php");
exit;
