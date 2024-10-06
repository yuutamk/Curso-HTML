Aquí tienes el texto transformado en una tabla de contenido dividida en tres columnas: etiquetas, parámetros y para qué sirve:

| Etiqueta       | Descripción                                            | Atributos  principales                      |
| -------------- | ----------------------------------------------------- | ---------------------------------------- |
| !DOCTYPE       | Tipo de documento (versión de HTML empleada)          |                                            |
| html           | Engloba todo el documento                              | lang                                       |
| <!-- ... -->   | Comentario (sólo visible en el código fuente)         |                                            |

**Metadatos**

| Etiqueta   | Descripción                                         | Atributos principales                     |
| ---------- | -------------------------------------------------- | --------------------------------------- |
| head       | Delimita el encabezado del documento               |                                           |
| title      | Título del documento (se muestra en la pestaña del navegador) |                                           |
| base       | URI base para direcciones relativas                | href, target                              |
| link       | Enlace a otros archivos (hoja de estilo, etc.)     | href, rel, media, type, title            |
| meta       | Metainformación sobre el documento                 | name, content, charset                   |
| style      | Hoja de estilo incluida en el documento            | type, title                               |

**Secciones**

| Etiqueta   | Descripción                                  | Atributos principales |
| ---------- | ------------------------------------------- | ---------------------- |
| body       | Delimita el cuerpo del documento            |                        |
| article    | Artículo                                     |                        |
| section    | Sección                                      |                        |
| nav        | Navegación                                   |                        |
| aside      | Lateral                                      |                        |
| h1 a h6    | Encabezado (de nivel 1 a 6)                 |                        |
| hgroup     | Grupo de encabezados                         |                        |
| header     | Cabecera                                     |                        |
| footer     | Pie                                          |                        |
| address    | Dirección (información sobre el autor)       |                        |

**Bloques de contenido**

| Etiqueta     | Descripción                                  | Atributos principales |
| ------------ | ------------------------------------------- | ---------------------- |
| p            | Párrafo                                      |                        |
| hr           | Separador                                    |                        |
| div          | División                                     |                        |
| blockquote   | Cita larga (que incluye varios párrafos)    | cite                   |
| pre          | Texto preformateado                          |                        |
| main         | Principal                                    |                        |
| figure       | Ilustración                                 |                        |
| figcaption   | Pie de ilustración                           |                        |

**Texto (en línea)**

| Etiqueta   | Descripción                                  | Atributos principales |
| ---------- | ------------------------------------------- | ---------------------- |
| br         | Salto de línea                               |                        |
| wbr        | Posible salto de línea                       |                        |
| a          | Hiperenlace                                  | href, target, download, rel, type |
| span       | Contenedor de texto genérico                 |                        |
| strong     | Importante                                   |                        |
| em         | Énfasis                                      |                        |
| sub        | Subíndice                                    |                        |
| sup        | Superíndice                                  |                        |
| abbr       | Abreviatura                                  | title                  |
| b          | Atención                                     |                        |
| cite       | Obra                                         |                        |
| data       | Datos                                        | value                  |
| dfn        | Definición                                   | title                  |
| kbd        | Teclado                                      |                        |
| i          | Tecnicismo                                   |                        |
| mark       | Resaltado añadido posteriormente, no en el original |                        |
| q          | Cita                                         | cite                   |
| s          | Incorrecto                                   |                        |
| small      | Comentario                                   |                        |
| time       | Fecha y hora                                 | datetime               |
| u          | Sonido inarticulado                          |                        |
| code       | Código (de programa de ordenador)             |                        |
| samp       | Salida (de programa de ordenador)             |                        |
| var        | Variable (de programa de ordenador)           |                        |
| bdo        | Dirección de escritura                        | dir                    |
| bdi        | Ignorar dirección de escritura                | dir                    |

**Modificaciones**

| Etiqueta   | Descripción                                  | Atributos principales |
| ---------- | ------------------------------------------- | ---------------------- |
| ins        | Texto insertado                              | cite, datetime         |
| del        | Texto borrado                                | cite, datetime         |

**Contenido incrustado**

| Etiqueta   | Descripción                                  | Atributos principales |
| ---------- | ------------------------------------------- | ---------------------- |
| picture    | Imagen múltiple para diferentes resoluciones o densidades |                        |
| img        | Imagen                                       | alt, src, usemap, ismap, width, height |
| iframe     | Marco incrustado en el documento              | src, srcdoc, name, sandbox, width, height |
| embed      |                                             | src, type, width, height |
| object     | Objeto                                       | data, type, width, height |
| param      | Parámetro para <objeto>                      | name, value            |
| video      |                                             | src, poster, preload, autoplay, loop, muted, controls, width, height |
| audio      |                                             | src, preload, autoplay, loop, muted, controls |
| source     | Origen de <img>, <audio> o <video>           | src, type               |
| track      |                                             | kind, src, srclang, label, default |
| map        | Mapa de imagen                               | name                   |
| area       | Área en mapa de imagen                       | alt, coords, href, hreflang, rel, shape, target, type |

**Listas (bloque de contenido)**

| Etiqueta   | Descripción                                  | Atributos principales |
| ---------- | ------------------------------------------- | ---------------------- |
| ol         | Lista ordenada                               | reversed, start, type  |
| ul         | Lista no ordenada                            |                        |
| menu       | Equivale a ul                                |                        |
| li         | Elemento de lista (ordenada o no ordenada)   | value                  |
| dl         | Lista de definición                          |                        |
| dt         | Término en lista de definición                |                        |
| dd         | Definición en lista de definición             |                        |

**Tablas**

| Etiqueta   | Descripción                                  | Atributos principales |
| ---------- | ------------------------------------------- | ---------------------- |
| table      | Tabla                                       | border                 |
| caption    | Leyenda de tabla                             |                        |
| colgroup   | Grupo de columnas                            | span                   |
| tbody      | Cuerpo de tabla (grupo de filas)             |                        |
| thead      | Cabecera de tabla (grupo de filas)           |                        |
| tfoot      | Pie de tabla (grupo de filas)                |                        |
| tr        

 | Fila                                        |                        |
| td         | Celda                                       | colspan, rowspan, headers |
| th         | Celda de cabecera                            | colspan, rowspan, headers, scope, abbr |
| col        | Columna                                     | span                   |

**Formularios**

| Etiqueta   | Descripción                                  | Atributos principales |
| ---------- | ------------------------------------------- | ---------------------- |
| form       | Formulario                                   | accept-charset, action, autocomplete, enctype, method, target |
| label      | Etiqueta de un control                      | form, for              |
| input      | Control (hay varios tipos)                   | type, name, value, checked, selected, width, height, size, maxlength, ... |
| button     | Botón                                       | name, type (submit, reset, button), value, form |
| select     | Caja de lista                                | name, multiple, size, ... |
| datalist   |                                             |                        |
| optgroup   | Grupo de opciones en una caja de lista        | label                  |
| option     | Opción de caja de lista                      | label, selected, value |
| textarea   | Área de texto                               | name, cols, rows, ...  |
| output     | Cálculo                                     | name, for              |
| progress   | Barra de progreso                            | value, max             |
| meter      | Indicador                                   | value, min, max, low, high, optimum |
| fieldset   | Grupo de controles                           | name, disabled         |
| legend     | Leyenda de grupo de controles                |                        |

**Elementos interactivos**

| Etiqueta   | Descripción                                  | Atributos principales |
| ---------- | ------------------------------------------- | ---------------------- |
| details    | Desplegable                                 |                        |
| summary    | Leyenda para <details>                      |                        |
| dialog     | Cuadro de diálogo de una aplicación          | open                   |

**Scripts**

| Etiqueta   | Descripción                                  | Atributos principales |
| ---------- | ------------------------------------------- | ---------------------- |
| script     | Script                                      | src, type, charset, async, defer |
| noscript   | Contenido a mostrar en navegadores que no admiten <script> |                        |
| template   | Plantillas utilizables por scripts          |                        |
| slot       | Marcador para componente                    |                        |
| canvas     | Zona de dibujo utilizable por script         | width, height          |

**Notación Ruby (texto en línea)**

| Etiqueta   | Descripción                                  | Atributos principales |
| ---------- | ------------------------------------------- | ---------------------- |
| ruby       | Notación Ruby                                |                        |
| rt         | Elemento de notación Ruby (texto)            |                        |
| rp         | Elemento de notación Ruby (paréntesis)       |                        |

Espero que esta tabla de contenido te sea útil para comprender las etiquetas de HTML y sus atributos principales.