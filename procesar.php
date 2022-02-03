<?php


if(isset($_POST['correo']) && isset($_POST['asunto']) && isset($_POST['nombre']))
{
   $nombre = $_POST['nombre'];
   $correo = $_POST['correo'];
   $asunto = $_POST['asunto'];

   //instanciamos un objeto de la clase Correo.php
   require_once 'correo.php';

   $objeto = new Correo($nombre , $correo , $asunto);

   $respuesta = $objeto->enviarCorreo();

   if($respuesta){
      echo 'Correo enviado con éxito';
   }else{
      echo 'Hubo un problema al enviar el correo';
   }

}else{
   header("Location:index.php");
}




?>
