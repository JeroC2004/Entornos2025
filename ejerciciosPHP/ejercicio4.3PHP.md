a\_

    <html>
        <head><title>Documento 1</title></head>
        <body>
            <?php
                echo "<table width = 90% border = '1' >";
                $row = 5;
                $col = 2;
                for ($r = 1; $r <= $row; $r++) {
                    echo "<tr>";
                    for ($c = 1; $c <= $col;$c++) {
                        echo "<td>&nbsp;</td>\n";
                    }      echo "</tr>\n";
                }
                echo "</table>\n";
            ?>
        </body>
    </html>

El codigo genera una tabla HTML de 5 filas y 2 columnas, con un borde que ocupa el 90%, usando bucles.

b\_

    <html>
    <head><title>Documento 2</title></head>
    <body>
        <?php
        if (!isset($_POST['submit'])) {
        ?>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            Edad: <input name="age" size="2">
            <input type="submit" name="submit" value="Ir">
            </form>
        <?php
            }
            else
            {
                $age = $_POST['age'];
                if ($age >= 21) {
                    echo 'Mayor de edad';
                }
                else {
                    echo 'Menor de edad';
                }
            }
        ?>
    </body>
    </html>

El codigo genera un formulario que pide introducir la edad de la persona, y muestra si la persona es mayor o menor a los 21 años.
