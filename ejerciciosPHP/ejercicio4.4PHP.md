
- echo "El $flor $color \n";

En este punto, las variables $flor y $color no están definidas aún, porque datos.php no ha sido incluido todavía. PHP mostrará un aviso de variable indefinida, pero aún así imprimirá la cadena con los nombres literales de las variables: "El"


- include 'datos.php';

    echo " El $flor $color";

Ahora sí están definidas las variables, así que se imprime: "El clavel blanco"

