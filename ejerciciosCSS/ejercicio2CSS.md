p#normal { 
    font-family: arial,helvetica; 
    font-size: 11px; 
    font-weight: bold; 
} 

    Se refiere a un elemento <p> cuyo id="normal".
    Efectos:
    font-family: Arial, helvetica. Usa arial, o helvetica si arial no esta disponible.
    font-size: 11px. El tamano de la fuente es de 11 píxeles.
    font-weight: bold. La fuente esta en negrita.

*#destacado { 
    border-style: solid; 
    border-color: blue; 
    border-width: 2px; 
} 

    Se refiere a cualquier tipo de elemento con id="destacado".
    Efectos:
    border-style: solid. Tiene un borde de tipo solido.
    border-color: blue. Tiene un borde de color azul.
    border-width: 2px. Tiene un borde con 2 píxeles de ancho.

#distinto { 
    background-color: #9EC7EB; 
    color: red; 
} 

    Se refiere a un elemento con id="distinto".
    Efectos:
    background-color: #9EC7EB. Debe tener un color de fondo azul claro.
    color: red. Debe tener un color rojo.


<p id="normal">Este es un párrafo</p>

    Tomas los efectos de p#normal

<p id="destacado">Este es otro párrafo</p> 

    Toma los efectos de *#destacado

<table id="destacado"><tr><td>Esta es una tabla</td></tr></table> 

    Sigue tomando los efectos de *#destacado ya que es para cualquier tipo de elemento

<p id="distinto">Este es el último párrafo</p>

    Tomas los efectos de #distinto