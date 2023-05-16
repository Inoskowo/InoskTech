<?php
session_start(); // Inicia la sesión
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <link rel="shortcut icon" href="images/logo.png" />
      <!-- site metas -->
      <title>Inosk-Tech</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <script src="https://kit.fontawesome.com/5536ae2e40.js" crossorigin="anonymous"></script>
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
       
      
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body>
      

      <div id="mySidebar" class="sidebar">
         <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
         <a href="index.php">Inicio</a>
         <a href="about.php">Sobre Nosotros</a>
         <a href="gallery.php">Productos</a>
         <a href="contact.php">Contacto</a>
              <?php
  if (isset($_SESSION['user_name'])) {
      echo '<a href="deslogeo.php">Cerrar sesión</a>';
  }
  ?>
</div>


</div>
<div id="main">
      <!-- header section start -->
      <div class="header_section">
        <div class="container-fluid">
         <div class="row">
            <div class="col-sm-4">
            </div>
            <div class="col-sm-4">
               <div class="logo"><img src="images/logo.png"></div>
            </div>
            <div class="col-sm-4">
               <div class="togle_3">
                  <div class="header_main">
                  <div class="left_main">
                     <div class="menu_main">
                        </div>
                  </div>
                  <div class="middle_main">
                  </div>
                    <div class="right_main">
                     <div class="togle_main">
                        <?php if (isset($_SESSION['user_id'])) { // Si hay una sesión activa ?>
                     <p class="welcome-text">Bienvenido <br><?php echo $_SESSION['user_name']; ?></p>
                          <?php } ?>
                  </div>
                  </div>
                  <div class="right_main">
                     <?php if (!isset($_SESSION['user_id'])) { // Si no hay una sesión activa ?>
            <a href="login.php"><img src="images/perfil.png" style="max-width: 85%;"></a>
                         <?php } ?>
                  </div>
                  <div class="right_main">
                     <div class="togle_main"><a class="class="openbtn onclick="openNav()"><img src="images/bolsa.png" style="max-width: 85%;"></a></div>
                  </div>
                  <div class="right_main">
                     <div class="togle_main"><a class="class="openbtn onclick="openNav()"><img src="images/togle-menu-icon.png" style="max-width: 100%;"></a></div>
                  </div>
               </div>
               </div>
            </div>
         </div>
      </div>
      <div class="banner_section layout_padding">
      <div class="container">
      <section >
         <div id="main_slider" class="section carousel slide banner-main" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#main_slider" data-slide-to="0" class="active"></li>
               <li data-target="#main_slider" data-slide-to="1"></li>
               <li data-target="#main_slider" data-slide-to="2"></li>   
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="row marginii">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="carousel-sporrt_text ">
                              <h1 class="sport_text"><strong>PC Gamer<br><span style="color: #fff;">Primer Colmillo</span></strong></h1>
                              <p class="lorem_text">¡Salta a los campos de batalla con el primer colmillo!<br>
                              ¿Estas listo para iniciar en el mundo de pc gamer? Este pc de gama de entrada es para ti! Ideamos este computador para las personas que desean adquirir un computador nuevo y su presupuesto es muy ajustado</p>
                              <button type="button" class="boynow_bt"><a href="https://api.whatsapp.com/send?phone=3196640866&text=Hola,%20Quiero%20comprar%20el%20Primer%20Colmillo!" target="_blank" style="color:#fff">¡Compralo Ahora!</a></button>
                              <button type="button" class="contact_bt"><a href="https://api.whatsapp.com/send?phone=3196640866&text=Hola,Tengo%20dudas%20sobre%20el%20primer%20colmillo" target="_blank" style="color:#fff">Contactanos</a></button>
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="img-box">
                              <figure><img src="images/imgpc.png" style="max-width: 100%;"/></figure>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="container">
                     <div class="row marginii">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="carousel-sporrt_text ">
                              <h1 class="sport_text"><strong>Pc Gamer<br><span style="color: #fff;">Segundo Colmillo</span></strong></h1>
                              <p class="lorem_text">¡Salta a los campos de batalla con el segundo colmillo!<br>
                                 ¿Buscas un computador con el que puedas jugar TODOS los juegos de hoy en dia en una calidad decente? El segundo colmillo es para ti, Ideamos este computador para las personas que desean adquirir un computador calidad-precio el cuales les pueda sastifacer Todas su necesidades a la hora del gaming o trabajo en casa.
   
                              </p>
                              <button type="button" class="boynow_bt"><a href="https://api.whatsapp.com/send?phone=3196640866&text=Hola,Quiero%20Comprar%20el%20Segundo%20Colmillo!" target="_blank" style="color:#fff">¡Compralo Ahora!</a></button>
                              <button type="button" class="contact_bt"><a href="https://api.whatsapp.com/send?phone=3196640866&text=Hola,Tengo%20dudas%20sobre%20el%20Segundo%20Colmillo!" target="_blank" style="color:#fff">Contactanos</a></button>
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="img-box">
                              <figure><img src="images/imgpc2.png" style="max-width: 100%;"/></figure>
                           </div>
                        </div>
                     </div>
                  </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="row marginii">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="carousel-sporrt_text ">
                              <h1 class="sport_text"><strong>Pc Gamer<br><span style="color: #fff;">Tercer Colmillo</span></strong></h1>
                              <p class="lorem_text">¡Salta a los campos de batalla con el tercer colmillo!<br>
                                 ¿Estas preparado para otro nivel? El tercer colmillo te puede ayudar con tareas que requieran bastante recursividad en un equipo y ademas puedes disfutar de juegos en su calidad ULTRA, Ideamos este computador para las personas que desean adquirir un equipo para tareas pesadas.
                              </p>
                              <button type="button" class="boynow_bt"><a href="https://api.whatsapp.com/send?phone=3196640866&text=Hola,Quiero%20Comprar%20el%20Tercer%20Colmillo!" target="_blank" style="color:#fff">¡Compralo Ahora!</a></button>
                              <button type="button" class="contact_bt"><a href="https://api.whatsapp.com/send?phone=3196640866&text=Hola,Tengo%20dudas%20sobre%20el%20Tercer%20Colmillo!" target="_blank" style="color:#fff">Contactanos</a></button>
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="img-box">
                              <figure><img src="images/imgpc3.jpg" style="max-width: 100%;"/></figure>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      </div>
      </div>
   </div>
   </div>
   <!-- about section start -->
   <div class="container-fluid">
   <div class="about_section">
      <div class="container">
         <div class="about_img"><img src="images/about-img1.png" style="max-width: 100%;"></div>
         <h2 class="about_text"><strong>Sobre <span style="color: #000;">Nosotros</span></strong></h2>
         <div class="about_middle">
            <p class="about_lorem">Inosk-Tech nace por la pasion que sentimos hacia el mundo de PC Gamer y de los videosjuegos.
            Iniciamos años atras con la venta de ocasional de<br>componentes para computadores, Hace poco decimos lanzarnos al mercado para ofrecer la mejor calidad-precio hacia las personas que deseen <br>entrar a este maravilloso mundo. 
            <br>Lo primorial para nosotros es hacer feliz y sastifacer a nuestros clientes dandoles un muy buen equipo a cambio de un precio justo.<br>
         Evitando asi sobrecostos y dando lo mejor de nosotros para ustedes, ¡Unete a la familia!</p>
   
      </div>
   </div>
   </div>
   <!-- about section end -->
   <!-- our section start -->
   <div class="our_section">
      <div class="container">
         <div class="row">
            <div class="col-sm-12">
               <h1 class="our_text"><strong> Nuestros <span style="color: #000;">Ensambles</span></strong></h1>
               <p class="about_lorem">A continuacion podras ver algunos ensambles que hemos hechos para algunos clientes, Esperamos que te animen a comprar con nosotros!</p>
            </div>
         </div>
      </div>
      <div class="our_section_2">
         <div class="our_main">
            <div id="my_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
               <div class="carousel-item active">
                  <video class="d-block w-100" src="images/meow1.mp4" controls autobuffer height="610" autoplay></video>
               </div>
               <div class="carousel-item">
                  <video class="d-block w-100" src="images/meow2.mp4" controls autobuffer  height="610" autoplay></video>
               </div>
               <div class="carousel-item">
                  <video class="d-block w-100" src="images/meow3.mp4" controls autobuffer  height="610" autoplay></video>
               </div>
            </div>
               <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                 <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                 <span class="sr-only">Previous</span>
               </a>
               <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                 <span class="carousel-control-next-icon" aria-hidden="true"></span>
                 <span class="sr-only">Next</span>
               </a>
            </div>
          </div>

      </div>
   </div>
   
   <!-- Testimonial section end -->
   <!-- footer section start -->
   <div class="footer_section layout_padding">
      <div class="container">
         <div class="row">
            <div class="col-sm-4">
               <h2 class="important_text">Inosk-Tech</h2>
               <div class="footer_menu">
                  <ul>
                     <li><a href="#">Puntos de Venta: Calle 22J #113-46</a></li>
                     <li><a href="#">Correo: VentasInoskTech@Gmail.com</a></li>
               
                  </ul>
               </div>
            </div>
            <div class="col-sm-4">
               <h2 class="important_text">Redes Sociales:</h2>
               <div class="footer_menu">
                  <ul>
                     <li>  <i class="fa-brands fa-instagram"></i>
                     <a href="https://www.instagram.com/inosktech/"  target="_blank" >  Instagram  </a></li> 
                     <li>   <i class="fa-brands fa-whatsapp"></i>
                     <a href="https://api.whatsapp.com/send/?phone=%2B573196640866&text&type=phone_number&app_absent=0"  target="_blank ">  Whatsapp  </a></li> 
                  </ul>
               </div>
            </div>
            <div class="col-sm-4">
               <h2 class="important_text">Newsletter</h2>
               <p class="footer_lorem_text">¿Quieres recibir nuestras promociones?</p>
               <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Ingresa tu email" aria-label="Recipient's username" aria-describedby=" basic-addon2">
                  <div class="input-group-append">
                     <span class="input-group-text" id="basic-addon2">Enviar</span>
                  </div>
               </div>
            </div>
         </div>   
      </div>
   </div>
   <!-- footer section start -->
   <!-- copyright section start -->
   <div class="copyright_text">Inosk<a>Tech 2022 - Todos los derechos reservados</a></div>

   </div>

      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
         $(document).ready(function() {
             $(".fancybox").fancybox({
                 openEffect: "none",
                 closeEffect: "none"
             });
             $('#myCarousel').carousel({
                 interval: false
             });
         });
         </script>

      <script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}


</script>

   </body>
   </html>