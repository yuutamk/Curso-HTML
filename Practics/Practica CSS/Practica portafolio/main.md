¡Hola, futuros desarrolladores web! En este blog, vamos a explorar juntos el emocionante mundo de la creación de páginas web a través del código HTML de un portafolio creativo. Vamos a desglosar cada parte y su importancia en la construcción de un sitio web sorprendente.

**Paso 1: Comienzo del Documento HTML**

```html
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi Pagina</title>
</head>
<body>
    <!-- Aquí irá nuestro código HTML -->
</body>
</html>
```

Comenzamos con la estructura básica de un documento HTML, estableciendo el idioma y proporcionando la base para nuestra página.

**Paso 2: Sección `<head>` - Metadatos y Estilos**

```html
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Mi portafolio">
    
    <!-- Importar iconos -->
    <link rel="shortcut icon" href="./assets/ico/icon-sofi.ico" type="image/x-icon">
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    
    
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">

    <!-- stilos css -->
    <link rel="stylesheet" href="./styles/reset.css">
    <link rel="stylesheet" href="./styles/global.css">
    <link rel="stylesheet" href="./styles/header.css">
    <link rel="stylesheet" href="./styles/hero.css">
    <link rel="stylesheet" href="./styles/about.css">
    <link rel="stylesheet" href="./styles/skills.css">
    <link rel="stylesheet" href="./styles/form.css">
    <link rel="stylesheet" href="./styles/footer.css">

    <title>Mi pagina</title>
</head>
```

En la sección `<head>`, configuramos metadatos importantes como la codificación, la descripción de la página, y enlaces a fuentes y hojas de estilos para darle formato.

**Paso 3: Sección `<body>` - Contenido de la Página**

```html
<body>
    <header class="header">
        <!-- Contenido del encabezado -->
    </header>

    <main>
        <!-- Secciones principales -->
        <section class="hero">
            <!-- Contenido del héroe -->
        </section>
        <!-- ... Otras secciones -->
    </main>

    <footer class="footer">
        <!-- Contenido del pie de página -->
    </footer>
</body>
```

Dentro de `<body>`, creamos la estructura principal de nuestra página. Esto incluye el encabezado, secciones para el contenido principal, y el pie de página.

**Paso 4: Sección de Encabezado (`<header>`)**

```html
<body>
    <header class="header">
            <a href="#" class="header__link">
                <img class="header__img" src="./assets/ico/pingu-sofi.ico" alt="logo">
                <h2 class="header__text">Alek Posadas</h2>
            </a>
        <nav class="menu">
            <ul class="menu__list">
                <li class="menu__link"><a href="#skills">Skills</a></li>
                <li class="menu__link"><a href="#about">Portfolio</a></li>
                <li class="menu__link"><a href="#contact">Contacto</a></li>
            </ul>    
        </nav>
    </header>
```

El encabezado (`<header>`) contiene un enlace al inicio con un logo (`<img>`) y un nombre (`<h2>`), junto con una sección de navegación (`<nav>`) que tiene una lista de enlaces (`<ul>`, `<li>`) a diferentes secciones de la página.

**Paso 5: Sección de Hero dentro de main (`<section class="hero">`)**

```html
<main>
        <section class="hero">
            <div class="hero__container">
                <h1 class="hero__title">Alek Posadas</h1>
                <h3 class="hero__description">Frontend developer</h3>
            </div>
            <img class="hero__image" src="./assets/img/foto.jpg" alt="foto de perfil">
        </section>

       
```

La sección del héroe (`<section class="hero">`) destaca el nombre y la descripción del propietario del portafolio, junto con una imagen representativa.

**Paso 6: Otras Secciones y Contenido**

```html
        <section class="aboutme" id="about">
            <div class="about__media">
                <img src="./assets/img/foto-sin-fondo.png" alt="" class="about__image">
            </div>
            <div class="about__container">
                <h2 class="about__title subtitle">I love what I do 😁💓</h2>
                <p class="about__content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum consectetur tenetur obcaecati ad distinctio at ab laboriosam harum consequatur et maiores sunt vel blanditiis, facilis quibusdam facere? Fugiat, aut animi?</p>
                <div class="about__social">
                    <iconify-icon class="about__icon" icon="skill-icons:instagram"></iconify-icon>
                    <iconify-icon class="about__icon"  icon="logos:twitter"></iconify-icon>
                    <iconify-icon class="about__icon"  icon="entypo-social:github" style="color: #071952;"></iconify-icon>
                </div>
            </div>
        </section>
```

Dentro del `<main>`, existen otras secciones, como "Acerca de mí", "Habilidades", "Contacto", que contienen diferentes tipos de contenido. Esta sección presenta información sobre el propietario del portafolio, incluyendo una imagen, un título, un párrafo descriptivo y enlaces a redes sociales.

**Paso 7: Sección "Habilidades" (`<section class="skills">`)**

```html
<section class="skills" id="skills">
            <h2 class="skills__title subtitle">Skills</h2>
            <div class="cards__container">
                <div class="card">
                    <iconify-icon class="card__icon" icon="logos:html-5"></iconify-icon>
                    <h3 class="card__description">HTML</h3>
                </div>
                <div class="card">
                    <iconify-icon class="card__icon" icon="logos:css-3"></iconify-icon>
                    <h3 class="card__description">CSS</h3>
                </div>
                <div class="card">
                    <iconify-icon class="card__icon card__icon--javascript" icon="vscode-icons:file-type-js-official" ></iconify-icon>
                    <h3 class="card__description">JavaScript</h3>
                </div>
            </div>
        </section>
```

En esta sección se muestran las habilidades del propietario, utilizando tarjetas con iconos y títulos representativos para cada habilidad.

**Paso 8: Sección "Contacto" (`<section class="contact">`)**

```html
<section class="contact" id="contact">
            <form class="form" action="#">
                <h2 class="form__title subtitle">Contact</h2>
                <label class="form__label" for="name">Nombre</label>
                <input class="form__input" id="name" type="text" name="name" placeholder="Escribe tu Nombre">
                <label class="form__label" for="email">Correo electrónico</label>
                <input class="form__input" id="email" type="email" name="email" placeholder="Tu correo electrónico" id="">
                <label class="form__label" for="message">Mensaje</label>
                <textarea class="form__textarea" id="message" name="message" id="" cols="30" rows="10" placeholder="Escribe tu mensaje"></textarea>
                <div class="container__btn">
                    <input class="form__btn" type="submit" value="Enviar">

                </div>
            </form>
        </section>            
    </main>
```

Aquí se incluye un formulario de contacto con campos para nombre, correo electrónico, mensaje, y un botón de envío.

**Paso 7: Sección de Pie de Página (`<footer>`)**

```html
    <footer class="footer">
        <div class="footer__container footer__container--logo">
            <a class="footer__link" href="#">
                <img class="footer__img" src="./assets/ico/neko.ico" alt="logo">
                <h2 class="footer__logo">Alek Posadas</h2>
        </div>
        <div  class="footer__container footer__container--links">
            <ul class="footer__list">
                <li class="footer__element"><a class="footer__link" href="#">Acerca de mi</a></li>
                <li class="footer__element"><a class="footer__link" href="#">Contacto</a></li>
                <li class="footer__element"><a class="footer__link" href="#">Referencias</a></li>
            </ul>
        </div>
        <div class="footer__container footer__container--social">
            <iconify-icon class="footer__icon footer__icon-github" icon="devicon:github" width="50"></iconify-icon>
            <iconify-icon class="footer__icon" icon="devicon:linkedin" width="50"></iconify-icon>
            <iconify-icon class="footer__icon" icon="skill-icons:twitter" width="50"></iconify-icon>
        </div>
    </footer>
</body>
</html>
```

La sección del pie de página (`<footer>`) contiene tres secciones: la sección de logo, enlaces adicionales y la sección de enlaces a redes sociales.


este es el resultado final:

![Resultado](../Practica%20portafolio/src/img/web%20sin%20estilo.jpg)

Ahora continuamos con la segunda parte que es el CSS
[Aquí](./CSS-basicos.md):