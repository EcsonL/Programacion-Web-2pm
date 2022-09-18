<h2> Propiedades De Flexbox </h2>

<h4>El Módulo de Caja Flexible, comúnmente llamado flexbox, fue diseñado como un modelo unidimensional de layout, y como un método que pueda ayudar a distribuir el espacio entre los ítems de una interfaz y mejorar las capacidades de alineación. Este artículo hace un repaso de las principales características de flexbox, las que exploraremos con mayor detalle en el resto de estas guías.</h4>



| Propiedad     | Descripcion   |sintaxis   |
| ------------- |:-------------:| :--------:|
| Display Flex  | Esta propiedad hace que cambien las reglas con las cuales sus hijos van a ser representados en la página.| displax: flex;         |
|Display inline-flex| Inline-flex es como si tuviéramos un elemento inline-block, donde sus hijos se comportan con las reglas de Flexbox.| display: inline-flex;|

<h3>Propiedad Flex-Direction</h3>

| Propiedad      | Descripcion         |
| ------------- |:-------------:|
| Row        | Indica que los elementos se colocan en una fila, uno al lado del otro, de izquierda a derecha.         |
| Row-Reverse         |Se colocan en una fila, pero con orden de derecha a izquierda.        |
| Column        | se colocan uno debajo del otro, en orden los primeros arriba.         |
| Column-Reverse        | se colocan en una columna, pero los primeros aparecerán abajo.        |

<h3>Propiedad Flex Direction </h3>

| Propiedad      | Descripcion         |
| ------------- |:-------------:|
| Nowrap       | Hace que nunca se produzcan saltos de línea.|
| Wrap        |Hace que si no caben, entonces se coloquen en la siguiente línea.|
| Wrap-Reverse         | El salto de línea se producirá al contrario, o sea, hacia arriba.      |

<h3> Propiedad Flex-Flow </h3>
Esta propiedad no aporta nada nuevo, pues simplemente es un atajo para escribir de 1 sola vez flex-direction y flex-wrap. El valor predeterminado es "row nowrap"

<h3> Propiedad Justify-Content </h3>

| Propiedad      | Descripcion         |
| ------------- |:-------------:|
| Flex-Start       | Añade los elementos a partir del inicio del eje principal.|
| Flex-End        |Añade los elementos a partir del final del eje principal.|
| Center       | los elementos se centran en el espacio del contenedor, siempre con respecto al eje principal.     |
| Space-Between        |hace que los elementos se distribuyan con un espacio proporcional entre ellos, siendo que los ítem de los extremos se sitúan en el borde del contenedor.|
| Space-Around       | es parecido a space-between en el sentido de dejar un espaciado proporcional, sin embargo, en esta ocasión se deja también espacio entre el borde del contenedor y los ítem de los extremos.    |

<h3> Propiedad Aling-Items </h3>

| Propiedad      | Descripcion         |
| ------------- |:-------------:|
| Flex-Start       | Indica que se posicionarán al comienzo del eje secundario.|
| Flex-End        |Se posicionarán al final del eje secundario.|
| Center       | se posicionarán en el centro del eje secundario.|
| Stretch        |Ocuparán el tamaño total del eje secundario. |
| Baseline      | Para el posicionamiento de los elementos se tendrá en cuenta el texto que hay escrito dentro.|


<h3> Propiedad Aling-Content </h3>

| Propiedad      | Descripcion         |
| ------------- |:-------------:|
| Flex-Start       | Indica que las filas se colocarán todas pegadas entre sí (obviamente no aparecerán exactamente pegadas si le hemos colocado un margin), desde el inicio del eje secundario.|
| Flex-End        |Las filas se colocarán pegadas entre sí, pero esta vez pegadas al final del eje secundario.|
| Center       | Se posicionarán en el centro del eje secundario, pegadas entre sí.|
| Stretch        |Sus dimensiones crecerán para ocupar todo el espacio disponible (a no ser que se haya colocado una dimensión diferente en los elementos).|
| Space-Between      | Indica que las filas se separarán entre sí, dejando un espacio proporcional entre ellas.|
| Space-Around      | Indica que las filas se separarán, dejando un espacio entre ellas proporcional, también con el borde.|