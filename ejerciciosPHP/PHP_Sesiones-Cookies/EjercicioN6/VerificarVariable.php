<html lang="es">

<head>
    <title>Verificar Variable de sesion</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <?php
    session_start();
    if (isset($_SESSION["nombre"])) {
        echo (
            "<table>
                    <tr>
                        <td colspan='2'>
                            <h1 class='titulo'>Bienvenido, " . $_SESSION["nombre"] . "!</h1>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href='Formulario.html'>Volver</a>
                        </td>
                    </tr>
            </table>"
        );
    } else {
        echo (
            "<table>
                    <tr>
                        <td>
                            <h1 class='titulo'>No hay variable de sesión establecida.</h1>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href='Formulario.html'>Volver</a>
                        </td>
                    </tr>
            </table>"
        );
    }
    ?>
</body>

</html>