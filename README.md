# WEB_practifp
Proyecto final de GS DAW

*** Instrucciones para poder comenzar a utilizar el proyecto. ***
Lo primero sería leer la documentación que se encuentra en la carpeta “Documentacion”.

Lo siguiente es conocer la configuración y archivos del programa para que funcione correctamente.

Descripción de los archivos más relevantes:

Carpeta: bd			     -> contiene los archivos para la carga e inserción de datos de la base de
                            datos. Sería el primer paso a realizar.
    “bd_proyecto.sql” 		 -> script en SQL para la carga de la base de datos.
    “insertarDatosBBDD.php”	 -> contiene un script de carga automática de datos en la base de datos.

Carpeta: css			 -> contiene los estilos de todas las webs

Carpeta: imágenes		 -> contiene las imágenes utilizadas en la web

Carpeta: js			     -> contiene los scripts en JavaScript y librerías

Carpeta: php			 -> contiene los archivos php secundarios
    “conexión_bd.php”		      -> contiene el script de la conexión a la base de datos.
    “mail_contacto.php”, “mail_solicitudOferta.php”, “mail_verificacion.php” y “recuperarContrasena.php” 	                      -> contienen script de envío de emails 
    *** Importante ***
    “mail_contacto.php”, “mail_solicitudOferta.php”, “mail_verificacion.php” y “recuperarContrasena.php” 	

    Para el correcto funcionamiento de los mails deberían introducir sus propios correos y passwords asi como la configuración de su cuenta seleccionada.
    ***  *** 

    El resto de archivos contienen información relevante que no recomendamos modificar para el correcto funcionamiento de la web.

Carpeta: web_practifp
Los archivos php que aparecen en la carpeta principal “web_practifp.php” son las diferentes webs, al iniciar el proyecto se carga automáticamente “index.php”. 

