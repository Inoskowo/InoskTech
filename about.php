<?php
session_start(); // Inicia la sesión
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <script src="https://kit.fontawesome.com/5536ae2e40.js" crossorigin="anonymous"></script>
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="shortcut icon" href="images/logo.png" />

      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      
      <!-- site metas -->
      <title>Inosk-Tech</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
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
                     <p class="welcome-text"><?php echo $_SESSION['user_name']; ?></p>
                          <?php } ?>
                  </div>
                  </div>
                  <div class="right_main">
                     <?php if (!isset($_SESSION['user_id'])) { // Si no hay una sesión activa ?>
            <a href="login.php"><img src="images/perfil.png" style="max-width: 85%;"></a>
                         <?php } ?>
                  </div>
               <div class="right_main">
                 <div class="togle_main"><a href="carrito.php"><img src="images/bolsa.png" style="max-width: 85%;"></a></div>
               </div>
               <div class="right_main">
                  <div class="togle_main"><a class="class="openbtn onclick="openNav()"><img src="images/togle-menu-icon.png" style="max-width: 100%;"></a></div>
               </div>
            </div>
            </div>
         </div>
      </div>
   </div>
  </div>
     </div>

   <!-- about section start -->
   <div class="about_section layout_padding">
      <div class="container">
         <div class="about_img"><img src="images/about-img1.png" style="max-width: 100%;"></div>
         <h2 class="about_text"><strong>Sobre <span style="color: #000;">Nosotros</span></strong></h2>
         <div class="about_middle">
            <p class="about_lorem">Inosk-Tech nace por la pasion que sentimos hacia el mundo de PC Gamer y los videosjuegos.
               Iniciamos años atras con la venta  ocasional de<br>componentes para computadores,Hace poco decimos lanzarnos al mercado para ofrecer la mejor calidad-precio hacia las personas que deseen <br>entrar a este maravilloso mundo. 
               <br>Lo primorial para nosotros es hacer feliz y sastifacer a nuestros clientes dandoles un muy buen equipo a cambio de un precio justo.<br>
            Evitando asi sobrecostos y dando lo mejor de nosotros para ustedes, ¡Unete a la familia!</p>
         </div>
         <div class="red_bt">
          
         </div>
      </div>
   </div>
   <div class="about_section layout_padding">
      <div class="container">
         <div class="about_img"><img src="images/about-img2.png" style="max-width: 100%;"></div>
         <h2 class="about_text"><strong>Mision  Y<span style="color: #000;"> Vision</span></strong></h2>
         <div class="about_middle">
            <p class="about_lorem"><h2 style="color: #103483;" >Mision:</h2>La misión de Inosk-Tech es ofrecer una experiencia completa y personalizada a los nuevos jugadores que quieren adentrarse en el mundo del PC Gamer. Nuestra empresa se enfoca en guiar y ayudar a nuestros clientes a encontrar el equipo ideal que se ajuste a sus necesidades y presupuesto. Nos esforzamos por brindar un servicio excepcional, proporcionando soluciones innovadoras y tecnológicas para garantizar que nuestros clientes disfruten al máximo de sus juegos favoritos. Además, nos comprometemos a mantenernos actualizados en el mercado de la tecnología para ofrecer siempre las últimas novedades y tendencias en nuestros productos y servicios.<br>
               <h2 style="color: #103483;" >Vision:</h2> La visión de Inosk-Tech es convertirse en la tienda de computadoras de referencia para los gamers en todo el mundo, ofreciendo la mejor selección de componentes y equipos, el mejor servicio al cliente y la experiencia de compra más agradable y satisfactoria posible. Además, busca ser reconocida por su compromiso con la innovación, la calidad y la excelencia en todos los aspectos de su negocio.</p>
         </div>
            <div class="red_bt">
           
         </div>
      </div>
   </div>

   <!-- about section end -->


   <!-- footer section start -->
   <div class="footer_section layout_padding footer_padding">
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
               <h2 class="important_text">Redes Sociales</h2>
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
   <div class="copyright_text">Inosk<a>Tech 2022 - Todos los derechos reservados</a></div>z

   </div>

      <!-- Javascript files-->
      <script src="https://kit.fontawesome.com/5536ae2e40.js" crossorigin="anonymous"></script> 
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