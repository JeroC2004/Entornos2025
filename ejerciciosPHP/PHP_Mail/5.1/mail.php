<?php
$destinatario = "correro1@gmail.com";
$asunto = "Prueba";
$cuerpo = '
<html>
  <head>
    <title>Envio de mail</title>
  </head>
    <body>
      <h1>Esto es una prueba</h1>
    </body>
</html>
';

$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";
$headers .= "From: Persona 2 <correo2@gmail.com>\r\n";


// Enviar el correo
if (mail($destinatario, $asunto, $cuerpo, $headers)) {
  echo "Correo enviado correctamente.";
} else {
  echo "Error al enviar el correo.";
}
