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

      
      <?php
     require_once'php/conexion.php'; 
     $consulta="SELECT `ID`, `Nombre`, `Detalles`, `Precio` FROM `productos`";
	 //AND 'Cantidad_prod='Nombre.categoría';'
     $resultado= mysqli_query($conexion,$consulta);
     $registro = mysqli_num_rows($resultado);
    ?>



      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body>

<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="index.html">Inicio</a>
  <a href="about.html">Sobre Nosotros</a>
  <a href="gallery.html">Computadores</a>
  <a href="contact.html">Contacto</a>

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
                  <div class="togle_main"><a class="class="openbtn onclick="openNav()"><img src="images/perfil.png" style="max-width: 85%;"></a></div>
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
  </div>
     </div>

   <!-- our section start -->
   <div class="our_section layout_padding">
      <div class="container">
         <div class="row">
            <div class="col-sm-12">
               <h1 class="our_text"><strong>Nuestro <span style="color: #000;">Computadores</span></strong></h1>
               <p class="about_lorem">A continuacion podras ver los equipos que tenemos disponibles para ti.
                  
               </p>
            </div>
         </div>
      </div>
      <div class="container">
						<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                            <?php foreach ($resultado as $rows) {
                                # code...
                            
                            ?>

							<div class="col">
								<div class="card shadow-sm">

									<?php
									
									$id = $rows['ID'];

									
									$img = "img/" . $id . "	
									/Principal.jfif";

									//if(!file_exists($img)){
									//	$img = "img/NoDisponible.jpg";
									//}

									?>
									<img src="<?php
										echo $img;
									?>
									" class="
									d-block w-100">
									<div class="card body">
										<h5 class="card-title">
										<?php
										echo $rows['Nombre'];

										?>

										</h5>
										<p class="card-text"><?php
										echo $rows['Detalles'];

										?></p>
										<div class="d-flex justify-content-between align-items-center">
										<div class="btn-group">
											<a href="#" class="btn btn-primary">
                                            <p class="card-text"><?php
										echo $rows['Precio'];

										?></p>
										</a>
											
										</div>
											<a href="#" class="btn btn-success">Comprar</a>
										</div>
									</div>
								</div>
                            </div> 
                        <?php
                        }

                   ?>
               </div>            
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