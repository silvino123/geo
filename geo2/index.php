<!DOCTYPE html>
<html lang="es">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Geocomssa | Index</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
    <style>
      
body {
  background: url('img/fondoproducto3.png');
  background-attachment: fixed;
  background-size: cover;
  
}
.hideme
  {
    opacity:0;
  }
  #container div
{ 
    margin:50px; 
    padding:50px; 
    background-color:pink; 
}


    </style>
  </head>

  <body>


    <!-- Navigation -->
    

  
    <header>
      <?php include 'header.html'; ?>
<div id="myCarousel" class="carousel slide" data-ride="carousel" style="width: 100%;height: 100%;">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
<div class="carousel-inner" role="listbox" >
    <div class="carousel-item active" style="background-image: url('img/slide1.png'); background-size: cover;">
      <div class="carousel-caption d-none d-md-block">
              <h3>Aqui el texto</h3>
              <p class="btn btn-warning">Ver más</p>
            </div>
    </div>

    <div class="carousel-item" style="background-image: url('img/slide2.jpg'); background-size: cover;">
      <div class="carousel-caption d-none d-md-block">
              <h3>Aqui el texto</h3>
              <p class="btn btn-warning">Ver más</p>
            </div>
    </div>

    <div class="carousel-item" style="background-image: url('img/slide3.jpg'); background-size: cover;">
            <div class="carousel-caption d-none d-md-block">
              <h3>Aqui el texto</h3>
              <p class="btn btn-warning">Ver más</p>
            </div>
    </div>
          <div class="carousel-item" style="background-image: url('img/slide2.jpg'); background-size: cover;">
            <div class="carousel-caption d-none d-md-block">
              <h3>Aqui el texto</h3>
              <p class="btn btn-warning">Ver más</p>
            </div>
          </div>
   

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Siguiente</span>
  </a>
  
<div style="background-color: white;height: 3%;">
  <br>
</div>
</div>

</div>
    </header>
<script>
 $(function(){  // $(document).ready shorthand
  $('.monster').fadeIn('slow');
});

$(document).ready(function() {
    
    /* Every time the window is scrolled ... */
    $(window).scroll( function(){
    
        /* Check the location of each desired element */
        $('.hideme').each( function(i){
            
            var bottom_of_object = $(this).position().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            
            /* If the object is completely visible in the window, fade it it */
            if( bottom_of_window > bottom_of_object ){
                
                $(this).animate({'opacity':'1'},1500);
                    
            }
            
        }); 
    
    });
    
});
</script>
    <!-- Page Content -->
    <div class="container" style="color: white;">
      <center>
        <h1 class="my-4">Valores</h1>      </center>
      <div class="row">
        
        <div class="col-lg-6 col-sm-12 col-md-6 text-center mb-6"  > 
          <img class="rounded-square img-fluid d-block mx-auto " src="#" style="width: 100px;height: 100px;" alt=""><?php //Aqui va el icono del servicio o del valor ?>
          <h3>
            Seguridad 
          </h3>
          <p>En todas nuestras actividades, la seguridad de todos los
                                miembros del equipo, es nuestra prioridad número uno. Cada miembro
                                de nuestro equipo debe pensar en regresar a sus hogares sanos y a
                                salvo.</p>
        </div>
        <div class="col-lg-6 col-sm-12 col-md-6 text-center mb-6"  >
          <img class="rounded-square img-fluid d-block mx-auto" src="#" style="width: 100px;height: 100px;" alt=""><?php //Aqui va el icono del servicio o del valor ?>
          <h3>Relaciones de trabajo
          </h3>
          <p>Construimos relaciones sólidas con
                                nuestros clientes, basadas en la honestidad, integridad, respeto y
                                comunicación abierta. El Trabajo en asociación con nuestros clientes es
                                crucial para el éxito. Siempre hay un camino para conseguir el trabajo
                                bien hecho. Nuestro equipo esta preparado para enfrentar los
                                obstáculos mecánicos y tecnológicos a través de la investigación y
                                desarrollo de soluciones innovadoras y eficientes para cumplir los
                                objetivos de nuestros clientes.</p>
        </div>
        <div class="col-lg-6 col-sm-12 col-md-6 text-center mb-6"  >
          <img class="rounded-square img-fluid d-block mx-auto" src="#" style="width: 100px;height: 100px;" alt=""><?php //Aqui va el icono del servicio o del valor ?>
          <h3>Profesionales
          </h3>
          <p>En el desarrollo de software y hardware cumpliendo
                                con los estándares del mercado, Continuamente tratamos de evaluar
                                todo lo que hacemos, con el objetivo de lograr la excelencia operativa
                                en beneficio de nuestros clientes y colaboradores.
                                INNOVADORES Somos solucionadores de problemas operativos de
                                nuestros clientes con el constante desarrollo de herramientas Para
                                aumentar la rentabilidad y la productividad de las empresas que nos
                                contratan.</p>
        </div>
        <div class="col-lg-6 col-sm-12 col-md-6 text-center mb-6"  >
          <img class="rounded-square img-fluid d-block mx-auto" src="#" style="width: 100px;height: 100px;" alt=""><?php //Aqui va el icono del servicio o del valor ?>
          <h3>Medio ambiente
          </h3>
          <p>Respetamos el medio ambiente. tomamos todas las
                                medidas prácticas para minimizar el impacto de nuestras actividades
                                sobre el medio ambiente, tarea fundamental para el futuro de todos.</p>
        </div>
        
      </div>
      <div class="row">
        <div class="col-lg-4 col-sm-12 col-md-6 text-center mb-4"  >
          <img class="rounded-square img-fluid d-block mx-auto" src="#" style="width: 100px;height: 100px;" alt=""><?php //Aqui va el icono del servicio o del valor ?>
          <h3>Trabajo en equipo
          </h3>
          <p>Todos los colaboradores, deberán de está
                                trabajando como un equipo más fuerte dia a dia.</p>
        </div>
        <div class="col-lg-4 col-sm-12 col-md-6 text-center mb-4"  >
          <img class="rounded-square img-fluid d-block mx-auto" src="#" style="width: 100px;height: 100px;" alt=""><?php //Aqui va el icono del servicio o del valor ?>
          <h3>Innovadores
          </h3>
          <p>Somos solucionadores de problemas operativos de
                                nuestros clientes con el constante desarrollo de herramientas Para
                                aumentar la rentabilidad y la productividad de las empresas que nos
                                contratan.</p>
        </div>
        <div class="col-lg-4 col-sm-12 col-md-6 text-center mb-4"  >
          <img class="rounded-square img-fluid d-block mx-auto" src="#" style="width: 100px;height: 100px;" alt=""><?php //Aqui va el icono del servicio o del valor ?>
          <h3>Autocritica
          </h3>
          <p>Recibimos con beneplácito los comentarios de nuestros
                                clientes y colaboradores, seguimos evolucionando y adaptándonos para
                                satisfacer las necesidades de nuestros clientes e industria.</p>
        </div>
        
      </div>

      <hr>
    </div>
    <!-- /.container -->

    <!-- Footer -->
    <?php include 'footer.php'; ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
