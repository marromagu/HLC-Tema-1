<?php
/*PHP incluye en la matriz $_REQUEST todos los datos que llegan junto 
con la petición de la página, tanto si están incluidos en la URL como 
si están incluidos en cabeceras HTTP. 
PHP también crea otras dos matrices,$_GET y $_POST, que contienen los datos 
recibidos por uno de los métodos, $_GET los recibidos en la URL (get) 
y $_POST los recibidos en cabeceras (post).*/
/*Si el programa PHP trabaja con $_REQUEST o $_GET, 
el ataque de inyección se puede realizar manipulando la URL*/
echo "<pre>";
ECHO "<P>DATOS RECOGIDOS CON REQUEST</P>";
print_r($_REQUEST);
ECHO "<P>DATOS RECOGIDOS CON POST</P>";

print_r($_POST);
ECHO "<P>DATOS RECOGIDOS CON GET</P>";
print_r($_GET);
echo "</pre>";
ECHO "<A HREF='EJEMPLO.HTML'>vOLVER AL FORMULARIO</A>";
/*Si el programa PHP trabaja con $_REQUEST o $_GET, el ataque de inyección se 
puede realizar manipulando la URL. Si el programa PHP trabaja con $_POST, 
el ataque de inyección se tendría que realizar con alguna herramienta que 
generara las cabeceras HTTP.*/
print "<p>Si el programa PHP trabaja con \$_REQUEST o \$_GET, el ataque de inyección se puede realizar manipulando la URL.</p>";
echo " <p>Si el programa PHP trabaja con \$_POST, el ataque de inyección se tendría que realizar con alguna herramienta que generara las cabeceras HTTP.</p>";
?>