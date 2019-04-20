<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Geocomssa | Contacto</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
     <?php include 'header.html'; ?>

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">
        <center><small>Contáctanos</small></center>
      </h1>
<br>
       Content Row -->
       <div class="row">
        <div class="col-lg-12 mb-4">
          <h3>Mandanos un mensaje</h3>
          <form action="controlador/sendcontact.php" method="POST"  >
            <div class="control-group form-group">
              <div class="controls">
                <label>Nombre completo:</label>
                <input type="text" class="form-control"  title="Solo letras" id="name" name="name" required >
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Telefono:</label>
                <input type="tel" class="form-control" maxlength="10" pattern="[0-9]{10}" title="Formato de numero telfonico a 10 digitos, No se aceptan letras" id="phone" name="phone" required >
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Correo electronico:</label>
                <input type="email" class="form-control" id="email" name="email" required >
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Mensaje:</label>
                <textarea rows="10" cols="100" class="form-control" id="message" name="messagea" required  maxlength="999" style="resize:none"></textarea>
              </div>
            </div>
            <div id="success"></div>
            <!-- For success/fail messages -->
            <button type="submit" class="btn btn-primary btn-block" id="sendMessageButton">Enviar mensaje</button><br>
          </form>
        </div>

      </div>
      <div class="row">
        <!-- Map Column -->
        <div class="col-lg-8 mb-4">
          <!-- Embedded Google Map -->
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d871.5473924765471!2d-110.99580826128086!3d29.10008425405456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86ce85e96bf08b5f%3A0x7234ffb161013436!2sSycsoft!5e0!3m2!1ses-419!2smx!4v1555786003938!5m2!1ses-419!2smx" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <!-- Contact Details Column -->
        <div class="col-lg-4 mb-4">
          <h3>Detalles de contacto</h3>
          <p>
            Av. Tecnológico s/n, Sahuaro
            <br>Hermosillo, Sonora 83170
            <br>
          </p>
          <p>
            <abbr >Telefono</abbr>: 662 276 8409
          </p>
          <p>
            <abbr >Correo electronico</abbr>:
            <a href=""><br>sycsoftcontacto@gmail.com
            </a>
          </p>
          <p>
            <abbr >Horario</abbr>:<br> Lunes - Viernes: 8:00 AM to 5:00 PM <br>
            Sabado: 8:00 AM to 1:00 PM
          </p>
        </div>
      </div>
      <!-- /.row -->

      <!-- Contact Form -->
      <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
      
      
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
     <?php include 'footer.php'; ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Contact form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

  </body>

</html>
