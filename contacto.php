        
        
        
<!DOCTYPE html>     
<html>      
        
<head>      
    <title>Geocommsa-Contacto</title>        
    <meta name="viewport" content="width=device-width, initial-scale=1">        
    <meta charset="utf-8">      
    <meta name="Geocommsa" content="" />        
        
    <script>        
        addEventListener("load", function() {       
            setTimeout(hideURLbar, 0);      
        }, false);      
            
        function hideURLbar() {     
            window.scrollTo(0, 1);      
        }       
    </script>       
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />      
    <link href="css/simpleLightbox.css" rel='stylesheet' type='text/css' />     
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/contact.css" rel='stylesheet' type='text/css' />        
    <link href="css/fontawesome-all.css" rel="stylesheet">      
            
</head>     
            
<body>      
    <header>        
    <?php include 'header.html'; ?>     
    </header>       
    <!--//header-->     
    <div class="banner-inner-contacto">      
    </div>      
    <ol class="breadcrumb">     
        <li class="breadcrumb-item">        
            <a href="index.php">Inicio</a>      
        </li>       
        <li class="breadcrumb-item active">Contacto</li>     
                  
    </ol>       
    <!--//banner-->     
    <section class="services">
        <div class="container">
            <h3 class="tittle">Contacto</h3>

            <div class="row inner-sec-wthree">
                <div class="contact-map">

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3486.191299947982!2d-110.99790358542926!3d29.10003316951985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86ce85e96bf08b5f%3A0x7234ffb161013436!2sSYCSOFT!5e0!3m2!1ses-419!2smx!4v1537463644950" class="map" style="border:0" allowfullscreen=""></iframe>
                </div>
                <div class="address row">
                    <div class="col-md-4 address-grid-inf" data-aos="zoom-out">
                        <div class="address-info">
                            <div class="address-left">
                                <span class="fas fa-phone-volume" aria-hidden="true"></span>
                            </div>
                            <div class="address-right">
                                <h6 style="color:#000000">Telefono</h6>
                                <p>00-00-00-00</p>

                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 address-grid-inf" data-aos="zoom-out">
                        <div class="address-info">
                            <div class="address-left">
                                <span class="far fa-envelope" aria-hidden="true"></span>
                            </div>
                            <div class="address-right">
                                <h6 style="color:#000000">Direccion de correo</h6>
                                <p>Email :
                                    <a href=""> mail@example.com</a>
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 address-grid-inf" data-aos="zoom-out">
                        <div class="address-info">
                            <div class="address-left">
                                <span class="fas fa-map-marker-alt" aria-hidden="true"></span>
                            </div>
                            <div class="address-right">
                                <h6 style="color:#000000">Ubicacion</h6>
                                <p>Direccion

                                </p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="contact_grid_right">
                    <h6>Ponte en contacto...</h6>
                    <form action="#" method="post">
                        <div class="contact_left_grid">
                            <input type="text" name="Name" placeholder="Nombre" required="">
                            <input type="email" name="Email" placeholder="Correo" required="">
                           
                            <textarea name="Message"   required="">Mensaje...</textarea>
                            <input type="submit" value="Enviar">
                            
                            <div class="clearfix"> </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>




	        
    <!--footer-->       
    <?php include 'footer.html'; ?>     
            
    <!-- js -->     
    <script src="js/jquery-2.2.3.min.js"></script>      
    <!-- //js -->       
    <!-- simpleLightbox -->     
	<script src="js/simpleLightbox.js"></script>        
	<script>        
		$('.proj_gallery_grid a').simpleLightbox();     
	</script>       
	<!-- //simpleLightbox -->       
    <!-- /js files -->      
	<link href='css/aos.css' rel='stylesheet prefetch' type="text/css" media="all" />       
	<link href='css/aos-animation.css' rel='stylesheet prefetch' type="text/css" media="all" />     
	<script src='js/aos.js'></script>       
	<script src="js/aosindex.js"></script>      
	<!-- //js files -->     
    <!-- start-smoth-scrolling -->      
    <script src="js/move-top.js"></script>      
    <script src="js/easing.js"></script>        
    <script>        
        jQuery(document).ready(function($) {        
            $(".scroll").click(function(event) {        
                event.preventDefault();     
                $('html,body').animate({        
                    scrollTop: $(this.hash).offset().top        
                }, 900);        
            });     
        });     
    </script>       
        
     <!-- /js -->       
       <script src="js/bootstrap.js"></script>      
    <!-- //js -->       
</body>     
            
</html>     