<html>

<head>
    <title>Alta Alumno</title>
    <link rel="stylesheet" href="estilo.css" />
</head>

<body>
    <?php
    include("conexion.inc");
    $vNombre = $_POST['nombre'];
    $vComision = $_POST['codigocurso'];
    $vMail = $_POST['mail'];
    $vSql = "SELECT COUNT(*) as canti FROM alumnos WHERE nombre='$vNombre' AND codigocurso='$vComision'";
    $vResultado = mysqli_query($link, $vSql) or die(mysqli_error($link));
    $vCantAlumnos = mysqli_fetch_assoc($vResultado);
    if ($vCantAlumnos['canti'] != 0) {
        echo (
            "<table>
                    <tr>
                        <td colspan='2'>
                            <div class='titulo'>El alumno ya esta dado de alta</div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href='Formulario.html'>VOLVER</a>
                        </td>
                    </tr>
                </table>"
        );
    } else {
        $vSql = "INSERT INTO alumnos (nombre, codigocurso, mail)  
VALUES ('$vNombre', '$vComision', '$vMail')";
        mysqli_query($link, $vSql) or die(mysqli_error($link));
        echo (
            "<table>
                <tr>
                    <td colspan='2'>
                        <div class='titulo'>El alumno " . $vNombre . " ha sido dado de alta correctamente</div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href='Formulario.html'>VOLVER</a>
                    </td>
                </tr>
            </table>"
        );
    }
    mysqli_free_result($vResultado);
    mysqli_close($link);
    ?></body>

</html>