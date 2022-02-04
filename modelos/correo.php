<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Correo
{
   private $correo;
   private $asunto;
   private $nombre;

   public function __construct($nombre , $correo , $asunto)
   {
      $this->correo = $correo;
      $this->nombre = $nombre;
      $this->asunto = $asunto;
   }

   public function enviarCorreo()
   {
      require 'vendor/autoload.php';

      $objetoMail = new PHPMailer();
      $bandera = true;

      try {

         $objetoMail->isSMTP();
         $objetoMail->Host = 'tls://smtp.gmail.com';
         $objetoMail->SMTPAuth = true;
         $objetoMail->Username = ''; //En esa linea va el correo que especificamos dentro de nuestros archivos php.ini  y sendmail.ini
         $objetoMail->Password = ''; //Ponemos la contraseña que especificamos en los archivos php.ini y sendmail.ini
         $objetoMail->SMTPSecure = 'tls';
         $objetoMail->Port = 587;

         //En la funcion setFrom, ponemos como primer parametro, el correo origen el segundo parametro, ponemos el nombre del remitente.
         $objetoMail->setFrom('', 'Antonio');
         $objetoMail->isHTML(true);
         $objetoMail->Subject = 'Correo de prueba';
         $objetoMail->Body = $this->asunto;
         $objetoMail->addAddress($this->correo, $this->nombre);

         //enviando y validando correo.
         if(!$objetoMail->send()){
            $objetoMail->ErrorInfo;
            $bandera = false;
         }

         if(!$bandera){
            return false;
         }

      }catch (Exception $e) {
         $respuesta = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
      }


      return $bandera;

   }//cierra metodo enviarCorreo
}






 ?>
