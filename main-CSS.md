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


### Reglas de arroba

CSS también incluye reglas especiales que comienzan con el símbolo "@". Algunas de las más utilizadas son:

1. `@charset`: Define la codificación de caracteres en la hoja de estilo.
2. `@import`: Importa una hoja de estilo dentro de otra.
3. `@media`: Define reglas específicas para diferentes tipos de medios, como pantallas, impresoras y más.

### Media Queries

Las Media Queries son una característica emocionante de CSS3 que nos permite adaptar el diseño de una página web a diferentes dispositivos y tamaños de pantalla. Esto es crucial para garantizar que tu sitio se vea bien en una variedad de dispositivos, desde computadoras de escritorio hasta teléfonos móviles.

Las Media Queries permiten detectar el tipo de dispositivo y sus características, como ancho, altura y orientación, y aplicar reglas específicas en consecuencia. Por ejemplo, si la pantalla es pequeña, puedes ajustar el tamaño de la fuente para que sea más legible.

```css
@media screen and (max-width: 640px) {
  body {
    font-size: 16px;
  }
}
```

Este hechizo CSS dice: "Si la pantalla es de ancho igual o menor a 640 píxeles, entonces aumenta el tamaño de fuente del cuerpo a 16 píxeles". ¡Tu página web se adaptará automáticamente a dispositivos más pequeños!

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

#### 4. Selectores de pseudoclases

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

---

# Pseudoclases.Estilos de los hiperenlaces.

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