window.onload = main;


function main(){
   //ocultamos spinner
   ocultarSpinner();
   let boton = document.getElementById('btnEnviar');

   boton.onclick = enviarDatos;
}



function enviarDatos(e)
{
   let nombre = document.getElementById('nombre').value;
   let correo = document.getElementById('correo').value;
   let asunto = document.getElementById('asunto').value;

   //ocultamos boton y mostramos spinner
   ocultarBoton();

   $.post("controlador/procesar.php" , {'nombre':nombre , 'correo':correo , 'asunto':asunto} , function(data)
   {

      const Toast = Swal.mixin({
                     toast: true,
                     position: 'top-end',
                     showConfirmButton: false,
                     timer: 4000,
                     timerProgressBar: true,
                     didOpen: (toast) => {
                     toast.addEventListener('mouseenter', Swal.stopTimer)
                     toast.addEventListener('mouseleave', Swal.resumeTimer)
                     }
                  });

      if(data == 'good')
      {
         Toast.fire({
            icon: 'success',
            title: 'Correo enviado con éxito'
         })

         document.getElementById('nombre').value = "";
         document.getElementById('correo').value = "";
         document.getElementById('asunto').value = "";
         
      }else{
         Toast.fire({
            icon: 'error',
            title: 'Hubo un problema al enviar el correo'
         });
      }

      ocultarSpinner();

   });

   e.preventDefault();
}

function ocultarSpinner(){
   //ocultamos spinner y mostramos boton
   $('#btnEnviar').show();
   $('#spinner').hide();
}

function ocultarBoton(){
   //ocultamos boton y mostramos spinner
   $('#btnEnviar').hide();
   $('#spinner').show();
}
