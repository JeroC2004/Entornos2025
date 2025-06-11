<?php
$destinatario = "eliasmoramarco@hotmail.com.ar";
$asunto = "Prueba";

// Contenido HTML del mensaje
$cuerpo = '
<html>
<head>
  <title>Envio de mail</title>
</head>
<body>
  <h1>¡Hola!</h1>
  <p>
    <b>Esto es una prueba</b>.<br>
    xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
  </p>
</body>
</html>
';

// Cabeceras necesarias para enviar en formato HTML
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

// Dirección del remitente
$headers .= "From: Elias <lostutis1112@gmail.com>\r\n";

// Dirección para respuesta
$headers .= "Reply-To: lostutis1112@gmail.com\r\n";

// Copia (Cc) y copia oculta (Bcc)
$headers .= "Cc: lostutis1112@gmail.com\r\n";
$headers .= "Bcc: lostutis1112@gmail.com\r\n";

// Enviar el correo
if (mail($destinatario, $asunto, $cuerpo, $headers)) {
   echo "Correo enviado correctamente.";
} else {
   echo "Error al enviar el correo.";
}
