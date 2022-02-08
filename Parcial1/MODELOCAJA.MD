# INVESTIGACIÓN DEL MODELO DE CAJA DE HTML
**Jesús Eduardo Gutierrez Meza, 19100195. 07 - Febrero - 2022**  

*Concepto*   
**El modelo de cajas es el comportamiento de CSS que hace que todos los elementos de las paginas se representen mediante cajas rectangulares**  
**Las cajas de una pagina se crean automaticamente. Cada vez que se insertar un HTML, se crea una nueva caja rectangular que encierra los contenidos de ese contenido.**  

  *Partes de la caja*  

Al hacer una caja de tipo bloque en CSS tenemos los elementos siguientes:  
- El **contenido de la caja o content box**: El área donde se muestra el contenido, cuyo tamaño puede cambiarse utilizando propiedades como *width* y *height*.
- El **relleno de la caja o padding box**: El relleno es espacio en blanco alrededor del contenido; es posible controlar su tamaño usando la propiedad *padding* y otras propiedades relacionadas.
- El **borde de la caja o border box**: El borde de la caja envuelve el contenido y el de relleno. Es posible controlar su tamaño y estilo utilizando la propiedad *border*.
- El **margen de la caja o margin box**: El margen es la capa más externa. Envuelve el contenido, el relleno y el borde como espacio en blanco entre la caja y otros elementos. Es posible controlar su tamaño usando la propiedad *margin* y otras propiedades relacionadas.  

El diagrama siguiente muestra estas capas:  
![Partes de la caja] (https://media.prod.mdn.mozit.cloud/attachments/2019/03/19/16558/29c6fe062e42a327fb549a081bc56632/box-model.png)