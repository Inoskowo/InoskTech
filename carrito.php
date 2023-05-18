<?php
 include('php/carrito.php')
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


<!-- our section start -->
<!-- our section start -->
<div class="our_section layout_padding">
   <div class="container">
      <div class="row">
         <div class="col-sm-12">
            <h1 class="our_text"><strong>Tu <span style="color: #000;">Compra</span></strong></h1>
            <p class="about_lorem">A continuación verás los productos que añadiste a tu carrito de compras para continuar con el pago.</p>
         </div>
      </div>
   </div>
<div class="container">
   <table class="table">
      <thead>
         <tr>
            <th>Imagen</th>
            <th>Producto</th>
            <th>Precio</th>
            <th>Acciones</th>
         </tr>
      </thead>
      <tbody>
         <?php
         if (isset($_SESSION['carrito']) && count($_SESSION['carrito']) > 0) {
            $productos = $_SESSION['carrito'];
            $total = 0;
            foreach ($productos as $indice => $producto) {
               $img = "img/{$producto['id']}/Principal.jfif";
               $total += $producto['precio'];
         ?>
               <tr>
                  <td><img src="<?php echo $img; ?>" alt="Imagen del producto" style="width: 100px; height: 100px;"></td>
                  <td><?php echo $producto['nombre']; ?></td>
                  <td><?php echo $producto['precio']; ?></td>
                  <td>
                     <form action="php/eliminarproducto.php" method="post">
                        <input type="hidden" name="indice" value="<?php echo $indice; ?>">
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                     </form>
                  </td>
               </tr>
         <?php
            }
            echo "<tr><td colspan='4'>Total: $total</td></tr>";
         } else {
            echo "<tr><td colspan='4'>No hay productos en el carrito</td></tr>";
         }
         ?>
      </tbody>
   </table>
</div>



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
               <h2 class="important_text">Redes Sociales</h2>
               <div class="footer_menu">
                  <ul>
                     <li>  <i class="fa-brands fa-instagram"></i>
                        <a href="https://www.instagram.com/inosktech/  target="_blank" >  Instagram  </a></li> 
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
      <script src="https://kit.fontawesome.com/5536ae2e40.js" crossorigin="anonymous"></script> 
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