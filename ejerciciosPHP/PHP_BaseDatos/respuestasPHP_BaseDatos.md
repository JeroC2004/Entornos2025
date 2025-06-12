1. mysqli_connect, o en versiones anteriores a PHP 5 mysql_connect.

2. Los parametos necesarios son:
   1* $hostname: es un nombre de servidor.
   2* $nombreUsuario es el nombre de usuario de base de datos.
   3\* $contraseña es la contraseña de acceso para el usuario de base de datos.

3. mysqli_select_db, y para servidores no actualizados se debe utilizar mysql_select_db.

4. esta funcion debe pasar como parametros $nombreConexión y $nombreBaseDatos

5. mysqli_query se utiliza para ejecutar consultas a la base de datos que especifiquemos.

6. dependiendo su sintaxis, requiere como parametros $nombreConexion y la "Consulta", o $nombreConexion y $query.
   en caso de que la base no este actualizada, se le pasa la "Consulta" y despues se le pasa $nombreConexion.
   "Consulta" se refiere a una consulta realizada utilizando el lenguaje SQL de consultas a bases de datos.

7. or die( ) captura el error. Detiene la ejecución del script inmediatamente y puede mostrar un mensaje personalizado.

8. string mysqli_error devuelve el último mensaje de error para la llamada más reciente a una función de MySQLi que puede haberse ejecutado correctamente o haber fallado.

9. while ($fila = mysqli_fetch_array($vResultado)) extrae una fila del resultado como un array, cada iteración representa una fila de la tabla y esta termina cuando ya no haya mas filas

    <tr> 
        <td><?php echo ($fila[0]); ?></td>           
        <td><?php echo ($fila[1]); ?></td> 
        <td><?php echo ($fila[2']); ?></td> 
    </tr>
    Por cada fila obtenida, se crea una fila de una tabla HTML. $fila[0], 1 y 2 representan los valoresque tienen las tres primeras columnas de la fila obtenida.

    <td colspan="5">  se utiliza para que cada celda se extienda a lo largo de 5 columnas de la tabla.

   mysqli_free_result($vResultado) se utiliza para liberar la memoria que ocupa el conjunto de resultados.

   mysqli_close($link) Esta función permite cerrar la conexión con la base de datos anteriormente abierta.
