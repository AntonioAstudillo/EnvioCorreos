<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Envio de correos</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
   </head>
   <body>

   <div class="container">
      <div class="p-5 text-center bg-light">
         <h1 class="mb-3">Enviando correo con PHPMailer</h1>
      </div>
      <form action="procesar.php" method="post">
         <div class="row">
            <div class="col-12">
               <div class="mb-3">
                  <label for="nombre" class="form-label">Nombre</label>
                  <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="emailHelp">
               </div>
            </div>

            <div class="col-12">
               <div class="mb-3">
                  <label for="correo" class="form-label">Correo</label>
                  <input type="email" class="form-control" name="correo" id="correo" aria-describedby="emailHelp">
               </div>
            </div>

            <div class="col-12">
               <div class="input-group">
                  <span class="input-group-text">Asunto</span>
                  <textarea name="asunto" class="form-control" aria-label="With textarea"></textarea>
               </div>
            </div>
         </div>

         <div class="row mt-3 mb-5">
            <div class="col-6">
               <div class="">
                  <input type="submit" class="btn btn-outline-primary" name="btnEnviar" value="Enviar correo">
               </div>
            </div>
         </div>
      </form>
   </div>

   <footer class="footer mt-auto py-3 bg-light">
     <div class="container">
        <p class="text-center"><span class="text-muted text-center">Antonio Astudillo <?php echo date('Y'); ?></span></p>

     </div>
   </footer>

   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
   </body>
</html>
