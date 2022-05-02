# DEFINICIÓN Y FUNCIONAMIENTO DEL AJAX   
**¿Qué es Ajax?**    
AJAX significa JavaScript asíncrono y XML (Asynchronous JavaScript and XML). Es un conjunto de técnicas de desarrollo web que permiten que las aplicaciones web funcionen de forma asíncrona, procesando cualquier solicitud al servidor en segundo plano. Ajax permite que un usuario de la aplicación web interactúe con una página web sin la interrupción que implica volver a cargar la página web. La interacción del sitio web ocurre rápidamente sólo con partes de la página de recarga y renovación.    
JavaScript es un lenguaje de programación muy conocido. Entre otras funciones, gestiona el contenido dinámico de un sitio web y permite la interacción dinámica del usuario. XML es otra variante de un lenguaje de marcado como HTML, como lo sugiere su nombre: eXtensible Markup Language. Mientras HTML está diseñado para mostrar datos, XML está diseñado para contener y transportar datos.    
Tanto JavaScript como XML funcionan de forma asíncrona en AJAX. Como resultado, cualquier aplicación web que use AJAX puede enviar y recuperar datos del servidor sin la necesidad de volver a cargar toda la página.    


**¿Como funciona AJAX?**   
***Componentes de AJAX***        
Ajax se compone de las siguientes tecnologías:    
- XHTML y CSS para presentar información.
- DOM (Document Object Model - modelo de objetos de documento) para visualizar e interactuar de forma dinámica la información presentada.
- El objeto XMLHttpRequest para manipular los datos de forma asíncrona con el servidor web.
- XML, HTML y XSLT para el intercambio y la manipulación de datos.
- Se visualiza JavaScript para enlazar solicitudes e información de datos.    

Ajax incorpora estas tecnologías para crear un nuevo enfoque al desarrollo de aplicaciones web.
Ajax define un método de iniciar un cliente con la comunicación del servidor sin recargas de páginas. Proporciona una forma de permitir actualizaciones de página parciales. Desde una perspectiva de usuario de página web, significa que la mejora de la interacción con una aplicación web, que proporciona al usuario más control de su entorno, es similar a la de una aplicación de escritorio.

En una aplicación web tradicional, las solicitudes HTTP, que se inician mediante la interacción del usuario con la interfaz web, se realizan a un servidor web. El servidor web procesa la solicitud y devuelve una página HTML al cliente. Durante el transporte HTTP, el usuario no puede interactuar con la aplicación web.
![App Web Tradicional](https://www.ibm.com/docs/es/SS8PJ7_9.6.1/com.ibm.etools.webtoolscore.doc/images/traditionalWebAppModel.gif)   

En una aplicación web Ajax, no se interrumpe el usuario en interacciones con la aplicación web. El motor de Ajax o el intérprete JavaScript permite que el usuario interactúe con la aplicación web independientemente del transporte HTTP procedente del servidor o que tenga el servidor como destino representando la interfaz y gestionando las comunicaciones con el servidor en nombre del usuario.   
![App Web AJAX](https://www.ibm.com/docs/es/SS8PJ7_9.6.1/com.ibm.etools.webtoolscore.doc/images/ajaxWebAppModel.gif)    

***Funcionamiento***    
Usando sólo PHP u otros lenguajes de servidor, al hacer una petición, el servidor realiza una serie de tareas y después nos devuelve los datos. Mientras se realiza este proceso la página permanece en espera, es decir está parada. Esto puede que no tenga importancia si se manejan pocos datos y el servidor tiene potencia para responder rápidamente. Sin embargo si se manejan muchos datos o hay muchas peticiones a la vez (páginas muy visitadas), el tiempo de respuesta puede ser más largo. Mientras se espera la respuesta la página permanece parada.

Con ajax al trabajar de forma asincrona, permite que el usuario pueda seguir haciendo otras cosas o la página pueda mostrar otras cosas mientras se produce la respuesta.

Los siguientes gráficos muestran la forma de trabajar pidiendo datos al servidor de forma sincrona (sin ajax) o asíncrona (con ajax):     
Forma clásica de trabajar al interactuar con el servidor:    
![Forma clásica](https://aprende-web.net/progra/objetos/modeloAjax1.gif)    

Forma clásica de trabajar al interactuar con el servidor:    
![Forma clásica](https://aprende-web.net/progra/objetos/modeloAjax2.gif)    

***Comparación***   
*Modelo Tradicional o Convencional*   
1. Se envía una solicitud HTTP desde el navegador web al servidor.
2. El servidor recibe y, posteriormente, recupera los datos.
3. El servidor envía los datos solicitados al navegador web.
4. El navegador web recibe los datos y vuelve a cargar la página para que aparezcan los datos.   
Durante este proceso, los usuarios no tienen más remedio que esperar hasta que se complete todo el proceso. No solo consume mucho tiempo, sino que también supone una carga innecesaria en el servidor.    

*Modelo AJAX*    
1. El navegador crea una llamada de JavaScript que luego activará XMLHttpRequest.
2. En segundo plano, el navegador web crea una solicitud HTTP al servidor.
3. El servidor recibe, recupera y envía los datos al navegador web.
4. El navegador web recibe los datos solicitados que aparecerán directamente en la página. No se necesita recargar.   

Ajax es particularmente útil en paginas que manejan gran cantidad de datos o que son usadas por una gran cantidad de usuarios.   
Aplicaciones web como Gmail, Facebook, Twitter, o sin ir más lejos DesarrolloWeb.com, hacen uso de Ajax para mejorar la experiencia de usuario, ya que muchas de las consultas que se realizan al servidor no requieren recargar toda la página y muestran la información recibida del servidor de una manera rápida y precisa. En el ejemplo de Gmail u otros programas de webmail como podría ser Outlook, permiten al usuario realizar uso de la aplicación de email de una manera rápida, pudiendo componer mensajes y enviarlos o actualizar la lista de mensajes sin que se tenga que recargar toda la web, dando la impresión que una aplicación web funciona de manera similar a como lo haría una aplicación de escritorio.

Ajax, en resumen, ha facilitado la creación de aplicaciones web modernas, en las que la acción se desarrolla muchas veces en la misma página, obteniendo datos del servidor y mostrándolos al usuario sin tener que recargarse la página completamente con cada consulta que se hace al servidor. 