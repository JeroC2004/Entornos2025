p.quitar { 
    color: red; 
    } 
    Se refiere a los elementos <p> con class="quitar".
    Efecto:
    El texto de los párrafos con class="quitar" se mostraran en color rojo.

*.desarrollo { 
    font-size: 8px; 
} 
    Se refiere a cualquier tipo de elemento con class="desarrollo".
    Efecto: 
    El texto de los elementos con class="desarrollo" tendran un tamaño de fuente de 8px.

.importante { 
    font-size: 20px; 
}
    Se refiere a cualquier elemento con class="importante".
    Efecto: 
    El texto de los elementos con class="importante" tendran tamaño de fuente de 20px.

<p class="desarrollo">  
    En este primer párrafo trataremos lo siguiente: 
    <br />xxxxxxxxxxxxxxxxxxxxxxxxx 
</p> 
    Efecto:
    Fuente de 8px.

<p class="quitar"> 
    Este párrafo debe ser quitado de la obra… 
    <br />xxxxxxxxxxxxxxxxxxxxxxxxx 
</p> 
    Efecto:
    Texto en rojo.

<p > 
    En este otro párrafo trataremos otro tema:<br /> 
    xxxxxxxxxxxxxxxxxxxxxxxxx 
</p> 
    Efecto:
    No recibe cambios de CSS.

<p class="importante"> 
    Y este es el párrafo más importante de la obra… 
    <br />xxxxxxxxxxxxxxxxxxxxxxxxx 
</p> 
    Efecto:
    Fuente de 20px.

<h1 class="quitar">Este encabezado también debe ser quitado de la obra</h1> 
    Efecto:
    Aunque tiene class="quitar", la regla en CSS p.quitar solo aplica a <p> y no a <h1>.

<p class="quitar importante">Se pueden aplicar varias clases a la vez</p>
    Efecto:
    Color rojo.
    Tamaño de fuente 20px.
    Ambas class al mismo tiempo