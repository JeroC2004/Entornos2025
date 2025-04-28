p#normal { 
    font-family: arial,helvetica; 
    font-size: 11px; 
    font-weight: bold; 
} 
*#destacado { 
    border-style: solid; 
    border-color: blue; 
    border-width: 2px; 
} 
#distinto { 
    background-color: #9EC7EB; 
    color: red; 
} 
<p id="normal">Este es un párrafo</p>

<p id="destacado">Este es otro párrafo</p> 

<table id="destacado"><tr><td>Esta es una tabla</td></tr></table> 

<p id="distinto">Este es el último párrafo</p> 

    Se refiere a un elemento p cuyo id="normal".
    Sus declaraciones son:
    font-family: Arial, helvetica. Usa arial, o helvetica si arial no esta disponible.
    font-size: 11px. El tamano de la fuente es de 11 píxeles.
    font-weight: bold. La fuente esta en negrita.


    se refiere a cualquier tipo de elemento con id="destacado".
    Sus declaraciones son:
    border-style: solid. Tiene un borde de tipo solido.
    border-color: blue. Tiene un borde de color azul.
    border-width: 2px. Tiene un borde con 2 píxeles de ancho.


    Se refiere a cualquier elemento con id="distinto".
    Sus declaraciones son:
    background-color: #9EC7EB. Debe tener un color de fondo azul claro.
    color: red. Debe tener un color rojo.