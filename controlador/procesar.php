<?php

if(isset($_POST['correo'] , $_POST['asunto'] , $_POST['nombre']))
{
   require_once '../modelos/correo.php';

   $nombre = $_POST['nombre'];
   $correo = $_POST['correo'];
   $asunto = $_POST['asunto'];

   //instanciamos un objeto de la clase Correo.php
   require_once '../modelos/correo.php';

   $objeto = new Correo($nombre , $correo , $asunto);

   $respuesta = $objeto->enviarCorreo();

   if($respuesta){
      echo 'good';
   }else{
      echo 'bad';
   }

}else{
   header("Location:index.php");
}




?>
