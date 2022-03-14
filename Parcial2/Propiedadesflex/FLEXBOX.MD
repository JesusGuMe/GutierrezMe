# PROPIEDADES FLEX
**Introdución**   
Tradicionalmente, en CSS se ha utilizado el posicionamiento (static, relative, absolute...), los elementos en línea o en bloque (y derivados) o los float, algunas tareas que consideramos básicas en un diseño, como centrar verticalmente un elemento secundario en relación con un elemento principal o hacer que los elementos secundarios ocupen la misma cantidad de espacio, o que las columnas tengan el mismo tamaño independientemente de la cantidad de contenido interno, fue  muy difícil de manejar con floats o position, al menos de forma práctica y flexible. La herramienta Flexbox (de Flexible Box) fue creada para hacer estas tareas más sencillas y funcionales: los secundarios de un elemento con Flexbox se pueden posicionar en cualquier dirección y pueden tener dimensiones flexibles para adaptarse.

**¿Qué es el Flexbox?**   
El Módulo de Caja Flexible, comúnmente llamado flexbox, fue diseñado como un modelo unidimensional de layout, y como un método que pueda ayudar a distribuir el espacio entre los ítems de una interfaz y mejorar las capacidades de alineación.

**Elementos**   
Para empezar a utilizar flexbox lo primero que debemos hacer es conocer algunos de los elementos básicos de este nuevo esquema, que son los siguientes:
- *Contenedor*: Es el elemento padre que tendrá en su interior cada uno de los ítems flexibles. Observa que al contrario que muchas otras estructuras CSS, por norma general, en Flex establecemos las propiedades al elemento padre.
    - *Eje principal*: Los contenedores flexibles tendrán una orientación principal específica. Por defecto, es en horizontal (en fila).
    - *Eje secundario*: De la misma forma, los contenedores flexibles tendrán una orientación secundaria, perpendicular a la principal. Si la principal es en horizontal, la secundaria será en vertical, y viceversa.

- *Ítem*: Cada uno de los hijos flexibles que tendrá el contenedor en su interior.
![Elementos del Flexbox](https://lenguajecss.com/css/maquetacion-y-colocacion/flexbox/flexbox-como-funciona.png)   

**El contenedor flex**   
Un área del documento que contiene un flexbox es llamada contendedor flex. Para crear un contenedor flex, establecemos la propiedad del área del contenedor display como flex o inline-flex. Tan pronto como hacemos esto, los hijos directos de este contenedor se vuelven ítems flex. A continuación, se muestran las propiedades que deben declararse utilizando el elemento principal como selector (para alinear los elementos secundarios):
- ***Display***: Esta propiedad define un flex container; inline o block dependiendo de los valores pasados. Coloca todos los elementos secundarios directos en un contexto Flex. 

- ***Flex-direction***: Establece el eje principal, definiendo así la dirección en la que los flex ítems están alineados en el flex container. 
    - *row (estándar)*: de la izquierda a la derecha en ltr (left to right), de la derecha a la izquierda en rtl (right to left).
    - *row-reverse*: de la derecha a la izquierda en ltr, de la izquierda a la derecha en rtl.
    - *column*: mismo que row, pero de arriba a abajo.
    - *column-reverse*: mismo que row-reverse pero de abajo hacia arriba.

- ***flex-wrap***: Por estándar, los flex ítems todos intentarán encajarse en una sola línea. Con esta propiedad puedes modificar este comportamiento y permitir que los ítems pasen a la siguiente línea según sea necesario.
  - *nowrap (estándar)*: todos los flex ítems estarán en una sola línea.
  - *wrap*: los flex ítems se dividirán en múltiples líneas, de arriba a abajo.
  - *wrap-reverse*: los flex ítems se dividirán en múltiples líneas de abajo hacia arriba.

- ***flex-flow***: La propiedad flex-flow es una propiedad shorthand (una misma declaración incluye varios valores relacionados con más de una propiedad) que incluye flex-direction y flex-wrap. Determina cuáles serán los ejes principal y transversal del contenedor. El valor estándar es row nowrap.

- ***Justify-content***: Esta propiedad define la alineación de los ítems a lo largo del eje principal. Ayuda a distribuir el espacio libre que queda en el contenedor, ya sea que todos los flex ítems de una línea sean inflexibles o flexibles, pero ya hayan alcanzado su tamaño máximo.
  - *flex-start (estándar)*: los ítems se alinean a lo largo del borde de inicio (start) de acuerdo con la flex-direction del contenedor.
  - *Flex-end*: los ítems se alinean a lo largo del borde final (end) de acuerdo con la flex-direction del contenedor
  - *start*: los ítems se alinean a lo largo del borde de inicio de la dirección del writing-mode (modo de escritura
  - *end*: los ítems se alinean a lo largo del borde final de la dirección del writing-mode (modo de escritura).
  - *left*: los ítems están alineados a lo largo del borde izquierdo del contenedor, a menos que esto no tenga sentido con el flex-direction que se está utilizando. En este caso, se comporta como start.
  - *right*: los ítems están alineados a lo largo del borde derecho del contenedor, a menos que esto no tenga sentido con el flex-direction que se está utilizando. En este caso, se comporta como start.
  - *center*: los ítems están centrados en la línea.
  - *Space-between*: los ítems se distribuyen uniformemente a lo largo de la línea; el primer ítem al lado del borde inicial de la línea, el último ítem al lado del borde final de la línea.
  - *Space-around*: los ítems se distribuyen en línea con el mismo espacio entre ellos. 
  - *Space-evenly*: los ítems se distribuyen de manera que el espacio entre dos elementos cualesquiera en la línea (incluso entre los ítems y los bordes) sea igual. 

- ***Align-ítems***: Establece el comportamiento estándar de cómo flex ítems están alineados según el eje transversal (cross axis). En cierto modo, funciona de manera similar al justify-content, pero en el eje transversal (perpendicular al eje principal).
    - *Stretch (estándar)*: estira los ítems para llenar el contenedor, respetando el min-width/max-width).
    - *Flex-start/start/self-start*: ítems se posicionan al inicio del eje transversal.
    - *center*: ítems se centran en el eje transversal.
    - *baseline*: ítems se alinean de acuerdo con sus baselines.
Los modificadores safe y unsafe se puede usar junto con todas estas palabras clave y sirven para evitar cualquier alineación de elementos que haga con que el contenido sea inaccesible.

- ***Align-content***: Organiza las líneas dentro de un flex container cuando hay espacio adicional en el eje transversal, similar a cómo justify-content alinea ítems individuales dentro del eje principal. Esta propiedad no tiene efecto cuando solo hay una línea de flex ítems en el contenedor.
    - *flex-start / start*: ítems alineados con el inicio del contenedor. El valor  flex-start se guía por la flex-direction. 
    - *Flex-end/end*: ítems alineados con el final del contenedor. El valor (con mayor soporte de los navegadores) flex-end se guía por la flex-direction-
    - *center*: ítems centrados en el contenedor.
    - *space-between*: ítems distribuidos uniformemente; la primera línea al inicio del contenedor y la última línea al final del contenedor.
    - *space-around*: ítems distribuidos uniformemente con el mismo espaciamiento entre cada línea.
    - *space-evenly*: elementos distribuidos uniformemente con el mismo espaciamiento entre ellos.
    - *stretch (estándar)*: ítems en cada línea se estiran para ocupar el espacio remanente entre ellas.

**Propiedades de los elementos secundarios**   
A continuación, veremos propiedades que deben declararse teniendo como selector los elementos secundarios, es decir:
1
2
3
Esto significa que, donde hay un elemento principal con propiedad flex (o flex-container), también puede asignar propiedades flex específicas a elementos secundarios (flex-ítem).
- *order*: Determina el orden en que aparecerán los elementos. Por estándar los flex ítems, se organizan en la pantalla en orden de código. Pero la propiedad order controla el orden en que aparecen en el contenedor.
- *Flex-grow*: Define la habilidad de un flex ítem de crecer, según el caso. El valor de esta propiedad es un valor numérico sin indicación de unidad, que se utiliza para calcular la proporción. Este valor dicta la cantidad de espacio disponible en el contenedor que ocupará el ítem.
- *flex-shrink*: Establece la habilidad de un flex ítem para contraerse, según el caso. La propiedad no acepta valores negativos.
- *flex-basis*: Establece el tamaño estándar de un elemento antes de que se distribuya el espacio remanente del contenedor. La palabra clave *auto* significa "observe mis propiedades de altura o ancho". La palabra clave *content* significa "establezca el tamaño según el contenido interno del ítem".   
- *flex*: Esta es la propiedad shorthand para flex-grow, flex-shrink y flex-basis, combinadas. El segundo y tercer parámetros (flex-shrink y flex-basis) son opcionales. El estándar es 0 1 auto, pero si lo defines con un solo número, es equivalente a 0 1.

- ***align-self***: Permite que la alineación estándar (o lo que esté definido por align-items) se sobrescriba para ítems individuales.

**Huecos (gaps)**   
Existen dos propiedades de flexbox que han surgido recientemente: row-gap y column-gap. Dichas propiedades, permiten establecer el tamaño de un «hueco» entre ítems desde el elemento padre contenedor, y sin necesidad de estar utilizando padding o margin en los elementos hijos.
- *row-gap*: Espacio entre filas (sólo si flex-direction: column)
- *column-gap*: Espacio entre columnas (sólo si flex-direction: row)