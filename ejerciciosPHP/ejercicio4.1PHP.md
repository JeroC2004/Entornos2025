1

    <?php
    function doble($i) {
        return $i*2;
    }
    $a = TRUE;
    $b = "xyz";
    $c = 'xyz';
    $d = 12;
    echo gettype($a);
    echo gettype($b);
    echo gettype($c);
    echo gettype($d);
    if (is_int($d)) {
        $d += 4;
    }
    if (is_string($a)) {
        echo "Cadena: $a";
    }
    $d = $a ? ++$d : $d*3;
    $f = doble($d++);
    $g = $f += 10;
    echo $a, $b, $c, $d, $f , $g;
    ?>

Variables:

    $a = TRUE (Variable de tipo booleana)

    $b = "xyz" (Varibale de tipo string)

    $c = 'xyz' (Varibale de tipo string)

    $d = 12 (Varibale de tipo integer)

    $f = doble($d++) (Varibale de tipo integer)

    $g = $f += 10 (Varibale de tipo integer)

Operadores:

    return $i*2 (* Operador del tipo multiplicacion)

    $a = TRUE (= Operador del tipo asignacion)

    $d += 4 (+= Operador del tipo suma con asignacion)

    ++$d (++ Operador del tipo incremento)

    $d = $a ? ++$d : $d*3; (? : Operador ternario)

Las funciones y sus parámetros:

    gettype($a) (Funcion que retorna el tipo de varible que es a)

    is_string($a) (Funcion que retorna Verdadero si a es una variable de tipo string)

    is_int($d) (Funcion que retorna Verdadero si d es una variable de tipo integer)

    doble($d++) (Funcion definida por el usuario que se le pasa como parametro $d++)

Estructuras de control:

    if (is_string($a)) {echo "Cadena: $a";} (estructura del tipo if (condicion) { } que se ejecuta si la condicion es verdadera)

    $d = $a ? ++$d : $d*3 (estructura del tipo condición ? expr1 : expr2 que retorna expr1 si la condicion es verdadera y expr2 si la condicion es falsa)

Salidas por pantalla:

    echo gettype($a) (Boolean)
    echo gettype($b) (String)
    echo gettype($c) (String)
    echo gettype($d) (Integer)
    echo $a, $b, $c, $d, $f , $g (1xyzxyz184444)
    en pantalla figura (booleanstringstringinteger1xyzxyz184444)
