<html>

<head>
    <title>Buscar alumno</title>
    <link rel="stylesheet" href="estilo.css" />
</head>

<body>
    <?php
    session_start();
    include("conexion.inc");
    $vMail = $_POST['Mail'];
    $vSql = "SELECT * FROM alumnos WHERE mail='$vMail'";
    $vResultado = mysqli_query($link, $vSql) or die(mysqli_error($link));
    if (mysqli_num_rows($vResultado) == 0) {
        echo (
            "<table>
                    <tr>
                        <td colspan='2'>
                            <div class='titulo'>Alumno Inexistente...!!!</div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href='Formulario.html'>Volver</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href='VerificarVariable.php'>verificar la variable de sesion</a>
                        </td>
                    </tr>
            </table>"
        );
    } else {
        $fila = mysqli_fetch_array($vResultado);
        $_SESSION["nombre"] = $fila["nombre"];
        echo ("<table>
                    <tr>
                        <td colspan='2'>
                            <div class='titulo'>El Alumno esta dado de alta</div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <a href='VerificarVariable.php'>verificar la variable de sesion</a>
                        </td>
                    </tr>
                </table>"
        );
    }


    ?>
</body>

</html>