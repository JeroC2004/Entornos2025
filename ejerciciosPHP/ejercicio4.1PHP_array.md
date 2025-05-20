    1
    <?php
        $a = array( 'color'  => 'rojo',
        'sabor'  => 'dulce',
        'forma'  => 'redonda',
        'nombre' => 'manzana',
        4
        );
    ?>

    2
    <?php
        $a['color']  = 'rojo';
        $a['sabor']  = 'dulce';
        $a['forma']  = 'redonda';
        $a['nombre'] = 'manzana';
        $a[]
    ?>

Ambos códigos hacen lo mismo: crean una lista con las caracterizticas de una manzana. La diferencia es que uno lo hace todo junto y el otro lo hace paso por paso. y al 4 y al $a[] les dara la clave numérica disponible que es 0.
