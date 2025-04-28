1.
a_
    _ Es gratuito y accesible, por lo que se puede programar en cualquier editor, incluso en Bloc de notas aunque no sea recomendable. Se recomiendan usar otros editores como Notepad++ para mayor facilidad.

    _ Html 5 tiene un *codigo mejor ordenado*, Debido a la adición de nuevas etiquetas como <header> permiten organizar mejor el contenido y facilitar la deteccion de errores.

    _ Mayor Compatibilidad con navegadores modernos, tales como Chrome, Firefox, Safari, etc.

    _ Almacenamiento local mejorado. Permite guardar datos en el navegador sin enviarlos al servidor, incluso si se cierran las cookies.

    _ Diseño adaptativo. Compatible con dispositivos móviles y mayor facilita el diseño responsivo desde el mismo archivo HTML o frameworks.

b_
    HTML5 es la version mas actual del lenguaje de marcado utilizado para crear paginas web. Ademas de sus ventajas. Unos de sus fuertes es la posibilidad de integrar facilmente contenido multimedia como audio y video sin necesidad de plugins, y ofrece herramientas para desarrollar sitios web adaptables a distintos dispositivos, como celulares o tablets. 

c_ 
    .Es gratuito
    .Código más ordenado
    .Compatibilidad en navegadores
    .Almacenamiento mejorado
    .HMTL5 y el diseño adaptativo


2.
a_ 
    Otro elemento que se agrega al HTML5 es el AUDIO. El objetivo de esta etiqueta es permitir la carga y ejecución de archivos de audio sin requerir un plug-in de Flash, 
    Silverlight o Java. El comité de estandarización W3C deja abierto a cada empresa que desarrolla navegadores los formatos que quieran soportar (así tenemos que algunos soportan 
    mp3, wav, ogg, au).

b_ 
    <audio controls>
  <source src="https://html5tutorial.info/media/vincent.ogg" type="audio/mpeg">
    </audio>



3.
a_ 
    El elemento VIDEO permite mostrar un video sin la necesidad de plugin (Flash). En este momento los navegadores permiten mostrar formatos como el mp4, webm y ogv. 
    FireFox permite mostrar videos en formato ogv (formato de vídeo de código abierto Ogg/Theora).  

b_ 
    <video 
        width="720"
        src="https://videos.pexels.com/video-files/30635084/13112232_2560_1440_60fps.mp4"  
        controls> 
    </video>


4.
a_ 
    <form> 
        <p>Por favor, complete con su nombre  para continuar:
        </p>
        <input type="password" id="clave" required> 
        <br><br>
        <input type="submit"> 
    </form> 

b_
    <form action="#"> 
        Mail: 
        <input type="mail" id="mailusuario" required> 
        <br>
        <input type="submit" value="Confirmar"> 
    </form> 

c_  
    <form action="#"> 
        <p>Ingrese su dia de nacimiento: <input type="date" id="fecha" name="fecha"> 
        </p> 
    </form>

d_
    <form action="#"> 
        <p>Seleccione su color favorito: 
        <input type="color" id="color" name="color"> 
        </p> 
        <p><input type="submit" value="Confirmar">
        </p> 
    </form> 

e_
    <form action="#"> 
        <p>Ingrese un valor entre 1 y 100: 
        <input type="number" id="valor" name="valor" min="1" max="100"> 
        </p> 
        <p><input type="submit" value="Confirmar">
        </p> 
    </form> 