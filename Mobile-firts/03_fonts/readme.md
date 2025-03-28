**¿Cómo conocer el tipo de fuente en Figma?**

Puede que el equipo de diseño ya te haya entregado un informe con estos datos, pero si no es así, puedes reconocer la fuente desde el proyecto en Figma. Para ello:

- Haz clic sobre la fuente a inspeccionar.
- Sobre el panel derecho, en la pestaña inspeccionar verás los detalles como tamaño, grosor y tipo de fuente. Debes tomar en cuenta todos ellos al momento de buscarlas.

![como saber el tipo de fuente en figma](https://static.platzi.com/media/articlases/Images/image%28138%29.png)

De esta manera comprobamos todos los textos para asegurarnos de la cantidad de fuentes utilizadas.

**¿Cómo descargar las fuentes para un proyecto?**

Como recordarás, una de las mejores páginas para encontrar fuentes es [Google Fonts](https://fonts.google.com/). Para descargar las de nuestro proyecto, hacemos lo siguiente:

1. Copia el nombre encontrado en la pestaña “Inspeccionar” de la fuente seleccionada. Haz clic sobre la fuente.

    ![como descargar fuentes](https://static.platzi.com/media/articlases/Images/image%28139%29.png)

2. Encontrarás varios grosores de fuentes. Vamos a seleccionarlos con base a los hallados en la inspección de nuestro proyecto haciendo clic en “Seleccionar este estilo”. Hacemos los mismos pasos con la otra fuente en caso de ecnontrar.

    ![pasos para descargar fuentes en google fonts](https://static.platzi.com/media/articlases/Images/image%28140%29.png)

3. Una vez seleccionadas las fuentes y grosores que vamos a usar, seleccionamos la pestaña “Embeber” del panel derecho. Copiamos el link que nos da Google Fonts.

    ![google fonts descargar fuentes](https://static.platzi.com/media/articlases/Images/image%28142%29.png)

**Cómo insertar fuentes en un proyecto**

Para linkear el enlace que copiamos en el paso anterior, abrimos nuestro archivo index.html y vamos hasta hasta la sección del head. Pegamos el enlace justo debajo de la etiqueta title.

El enlace generado para el proyecto en que estamos trabajando es el siguiente:

```html
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Inter:wght@300;500&display=swap" rel="stylesheet">
```

**Nota:** El tag de link con el valor de atributo **rel=“proconnect”** permite notificarle al navegador que la página requiere establecer una conexión a otro dominio y que esta debe realizarse de la forma más rápida posible. De esta forma cuando el navegador requiera hacer uso de los recursos (en este caso los tipos de fuente), la descarga de recursos será más rápido porque la conexión ya existirá de forma previa. Esto permite mejorar el performance de la página.

Recuerda que Google mismo te indica, justo debajo del link que te da, cómo llamar la familia de la fuente que seleccionaste.

![image.png](https://static.platzi.com/media/articlases/Images/image%28143%29.png)

¡Y listo! Ya podemos empezar empezar a crear nuestros primeros estilos.

