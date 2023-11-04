## Introducción a las hojas de estilo CSS

Las hojas de estilo están muy relacionadas con las etiquetas de HTML por lo que deberían explicarse de forma simultánea.

Antes de CSS, el formato se solía incluir directamente en las etiquetas HTML. Por ejemplo, para definir el ancho de una celda en una tabla, se usaba algo como `<td width="95%">`. Afortunadamente, CSS nos brinda una forma más elegante y eficiente de hacerlo.

Las hojas de estilo en cascada, o CSS, han recorrido un largo camino desde su inicio en 1995. A lo largo de los años, se han desarrollado diferentes versiones de CSS, y actualmente, estamos trabajando con CSS3. A diferencia de HTML, que se versiona, CSS se clasifica en niveles.


Un concepto fundamental en una página web es la separación entre el contenido y el formato, actualmente para dar formato al texto se utilizan las hojas de estilo en cascada CSS (Cascading Style Sheets). Es decir, en el archivo .html se escribe el contenido de la página web con etiquetas html, y en el archivo .css se define el estilo o formato del contenido, por ejemplo el color del texto o el tipo de alineación.

En la imagen siguiente podemos ver un ejemplo.

![](https://www.aulaclic.es/html/graficos/intro_css.png)

En el archivo ejemplo_2_1.html tenemos las etiquetas html y el contenido, y en el archivos ejemplo_2_1.css tenemos la hoja de estilo. El resultado es la página web que se muestra en la parte inferior.

En la hoja de estilo vemos que a la etiqueta **h1** se le ha aplicado el estilo para centrar el texto ``h1 { text-align: center }``, y a la etiqueta **p** se le ha aplicado el estilo para establecer el tipo de letra y el tamaño del texto ``p { (font-family: arial; font-size: 16px; }``, con lo cual a todas las etiquetas p se les aplicarán estos dos estilos.

Si en lugar de aplicar un estilo a todas las etiquetas queremos aplicarlo a unas etiquetas en concreto podemos declarar una clase y asignarla sólo a las etiquetas que queramos. En nuestro ejemplo hemos creado la clase .resaltado que pone el texto en color azul, y lo hemos aplicado a una etiqueta concreta: ``<p class="resaltado">Microsoft es la propietaria de Excel.</p>``.

En este ejemplo, también vemos que para enlazar un archivo .html con un archivo .css se utiliza la siguiente etiqueta: ``<link rel="stylesheet" type="text/css" href="css/ejemplo_2_1.css" />`` que indica que el archivo enlazado se llama ejemplo_2_1.css que se encuentra en la carpeta css.

La hoja de estilo también se puede declarar en el mismo archivo .html, concretamente dentro de la etiqueta head, como se muestra en esta página básica: Incrustar CSS en HTML . Aunque lo recomendable es hacerlo en otro archivo, como acabamos de explicar.

Las reglas de las hojas de estilo están formadas por el selector y entre llaves las declaraciones separadas por punto y coma. Una declaración es un atributo (propiedad) seguido por dos puntos y a continuación el valor de la propiedad.

![Sintaxis CSS](https://www.aulaclic.es/html/graficos/sintaxis_css.svg)

Puedes tener múltiples declaraciones dentro de un conjunto de llaves, y se separan por punto y coma. Los comentarios en CSS se inician con `/*` y se cierran con `*/`.

### Tipos de Selectores

Los selectores son esenciales para aplicar reglas de estilo a elementos HTML. Aquí hay algunos tipos de selectores comunes:

#### 1. Selectores de etiquetas

Puedes seleccionar todos los elementos de una etiqueta específica. Por ejemplo:

```css
h1 {
    color: red;
}
```

Esto aplicará el color rojo a todos los encabezados `h1` en tu página.

#### 2. Selectores de identificadores "id"

Los selectores con identificadores se aplican a elementos que tienen un atributo `id` específico. Por ejemplo:

```css
#mi-elemento {
    color: blue;
}
```

Esto cambiará el color del elemento con `id="mi-elemento"` a azul.

#### 3. Selectores de clases

Los selectores de clase se aplican a elementos que tienen una clase específica. Varias etiquetas pueden compartir la misma clase. Por ejemplo:

```css
.clase1 {
    color: blue;
}

p.clase1 {
    font-style: italic;
}
```

Esto hará que todos los elementos con la clase `clase1` sean azules y los párrafos con esta clase se volverán itálicos.



#### 5. Selectores de hermanos

Puedes seleccionar elementos que son hermanos de otros elementos. Hay varios tipos de selectores de hermanos, como `~` (hermano) y `+` (hermano contiguo). Por ejemplo:

```css
div ~ p {
    color: red;
}

div + p {
    color: blue;
}
```

El primer selector se aplicará a todos los párrafos que son hermanos de un `div`, mientras que el segundo se aplicará solo al primer párrafo hermano contiguo a un `div`.


## Atributos más comunes

### Margen y Relleno (Margin y Padding)

Supongamos que estás decorando una habitación. El **margen** sería como el espacio libre alrededor de tus muebles, mientras que el **relleno** sería como los cojines que hacen que tus muebles sean más cómodos. En CSS, estos dos conceptos son similares.



- **margin**: Establece el espacio alrededor de un elemento.
- **padding**: Establece el espacio dentro de un elemento.


En CSS, utilizamos **valores** para definir propiedades que afectan el aspecto y el diseño de nuestros elementos HTML. Estos valores son como las herramientas en tu caja de pintura que te permiten dar vida a tu sitio web.

- **Unidades de Medida (px, %)**: Puedes especificar el tamaño de elementos usando píxeles (px) o porcentaje (%).

```css
div {
    margin: 20px;
    padding: 10px;
}
```


```css
p {
    font-size: 16px; /* Tamaño de fuente en píxeles */
    width: 50%; /* Ancho del elemento en porcentaje del contenedor */
}
```

### Ejemplo:

```html
<div>
    ¡Este es un cuadro con margen y relleno!
</div>
```

### Color (Color)

En el emocionante mundo del diseño web, los colores son como pinceles que dan vida a tu obra maestra digital. ¿Sabías que en CSS tienes una variedad de formas para definir esos colores? ¡Vamos a explorar algunas de las opciones disponibles!

¡Añadir color a tu página es genial! Elige entre millones de colores y da vida a tus elementos.

- **color**: Define el color del texto.
- **background-color**: Establece el color de fondo de un elemento.

```css
p {
    color: blue;
    background-color: yellow;
}
```

### 1. **Colores en Hexadecimal**

Comencemos con un clásico: los valores hexadecimales. Estos códigos de 6 dígitos son como el ADN de un color. Por ejemplo, `#FF0000` representa el rojo puro. ¿Quieres darle a tu encabezado un toque de pasión? ¡Prueba esto!

```css
h1 {
    color: #FF0000; /* Este texto es rojo apasionado. */
}
```

### 2. **Colores en RGB**

Si te gustan los números, puedes expresar tus colores en términos de valores Red (rojo), Green (verde) y Blue (azul). ¿Eres fan del verde bosque? Así es como lo haces:

```css
p {
    color: rgb(0, 128, 0); /* ¡Este texto es verde bosque! */
}
```

### 3. **Colores en Nombres**

¿Prefieres un enfoque más intuitivo? CSS te permite utilizar nombres de colores predefinidos. Por ejemplo, `red` es rojo y `blue` es azul. ¡Es fácil como el ABC!

```css
a {
    color: blue; /* Este enlace es azul. */
}
```

### 4. **Colores en HSL**

La HSL (Hue, Saturation, Lightness) es como el control de tono, saturación y brillo de una pintura. ¿Quieres un amarillo brillante? Echa un vistazo:

```css
span {
    color: hsl(60, 100%, 50%); /* Este texto es amarillo brillante. */
}
```

### 5. **Colores en RGBA y HSLA**

¿Necesitas transparencia? CSS te tiene cubierto con valores RGBA y HSLA. Puedes ajustar la opacidad con un cuarto valor. Por ejemplo:

```css
div {
    background-color: rgba(255, 0, 0, 0.5); /* Este fondo es rojo semitransparente. */
}
```

### 6. **Colores en Gradients**

Si buscas un aspecto más sofisticado, los degradados son tu mejor amigo. Puedes crear transiciones suaves entre colores o incluso hacerlos deslumbrar con gradientes radiales.

```css
button {
    background: linear-gradient(to right, #FF5733, #6B4226); /* ¡Un botón con un degradado emocionante! */
}
```



### Ejemplo:

```html
<p>Este es un texto en azul con fondo amarillo.</p>
```

### Tamaño (Width y Height)

¿Quieres cambiar el tamaño de tus elementos? ¡Es fácil! Puedes ajustar el ancho y el alto como prefieras.

- **width**: Establece el ancho de un elemento.
- **height**: Define la altura de un elemento.

```css
img {
    width: 200px;
    height: 150px;
}
```

### Ejemplo:

```html
<img src="imagen.jpg" alt="Una imagen" />
```
- **Unidades de Medida (px, %)**: Puedes especificar el tamaño de elementos usando píxeles (px) o porcentaje (%).

```css
p {
    font-size: 16px; /* Tamaño de fuente en píxeles */
    width: 50%; /* Ancho del elemento en porcentaje del contenedor */
}
```

### Cambio del Color de Fondo con `background-color`

Imagina que tienes un lienzo en blanco y quieres pintarlo de un color específico. Con CSS, puedes hacerlo utilizando la propiedad `background-color`. 

#### Ejemplo:

```css
body {
    background-color: #87CEEB; /* Fondo celeste para toda la página */
}
```

### Control de Repeticiones de Fondo

A veces, quieres que tu fondo se repita horizontal o verticalmente para cubrir todo el espacio. CSS te permite hacerlo con las propiedades `background-repeat` y `background-size`.

#### Control de Repetición Horizontal con `repeat-x`

```css
div {
    background-image: url('patron-horizontal.png'); /* Imagen de fondo */
    background-repeat: repeat-x; /* Se repite solo horizontalmente */
}
```

#### Control de Repetición Vertical con `repeat-y`

```css
div {
    background-image: url('patron-vertical.png'); /* Imagen de fondo */
    background-repeat: repeat-y; /* Se repite solo verticalmente */
}
```

### Fuente (Font-Family)

Elegir la fuente correcta puede hacer que tu página se vea más elegante o más divertida.

- **font-family**: Cambia la fuente de texto de un elemento.

```css
h1 {
    font-family: "Comic Sans MS", cursive;
}
```

- **Palabras Clave**: Algunas propiedades, como `font-weight`, utilizan palabras clave como `bold` o `normal`.

```css
strong {
    font-weight: bold; /* Texto en negritas */
}

### Ejemplo:

```html
<h1>¡Hola, mundo!</h1>
```

### Opacidad (Opacity)

¿Quieres que un elemento sea un poco transparente? Puedes jugar con la opacidad.

- **opacity**: Define la transparencia de un elemento.

```css
div {
    opacity: 0.5;
}
```

### Ejemplo:

```html
<div>
    Soy un poco transparente.
</div>
```

----

## Pseudo clases

### Efecto Hover (Hover)

¡Este es uno de los trucos más divertidos! Puedes hacer que tus elementos cambien cuando alguien pasa el mouse sobre ellos.

```css
a:hover {
    color: red;
    text-decoration: underline;
}
```

### Ejemplo:

```html
<a href="#">Pasa el mouse sobre mí</a>
```






---

####  Selectores de pseudoclases

Las pseudoclases se utilizan para aplicar estilos a elementos en estados específicos. Por ejemplo:

```css
a:active {
    color: red;
}

h2:hover {
    color: blue;
}

div:hover {
    background-color: yellow;
}
```

Esto cambiará el color de los enlaces cuando se hacen clic, los encabezados `h2` cuando se pasa el mouse sobre ellos y el fondo de un `div` cuando se pasa el mouse sobre él.

### Pseudoclases, Estilos de los hiperenlaces.

Por defecto un hiperenlace se muestra subrayado y en color azul, sin embargo lo más común es cambiar estos estilos para adaptarlos al diseño de la página. Para hacerlo disponemos de las hojas de estilos y las pseudoclases.

Las pseudoclases son unas palabras claves que se añaden a los selectores en las hojas de estilo para indicar un estado del selector. Respecto al selector hiperenlace tenemos cuatro pseudoclases:

1.- link, es el estado inicial del enlace al cargar la página, no se ha hecho clic sobre él, es decir, no visitado.

2.- visited, visitado, es decir, ya se ha hecho clic anteriormente sobre él.

3.- hover, el cursor está situado encima del enlace.

4.- active, mientras se mantiene pulsado el botón al hacer clic sobre el enlace.

Utilizando las hojas de estilo podemos dar formato a las pseudoclases.

Por ejemplo, si queremos que los hiperenlaces sin visitar aparezcan en color verde oscuro y sin subrayar escribiremos en la hoja de estilo:

```css
a:link { color:darkgreen; text-decoration: none }
```

Para que los enlaces visitados aparezcan en color rojo:

```css
a.:visited { color: red;}
```

Para que al colocar el cursor aparezcan en color morado y en negrita:

```css
a:hover { color: darkviolet; font-weight: bold }
```

Para que en mientras hacemos clic aparezcan en color verde claro:
```css
a:active { color: yellowgreen; }
```

Y el resultado es este:

<style>
a.seudoclases_a:link {
         color: darkgreen;
         text-decoration: none
     }
a.seudoclases_a:visited {
       color: red;
     }
a.seudoclases_a:hover {
       color: darkviolet;
		font-weight: bold
     }
 a.seudoclases_a:active {
       color: yellowgreen;
	 }
</style>

<a class="seudoclases_a" href="#">Antes de hacer clic soy de color verde oscuro, al poner el cursor morado y en negrita, al hacer clic verde claro y después de hacer clic rojo </a>

---

# Listas

Listas desordenadas. 

Definición: La etiqueta `<ul>` define una lista desordenada. Entre la etiqueta de apertura y la de cierre se incluyen los elementos de la lista con la etiqueta `<li>`.

Por ejemplo:

```html
<ul> <li>Plátanos</li> <li>Naranjas</li> <li>Manzanas</li> </ul>
```

Produce este resultado:

- Plátanos
- Naranjas
- Manzanas
- Estilo

Por defecto, delante de cada elemento se pone un disco o punto negro. Podemos cambiar este marcador (o viñeta) modificando el atributo `list-style-type` con hojas de estilo.

Para listas desordenadas, los valores más usuales son:

`none`: No muestra ningún marcador.
`disc`: Muestra un punto negro. Es el valor por defecto.
`circle`: Un círculo vacío.
`square`: Un cuadrado.
Por ejemplo, si aplicamos este estilo `ul { list-style-type: square }` a la lista anterior, obtendremos este resultado:

<ul style="list-style-type: square"> <li>Plátanos</li> <li>Naranjas</li> <li>Manzanas</li> </ul>

También podemos establecer una imagen en lugar de un tipo de marcador, mediante el atributo `list-style-image` con el valor `url(ruta_imagen)`.

Por ejemplo: `<ol style="list-style-image: url(comunes/greenball.gif)">`

<ol style="list-style-image: url(https://www.aulaclic.es/html/comunes/greenball.gif)">  <li>Abrir</li> <li>Editar</li> <li>Guardar</li> <li>Cerrar</li>
</ol>

## Pseudo-elementos: Añadiendo Magia a tu Contenido

Los **Pseudo-elementos** son como varitas mágicas de CSS. Con ellos, puedes modificar el contenido de tu página. Imagina que deseas agregar algo especial antes o después de una etiqueta. Aquí tienes un truco:

```css
p::before {
  content: url(graficos/orangeball.gif);
}

p::after {
  content: ", añadido detrás con CSS";
}
```

Este hechizo dice: "¡Antes de un párrafo, muestra una imagen mágica, y después de un párrafo, agrega un mensaje secreto!". Tus párrafos se transformarán en algo así:

```html
<h2>Contenido con CSS</h2>
<p>Línea uno</p>
<p>Línea dos</p>
```


Puedes personalizar cada párrafo con su propio hechizo, ¡tu imaginación es el límite!

## Selectores de Atributos: El Arte de la Selección

¡Es hora de dominar los **Selectores de Atributos**! Imagina que quieres encontrar etiquetas con atributos especiales. ¡Aquí tienes tus herramientas!

```css
[class] { color: red }
[class="aulaclic"] { color: blue }
[lang|="es"] { color: grey }
[lang~="es-AR"] { color: red }
[href$="es"] { color: green }
[href^="https"] { color: greenyellow }
```

Estos hechizos te permiten seleccionar etiquetas según atributos y valores. Por ejemplo, el resultado para este fragmento de página sería:

```html
<h3 class="aulaclic">Selector de atributos con CSS</h3>
<h3 class="cursos_aulaclic">Subtítulo h3</h3>
<p>Línea uno</p>
<p class="aulaclic">Línea dos</p>
<p class="final">Línea tres</p>
<p lang="es-ES">Línea español España</p>
<p lang="es-AR">Línea español Argentina</p>
<p lang="es-MX">Línea español México</p>
<a class="enlace" href="https://www.aulaclic.es">aulaclic.es</a><br>
<a href="http://www.aulaclic.com">aulaclic.com</a><br>
<a href="https://wwww.aulaclic.org">aulaclic.org</a>
```


Tus hechizos de selección te permiten controlar con precisión la apariencia de tus etiquetas. ¡La magia está en tus manos!

## Dónde Declarar Estilos: ¡La Elección es Tuya!

Aprender a **declarar estilos** es vital para todo aprendiz de CSS. Puedes declarar tus hechizos CSS en varios lugares:

1. **Enlazados en Otro Archivo:** Esta es la opción más recomendable. Crea un archivo .css y enlázalo a tu página web con una etiqueta `link`. Por ejemplo:

```html
<link rel="stylesheet" href="mi_hoja.css">
```

Esto mantiene tus estilos separados del HTML y facilita la reutilización.

2. **Estilos Internos en la Cabecera:** Puedes declarar estilos directamente en la cabecera de tu HTML usando la etiqueta `style`. Esto es útil para estilos específicos de una sola página.

```html
<head>
  <style>
    h2, p { color: red }
  </style>
</head>
```

3. **Dentro de la Etiqueta:** También puedes definir estilos directamente dentro de una etiqueta HTML. Sin embargo, esto es menos común y puede hacer que tu código sea menos mantenible.

```html
<div style="color: red; background-color: white"> Ejemplo </div>
```

Recuerda, la elección es tuya. ¡Elige sabiamente tu forma de conjurar tus estilos!

### Estilo de Borde

Los bordes en CSS son como los marcos que rodean tus elementos HTML, ¡pueden darles un aspecto completamente nuevo! Comencemos explorando cómo cambiar el estilo de los bordes con la propiedad `border-style`.

### Cambio del Tipo de Borde con `border-style`

Puedes definir el tipo de borde que deseas para tus elementos, ya sea un borde punteado, un borde sólido o incluso un borde oculto. Aquí tienes algunos ejemplos:

```css
div {
    border-style: dotted; /* Borde punteado */
}

p {
    border-style: solid; /* Borde sólido */
}

a {
    border-style: hidden; /* Borde oculto (invisible) */
}
```

## Grosor de Borde

No solo puedes cambiar el estilo de los bordes, sino también su grosor. La propiedad `border-width` te permite especificar cuán grueso o delgado deseas que sea el borde.

### Control del Grosor de Borde con `border-width`

```css
button {
    border-width: 2px; /* Borde de 2 píxeles de grosor */
}

input {
    border-width: 5px; /* Borde de 5 píxeles de grosor */
}

img {
    border-width: 1px; /* Borde de 1 píxel de grosor */
}
```

## Bordes Predefinidos

Si no quieres especificar un grosor exacto, puedes utilizar valores predefinidos como "fino", "medio" o "grueso" para asignar bordes en CSS.

### Utilización de Bordes Predefinidos

```css
h1 {
    border-width: thin; /* Borde fino */
}

h2 {
    border-width: medium; /* Borde medio */
}

h3 {
    border-width: thick; /* Borde grueso */
}
```

## Redondeo de Bordes

¿Quieres que tus bordes tengan un toque especial? La propiedad `border-radius` te permite redondear los bordes de los elementos, dándoles un aspecto más suave.

### Redondeo de Bordes con `border-radius`

```css
div {
    border-radius: 10px; /* Bordes redondeados con un radio de 10 píxeles */
}

button {
    border-radius: 20%; /* Bordes redondeados con un radio del 20% del tamaño del elemento */
}

p {
    border-radius: 50px 20px; /* Bordes redondeados con radios distintos para las esquinas */
}
```
### Filtros de Imagen

Ahora, profundicemos en algunos filtros de imagen comunes que puedes aplicar a tus elementos en CSS.

### Saturación

La saturación es como el botón de color en tu televisor. Puedes aumentar o disminuir la saturación de una imagen para que se vea más o menos vibrante.

```css
img {
    filter: saturate(200%); /* Aumenta la saturación al 200% */
}

div {
    filter: saturate(50%); /* Disminuye la saturación al 50% */
}
```

### Escala de Grises

El filtro `grayscale` convierte una imagen a blanco y negro, como en las películas antiguas. Puedes ajustar el valor para controlar el grado de blanco y negro.

```css
img {
    filter: grayscale(100%); /* Convierte la imagen completamente a blanco y negro */
}

div {
    filter: grayscale(50%); /* Hace que la imagen sea parcialmente en blanco y negro */
}
```

### Brillo

¿Quieres que tu imagen brille como una estrella? Con el filtro `brightness`, puedes aumentar o disminuir el brillo de una imagen.

```css
img {
    filter: brightness(150%); /* Aumenta el brillo al 150% */
}

div {
    filter: brightness(50%); /* Disminuye el brillo al 50% */
}
```



### Uso de CSS transforms

Al modificar las coordenadas del espacio, las transformaciones CSS permiten cambiar la posición del contenido afectado sin interrumpir el flujo normal. Se implementan haciendo uso de un conjunto de propiedades CSS que permiten aplicar transformaciones lineales a elementos HTML. Estas transformaciones incluyen rotar, torcer, escalar y desplazar en plano o en un espacio 3D.

### Propiedades de las transformaciones CSS

Se usan dos propiedades principalmente para definir las transformaciones CSS: `transform` y `transform-origin`

`transform-origin`

Especifica la posición de origen que se usará para la transformación. Por defecto es el lado superior izquierdo del elemento. Esta posición es usada por varias transformaciones como rotar, escalar o torcer ya que necesitan de este punto especifico como parámetro.

`transform`
Especifica la transformación a realizar sobre el elemento. Se define como una lista separada por espacios de transformaciones que se aplican en orden una después de la otra, tal y como es requerido por la operación de composición.

### Ejemplos
Esta es una imagen inalterada del logo de MDN:

![MDN Logo](https://developer.mozilla.org/es/docs/Web/CSS/CSS_transforms/Using_CSS_transforms/logo.png)

### Ejemplo: Rotando
Aquí está el logo MDN en un iframe rotado 90 grados desde su esquina inferior izquierda.

```HTML
<img
  style="transform: rotate(90deg);
            transform-origin: bottom left;"
  src="logo.png" />
```
<img
  style="transform: rotate(90deg);
            transform-origin: bottom left;"
  src="https://developer.mozilla.org/es/docs/Web/CSS/CSS_transforms/Using_CSS_transforms/logo.png" />
<br>
<br>
<br>
<!-- <br> 
<br> -->

### Ejemplo: Torciendo y desplazando
Aquí está el logo MDN torcido 10 grados y desplazado 150 pixels en el eje X.

```HTML
<img
  style="transform: skewx(10deg) translatex(150px);
            transform-origin: bottom left;"
  src="logo.png" />
```
<img
  style="transform: skewx(10deg) translatex(150px);
            transform-origin: bottom left;"
  src="https://developer.mozilla.org/es/docs/Web/CSS/CSS_transforms/Using_CSS_transforms/logo.png" />




-----

## Orden de Aplicación: La Resolución de Colisiones

Los estilos son como encantamientos mágicos que pueden chocar. La **resolución de colisiones** es vital. Hay tres reglas a seguir:

1. **Importancia:** Si un estilo tiene `!important`, prevalece sobre los demás. ¡Este es el hechizo más poderoso!

2. **Especificidad:** Si no hay `!important`, el estilo más específico gana. Las etiquetas internas ganan a las clases, que ganan a las etiquetas.

3. **Orden del Código:** Si todas las demás reglas son iguales, gana el estilo que se definió más tarde.

Dominar estas reglas es clave para evitar resultados inesperados.

## La Herencia: Transmitiendo Estilos de Padres a Hijos

Imagina el **CSS** como una tradición mágica que se pasa de padres a hijos. En este caso, las etiquetas hijas heredan los estilos de sus etiquetas padres. Un ejemplo claro es el siguiente:

```css
body {
  font-size: 16px; /* Tamaño de fuente para todo el cuerpo */
}

h1 {
  /* h1 heredará el tamaño de fuente 16px del body */
}

p {
  /* Los párrafos también heredarán el tamaño de fuente 16px del body */
}
```

En este caso, tanto los títulos (`<h1>`) como los párrafos (`<p>`) heredan el tamaño de fuente definido en el `<body>`. La herencia es como la magia de la familia, ¡se transmite de una generación de etiquetas a la siguiente!

Puedes modificar estos estilos más tarde si deseas un tamaño de fuente diferente para tus títulos o párrafos.

## Controlando la Herencia: Atributos que No se Heredan

No todos los atributos se heredan, y aquí es donde entra en juego tu control. Imagina que el atributo `border` (borde) no se hereda, lo que significa que si lo defines en el `<body>`, ¡no verás bordes alrededor de todas tus etiquetas HTML!

```css
body {
  border: 1px solid #000; /* ¡No heredado por las etiquetas hijas! */
}

div {
  /* ¡El borde no se hereda en las etiquetas div! */
}

table {
  /* El borde no se hereda en las tablas tampoco. */
}
```

La idea es que no querrás un borde alrededor de toda tu página web cuando defines un borde en el `<body>`. En cambio, esta propiedad se utiliza para crear un borde alrededor de la página en sí, no de todos los elementos dentro de ella.

¡Es hora de tomar el control de tus estilos y elegir qué atributos deseas heredar y cuáles prefieres definir directamente en tus etiquetas!


-------------

# Modelo de Caja en CSS

En CSS, el **Modelo de Caja** es un concepto fundamental que te ayuda a comprender cómo se representan los elementos HTML en tu página web. Cada elemento HTML se considera como una caja rectangular que incluye contenido, relleno, borde y margen. Este modelo es esencial para controlar la presentación y el diseño de tu página.

## Componentes del Modelo de Caja

El **Modelo de Caja** se compone de cuatro partes principales:

### 1. Contenido (Content)

El contenido es el interior de la caja y puede variar según el tipo de elemento HTML. Puede ser texto, imágenes, listas u otras cajas anidadas. En nuestros ejemplos, el contenido está representado por el rectángulo gris.

![Contenido](https://www.aulaclic.es/html/graficos/modelo_cajas1.svg)

### 2. Padding (Relleno)

El relleno es el espacio transparente entre el contenido y el borde de la caja. Puedes pensar en ello como un margen interior. El relleno se define mediante la propiedad **padding** y está representado por las dobles flechas azules en nuestros ejemplos.

### 3. Border (Borde)

El borde es una línea que rodea el relleno y, por lo tanto, también al contenido. Puede ser visible o invisible y se define con la propiedad **border**. En nuestros ejemplos, el borde está representado por una línea punteada roja.

### 4. Margin (Margen)

El margen es un espacio transparente rectangular que rodea el borde y separa la caja de otros elementos adyacentes. Al igual que el relleno y el borde, el margen puede ser de grosor cero. En nuestros ejemplos, el margen se representa con dobles flechas verdes.

## Valores por Defecto

Por defecto, los rectángulos del modelo de caja son invisibles. El atributo **border** tiene un valor inicial de cero, lo que significa que es invisible. El rectángulo que rodea el contenido no se puede dibujar y tampoco existen valores por defecto para el color de fondo y la imagen de fondo.

Sin embargo, los valores por defecto para el **margin** y el **padding** pueden variar según las etiquetas HTML y los navegadores. Por ejemplo, la etiqueta **párrafo (p)** tiene un valor por defecto de 1em para los márgenes superior e inferior, y un valor de cero para los márgenes derecho e izquierdo. Esto evita que los párrafos se peguen entre sí.

## Ejemplo de Margin

Vamos a ver un ejemplo para ilustrar cómo funciona el **margin**:

```html
<p style="margin: 0; background-color: white;">
Párrafo uno. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
</p>

<p style="margin: 0; background-color: white;">
Párrafo dos. Ahora sí hay diferencia entre un párrafo y el salto de línea. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
</p>
```

En este ejemplo, establecemos el **margin** de ambos párrafos en cero, lo que significa que no hay espacio entre ellos. Sin embargo, si quitamos el valor del **margin** o lo configuramos de manera diferente, verás que los márgenes superiores e inferiores afectan a la separación entre los párrafos.

## Márgenes Adyacentes

Los márgenes superiores e inferiores de elementos adyacentes no se suman; en su lugar, se aplica el valor más grande. Por ejemplo, si un elemento tiene un **margin-bottom** de 20px y el elemento adyacente inferior tiene un **margin-top** de 15px, el espacio entre ellos será de 20px, no de 35px.

## Margen Negativo

También puedes especificar márgenes negativos, lo que resulta en que las cajas se superpongan. Esto puede ser útil en ciertos casos, pero debes tener cuidado para evitar solapar contenidos.

## Ejemplo de Padding

El **padding** define el espacio entre el contenido y el borde. Aquí tienes un ejemplo:

```css
.mi-caja {
    padding: 10px; /* Aplica un relleno de 10px a todos los lados */
    border: 1px solid #000; /* Añade un borde de 1px sólido negro */
    background-color: #f0f0f0; /* Agrega un color de fondo gris */
}
```

En este ejemplo, hemos creado una caja con un relleno de 10px. Este espacio rodea el contenido dentro del borde. También hemos agregado un borde y un color de fondo para ilustrar cómo funciona el **padding** en relación con el contenido.

### **Cálculo de la Anchura y Altura en CSS**

El cálculo de la anchura y altura en CSS es un pilar fundamental para cualquier diseño web. Pero, ¿sabías que estos valores no siempre son lo que parecen? Veámoslo a través de un ejemplo:

Imagina que tienes un div con las siguientes propiedades:

```css
div {
  width: 200px;
  border-width: 5px;
  padding: 20px;
  margin: 100px;
}
```

¿Cuál crees que es el ancho total de este div? La respuesta no es tan evidente como parece. En realidad, deberías sumar el contenido, el relleno, el borde y el margen. Esto nos lleva a un ancho total de 450px. Para simplificar este proceso, utilizamos la propiedad `box-sizing`. Echemos un vistazo a esta propiedad.

### **La Propiedad `box-sizing` al Rescate**

La propiedad `box-sizing` en CSS te permite controlar cómo se calculan las dimensiones de un elemento. Tiene dos valores clave: `content-box` y `border-box`. Aquí hay un ejemplo que ilustra la diferencia:

- `content-box`: En este caso, el ancho se calcula considerando solo el contenido, no el relleno ni el borde.

```css
div {
  box-sizing: content-box;
  width: 200px;
  border-width: 5px;
  padding: 20px;
  margin: 100px;
}
```

El ancho total sigue siendo 450px, ya que el contenido, el relleno, el borde y el margen no se mezclan.

- `border-box`: Con este valor, el ancho se calcula teniendo en cuenta el contenido, el relleno y el borde.

```css
div {
  box-sizing: border-box;
  width: 200px;
  border-width: 5px;
  padding: 20px;
  margin: 100px;
}
```

El ancho total en este caso es de 400px, ya que el contenido, el relleno, el borde y el margen se combinan en un solo valor. ¡Sencillez y precisión!

**Sección 3: Controlando el Desbordamiento con `overflow`**

El desbordamiento de contenido puede ser un problema común en el diseño web. Para manejarlo, utilizamos la propiedad `overflow`. Veamos los cuatro valores posibles:

- `visible`: El contenido desbordante se superpone al siguiente elemento.

```css
div {
  overflow: visible;
}
```

- `hidden`: El contenido desbordante se oculta.

```css
div {
  overflow: hidden;
}
```

- `scroll`: Se muestran barras de desplazamiento para explorar el contenido desbordante.

```css
div {
  overflow: scroll;
}
```

- `auto`: Barras de desplazamiento aparecen solo cuando es necesario.

```css
div {
  overflow: auto;
}
```

Dominar el Modelo de Caja CSS y el control del desbordamiento es esencial para el diseño web. Con ejemplos claros y prácticos, te hemos mostrado cómo entender y aplicar estos conceptos. Ahora, estás listo para crear diseños web atractivos y funcionales. ¡Sigue aprendiendo y diseñando!


### ¿Qué es Flexbox?

Flexbox es como una varita mágica que hace que tus elementos HTML se alineen y se distribuyan de manera armoniosa en el espacio. Imagina que tienes una caja llena de elementos y quieres organizarlos de una manera ordenada y flexible. ¡Flexbox te permite hacerlo de manera sencilla!

## La Propiedad `flex`

La propiedad `flex` es la clave del poder de Flexbox. Con esta propiedad, puedes controlar cómo un elemento ocupa el espacio disponible y cómo se redimensiona para adaptarse a las diferentes pantallas y dispositivos.

### ¡Exploremos Algunos Ejemplos!

#### Ejemplo 1: Distribución Equitativa

Imagina que tienes tres cajas y deseas que ocupen el espacio horizontal disponible de manera equitativa. La propiedad `flex` es tu amiga aquí.

```css
.container {
    display: flex;
}

.box {
    flex: 1;
}
```

Con este código, cada caja dentro del contenedor se expandirá para llenar el espacio horizontal de manera equitativa. ¡Magia, verdad?

#### Ejemplo 2: Tamaño Flexible

¿Qué pasa si quieres que una caja sea el doble de ancha que las demás? ¡Flexbox lo hace fácil!

```css
.container {
    display: flex;
}

.box {
    flex: 1; /* Todas las cajas ocupan el mismo espacio */
}

.box.special {
    flex: 2; /* Esta caja es el doble de ancha */
}
```

En este caso, las cajas con la clase `.special` serán el doble de anchas que las demás. ¡Flexbox te da el control!