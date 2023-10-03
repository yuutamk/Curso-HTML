## Caracteres especiales

Cuando escribimos en lenguaje HTML, los caracteres `<` y `>` son dos caracteres especiales que indican el inicio y el fin de una etiqueta. Si deseamos insertar estos caracteres como texto, debemos escribir el nombre que los representa:

| Carácter | Representación |
|----------|----------------|
| `<`      | `&lt;`         |
| `>`      | `&gt;`         |

Como hemos visto anteriormente, el espacio en blanco se representa como `&nbsp;`.

Dependiendo del sistema de codificación que utilicemos y de la configuración del servidor web, existen otros caracteres que no se visualizan correctamente. Se recomienda utilizar la codificación UTF-8 colocando esta etiqueta `<meta charset="utf-8" />` en la sección `<head>` de la página web.

Si en nuestra página web utilizamos la codificación ISO-8859-1, como era habitual hasta hace pocos años (2014), habrá caracteres que no se verán bien. Es el caso de la `ñ` y las letras acentuadas. Por lo tanto, al igual que ocurre con otros caracteres especiales, para insertarlos como texto, deberíamos escribir el nombre que los representa.

A continuación, se muestra una lista con algunos caracteres y el nombre con el que deben ser representados:

| Carácter | Representación |
|----------|----------------|
| á        | `&aacute;`     |
| Á        | `&Aacute;`     |
| é        | `&eacute;`     |
| É        | `&Eacute;`     |
| í        | `&iacute;`     |
| Í        | `&Iacute;`     |
| ó        | `&oacute;`     |
| Ó        | `&Oacute;`     |
| ú        | `&uacute;`     |
| Ú        | `&Uacute;`     |
| ñ        | `&ntilde;`     |
| Ñ        | `&Ntilde;`     |
| ™        | `&#153;`      |
| €        | `&euro;`       |
| $        | `&#36;`        |
| £        | `&libra;`      |
| ¥        | `&yen;`        |
| ç        | `&ccedil;`     |
| Ç        | `&Ccedil;`     |
| ü        | `&uuml;`       |
| Ü        | `&Uuml;`       |
| &        | `&amp;`        |
| ¿        | `&iquest;`     |
| ¡        | `&iexcl;`      |
| "        | `&quot;`       |
| ·        | `&middot;`     |
| º        | `&ordm;`       |
| ª        | `&ordf;`       |
| ¬        | `&not;`        |
| ©        | `&copy;`       |
| ®        | `&reg;`        |

Puedes ver una lista completa de caracteres en [este enlace de Wikipedia](https://es.wikipedia.org/wiki/ISO/IEC_8859-1#C%C3%B3digos).

Con los caracteres Unicode, podemos representar muchos símbolos, como flechas (←), símbolos matemáticos (≃) e incluso dibujos (👧) y banderas. Aquí te dejo algunas referencias:

<svg xmlns="http://www.w3.org/2000/svg" width="200" height="200">
        <!-- Rectángulo verde -->
        <rect x="0" y="0" width="33%" height="70%" fill="#006847" />
        <rect x="33%" y="0" width="34%" height="70%" fill="#FFFFFF" />
        <rect x="67%" y="0" width="33%" height="70%" fill="#CE1126" />
        <circle cx="50%" cy="35%" r="10%" fill="#54463e" />
</svg>

```html
<svg xmlns="http://www.w3.org/2000/svg" width="200" height="200">
        <!-- Rectángulo verde -->
        <rect x="0" y="0" width="33%" height="70%" fill="#006847" />
         <!-- Rectángulo blanco -->
        <rect x="33%" y="0" width="34%" height="70%" fill="#FFFFFF" />
        <!-- Rectángulo rojo -->
        <rect x="67%" y="0" width="33%" height="70%" fill="#CE1126" />
        <!-- Escudo -->
        <circle cx="50%" cy="35%" r="10%" fill="#54463e" />
</svg>
```

- Lista de símbolos gráficos Unicode: [Lista de símbolos gráficos Unicode](https://unicode.org/charts/)
- Lista de emoticonos y dibujos: [Lista de emoticonos y dibujos Unicode](https://unicode.org/emoji/charts/full-emoji-list.html)

