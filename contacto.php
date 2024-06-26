<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="public/styles.css">
  </head>
  <header>

    <div class = "buttons">
      <a href="home.php" class =" btn-1">Inicio</a>
  </div>
  </header>
  <body>
    <div class="contact-content">
      <h1>Contacto</h1>
      <form id="contact-form" class="contact-form" action="/validar" method="post">

        nombre
        <input type="text" name = "nom" id = "nom"> <br><br>
        email
        <input type="email" name = "email" id = "email"> <br><br>
        tell
        <input type="text" name = "phone" id = "phone"> <br><br>
        subjetc
        <input type="text" name = "sub" id = "sub"> <br><br>
        message
        <input type="text" name = "msg" id = "msg"> <br><br>

        <input type="submit" value="enviar">

    </form>
      
      <div id="mensaje"></div>
    </div>

    <script>
      function submitForm() {
        const form = document.getElementById('contact-form');
        const mensaje = document.getElementById('mensaje');

        const name = form.elements.name.value;
        const email = form.elements.email.value;
        const phone = form.elements.phone.value;
        const subject = form.elements.subject.value;
        const message = form.elements.message.value;

        if (name === '' || email === '' || phone === '' || subject === '' || message === '') {
          mensaje.innerHTML = 'Por favor, complete todos los campos.';
        } else {
          mensaje.innerHTML = 'Mensaje enviado con éxito.';
          form.reset();
        }
      }
    </script>
  </body>
</html>
