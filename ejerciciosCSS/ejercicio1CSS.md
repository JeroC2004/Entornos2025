1) CSS (Cascading Style Sheets u Hojas de Estilo en Cascada) es un lenguaje de hojas de estilo que permite controlar la apariencia de una página web. Se utiliza para definir cómo se presentan los elementos HTML, especificando aspectos como tamaño, fuentes, colores, espaciado, márgenes, ubicación de los elementos y más​.

2) Las reglas CSS funcionan asociando un selector (el elemento o elementos a los que se aplica el estilo) a un conjunto de propiedades (las características a modificar) con sus respectivos valores. Ejemplo: 

    p {
    color: red;
    }

    Aquí el selector es p (párrafos), la propiedad es color y el valor es red.

3) Las tres formas de aplicar estilos en CSS son:

- Nivel de elemento HTML (inline style): directamente en el atributo style de un elemento.

- Nivel de página (style en el head): usando una sección style dentro del head.

- Archivo externo: creando un archivo .css independiente que se enlaza al documento HTML​

4) Los principales selectores en CSS son:

- Selector de etiqueta: aplica estilos a todas las etiquetas de un tipo específico.

    Ejemplo:

    p { color: blue; }

- Selector de clase: aplica estilos a elementos con una clase específica.

    Ejemplo:

    .important { font-weight: bold; }

- Selector de ID: aplica estilos a un único elemento con un ID específico.

    Ejemplo:

    #header { background-color: grey; }

- Selector de agrupación: aplica el mismo estilo a varios elementos.

    Ejemplo:

    h1, h2, h3 { color: red; }

5) Una pseudo-clase define un estado especial de un elemento. Se usan mucho en los vínculos (a) para definir su comportamiento en diferentes situaciones:

- :link — Vínculo normal, aún no visitado.

- :visited — Vínculo que ya fue visitado.

- :hover — Vínculo sobre el que el usuario pasa el cursor.

- :active — Vínculo que está siendo activado (clic en progreso).

6) La herencia en CSS es el mecanismo mediante el cual algunos estilos aplicados a un elemento padre se transfieren automáticamente a sus elementos hijos.
Por ejemplo, si se define un color de texto en el body, todos los párrafos (p) heredarán ese color a menos que se indique lo contrario.

7) La cascada en CSS determina cómo se combinan múltiples reglas de estilo que afectan un mismo elemento. Se basa en:

- Especificidad de los selectores.

- Orden de aparición de las reglas.

- Importancia de las reglas (!important tiene prioridad máxima).

    Esto permite decidir qué estilo aplicar cuando existen conflictos entre diferentes reglas

