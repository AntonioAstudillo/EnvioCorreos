<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Envio de correos</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
      <script src="js/script.js" charset="utf-8"></script>
   </head>
   <body>

   <div class="container">
      <div class="p-5 text-center bg-light">
         <h1 class="mb-3">Enviando correo con PHPMailer</h1>
      </div>
      <form action="#" method="post">
         <div class="row">
            <div class="col-12">
               <div class="mb-3">
                  <label for="nombre" class="form-label">Nombre</label>
                  <input type="text" class="form-control" id="nombre" aria-describedby="emailHelp">
               </div>
            </div>

            <div class="col-12">
               <div class="mb-3">
                  <label for="correo" class="form-label">Correo</label>
                  <input type="email" class="form-control"  id="correo" aria-describedby="emailHelp">
               </div>
            </div>

            <div class="col-12">
               <div class="input-group">
                  <span class="input-group-text">Asunto</span>
                  <textarea  id="asunto" class="form-control" aria-label="With textarea"></textarea>
               </div>
            </div>
         </div>

         <div class="row mt-3 mb-5">
            <div class="col-6">
               <div id="spinner" class="spinner-border text-primary" role="status"></div>
               <div class="">
                  <input type="button" id="btnEnviar" class="btn btn-outline-primary" name="btnEnviar" value="Enviar correo">
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
