# CAPTURA Y PROPAGACIÓN DE EVENTOS EN JAVASCRIPT   

**Eventos en JavaScript**   
Javascript tiene eventos para proporcionar una interfaz dinámica a una página web. Estos eventos están conectados a elementos en el Modelo de objetos de documento (DOM). 
Estos eventos por defecto usan propagación burbujeante, es decir, hacia arriba en el DOM de hijos a padres. Podemos vincular eventos ya sea como en línea o en un script externo.    
Un evento es una parte importante de JavaScript. Una página web responde de acuerdo con un evento ocurrido. Algunos eventos son generados por el usuario y otros son generados por API. Un detector de eventos es un procedimiento en JavaScript que espera a que ocurra un evento. El ejemplo simple de un evento es un usuario que hace clic con el mouse o presiona una tecla en el teclado.

Un detector de eventos es básicamente una función que espera a que ocurra un evento. Ese evento puede ser cualquier cosa como un evento de clic del mouse, enviar un formulario, presionar teclas de un teclado, etc.   s   
Event Bubbling y Event Capturing son los términos más utilizados en JavaScript en el momento del flujo de eventos. Estas son las dos formas de propagación de eventos en la API DOM de HTML.     

***¿Por qué existe la propagación de eventos?***    
Una de las intenciones de JavaScript con la creación del patrón de propagación de eventos era facilitar la captura de eventos de una fuente, el elemento padre, en lugar de configurar un controlador de eventos en cada elemento secundario interno.

***Fases de Propagación***    
Las tres fases de la propagación de eventos en JavaScript son esenciales para comprender cómo usar eventos y, además, es otra pregunta extremadamente común que se hace durante las entrevistas de tecnología de JavaScript.   
Estas tres fases en orden son:
- **1) La fase de captura de eventos:** es la primera fase en la que se activa un evento. Este evento "captura" o se propaga primero a través del evento padre, que es el objeto de window, luego el document, luego el html y luego los demás elementos internos. Baja hasta que llega al event.target (en lo que hiciste clic / el evento desencadenado).  
- **2) La fase objetivo:** la segunda fase es cuando llegamos al event.target . Por ejemplo, cuando un usuario hace clic en un botón, este es el elemento actual de botón.    
- **3) La fase de propagación del evento:** la tercera fase. Este evento comienza desde event.target y se propaga hasta que llega al elemento padre superior nuevamente (aunque el evento del elemento padre no se vuelve a llamar).    
 
En esencia, el evento primero desciende a través de los elementos principales hasta que alcanza el elemento de destino (fase de captura). Cuando el evento alcanza el objetivo, se dispara allí (fase objetivo) y luego vuelve a subir por la cadena (fase burbujeante), llamando a los controladores en el camino. (a través de javascript.info )
El elemento objetivo se refiere al lugar exacto que está desencadenando el evento.    
Por ejemplo, si hace clic en un botón dentro de a *div*, la *button* etiqueta correspondiente sería el objetivo. Se puede acceder a este elemento como event.targety no cambiará a lo largo de las fases de propagación del evento.      

![Otro img de las fases](https://www.freecodecamp.org/espanol/news/content/images/2021/10/image-20-1.png)   

***¿Qué es la captura de eventos?***    
La captura de eventos es la primera fase que ocurre cuando el evento se mueve hacia abajo por los elementos desde la parte superior (window) hasta el objetivo del evento, como una cascada. Rara vez se usa cuando se manejan eventos, y la mayoría de las veces ocurre entre bastidores. Si se coloca un controlador, generalmente se hace durante la fase de propagación del evento, porque cuanto más cerca esté un elemento del objetivo, más contexto tendrá el elemento.
Cuando los controladores de eventos se configuran con onClick(o un diferente on {event}) o addEventListener(event, handler), solo la fase de destino y la fase de propagación del evento lo detectarán. Si queremos capturar un evento durante la fase de captura, necesitamos agregar explícitamente {capture: true}o solo el implícito trueal final del detector de eventos.    
Aunque oficialmente hay tres fases, la segunda fase “objetivo” que ocurre cuando **event.target** se alcanza el elemento, no se maneja por separado como las demás. Tanto la captura de eventos como los controladores de propagación de eventos activarán esta fase automáticamente cuando terminen y comiencen con el elemento de destino.   

***¿Qué es el evento burbujeante?***    
El burbujeo de eventos implica ejecutar los controladores del elemento de destino y luego "burbujear" hacia arriba hasta los controladores del siguiente elemento padre, luego el elemento abuelo por encima de ese, y así sucesivamente. Puede pensar en esto como algo similar a la noción de burbujas que se elevan en el agua. Esto significa que si tenemos una *p>*en el interior de un anidado *div>*, en el interior de un anidado *form>*, los manipuladores se les ejecutan en orden: *p>* -> *div>* -> *form>*. Este burbujeo se ejecutará hasta que llegue a la parte superior de los elementos, a través del html, el document objecty hasta el window. Casi todos los eventos aparecerán, con pocas excepciones como focus.    

![fases](https://miro.medium.com/max/724/1*GLU36VFddFRhA8n_4FGjzw.png)    

**Nota:** También existe técnicamente otra fase denominada "Fase Ninguna", en la que no se está produciendo ninguna fase de eventos. Puedes acceder a la fase en la que se encuentra un elemento a través de event.eventPhase.    

**Ejemplo:**

<html lang="en">
  <head>
    <meta charset="utf-8" />
    <link rel="icon" href="%PUBLIC_URL%/favicon.ico" />
  </head>
  <body>
    <div id="root">
      <table>
        <tbody>
          <tr>
            <td>Shady Grove</td>
            <td>Aeolian</td>
          </tr>
          <tr>
            <td>Over the River, Charlie</td>
            <td>Dorian</td>
          </tr>
        </tbody>
      </table>
    </div>
  </body>
</html>    

Esto es lo que realmente está sucediendo, en el mismo orden que se especifico, tomando en  cuenta que aqui DefaultView, sería el objeto window.    
![ejemplo](https://www.freecodecamp.org/news/content/images/2021/09/image-21.png)    

<style>
  body * {
    margin: 10px;
    border: 1px solid blue;
    font-family: Arial;
  }
</style>
