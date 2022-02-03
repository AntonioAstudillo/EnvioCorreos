# EnvioCorreos
Pequeño Programa para enviar correos por medio de la clase PHPMailer.

Para poder enviar correos por medio de XAMP, es necesario configurar
el archivo php.ini, especificamente el apartado que dice [mail function], en dicho apartado
es necesario cambiar el valor SMTP=localhost,por  SMTP =  smtp.gmail.com al igual que
smtp_port = 25  por  smtp_port = 587  y descomentar la linea que dice sendmail_from = me@example.com y cambiar el valor por defecto, por algun correo destino. Otra cosa importante a configurar en dicho archivo, es el sendmail_path = , para que funcione, tienen que descomentar
esa linea, y como valor, ponerle la ruta en la que se encuentra el ejecutable sendmail.exe. que xamp lo tiene en la siguiente ruta "\"C:\xampp\sendmail\sendmail.exe\" -t". Algo importante de mencionar,
es que antes de que comiencen a realizar modificaciones sobre el archivo php.ini, es importante realizar
una copia de él, por si por algun motivo, sucede algun problema, ya tendrían un respaldo
de la configuración inicial. 

Despues de configurar el archivo php.ini, es necesario modificar tambien la configuracion del archivo sendmail.ini, el cual se encuentra en la siguiente ruta dentro xamp
C:\xampp\sendmail\sendmail.ini, en dicho archivo, vamos a modificar los siguientes valores.

smtp_server=mail.mydomain.com  por smtp_server=smtp.gmail.com
smtp_port=25  por smtp_port=587
auth_username=   por	  auth_username=cuenta@gmail.com	
auth_password= por     auth_password=pruebas751  -- la contraseña puede ser cualquiera, solamente acuerdate de ella, porque la usaremos dentro del codigo php para poder enviar correos. 
force_sender= por   force_sender=repetirCorreoIngresadoEnAuth_username@gmail.com


Es importante descargar la librería phpmailer para poder hacer uso de la clase PHPMailer() y poder enviar correos ya que php no la tiene de forma nativa, 
para ello pueden hacerlo desde composer, solamente se dirigen a la raiz de su proyecto por medio de la consola, y escriben el siguiente comando, composer require phpmailer/phpmailer  y automaticamente composer descargará las librerias y dependencias necesarias, para poder hacer uso de dicha clase.


Otro punto importante, se debe configurar la cuenta de gmail permitiendo el acceso de aplicaciones pocos seguras, para que se puedan enviar los correos.


[![correo.png](https://i.postimg.cc/59X8RPWC/correo.png)](https://postimg.cc/c6NKKBHx)

