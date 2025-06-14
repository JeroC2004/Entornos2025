<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Formulario</title>
</head>

<body>
    <form action="guardarSesion.php" method="post">
        <table>
            <tr>
                <td colspan="2">
                    <div class="titulo">Ingresa tus datos</div>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="usuario">Nombre de usuario:</label>
                </td>
                <td>
                    <input type="text" name="usuario" id="usuario" size="20" maxlength="100" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="clave">Clave:</label>
                </td>
                <td>
                    <input type="password" name="clave" id="clave" size="20" maxlength="100" required>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:center;">
                    <input type="submit" value="Enviar">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>