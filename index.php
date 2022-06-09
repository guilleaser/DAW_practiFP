<!DOCTYPE html>
<html style="font-size: 16px;">
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta charset="utf-8">
      <meta name="keywords" content="corporate, ​​We have the knowledge and experience, 01, 02, ​​We run all kinds of IT services that vow your success, ​We believe that people can be truly happy on the outside only after reaching happiness within., ​Looking For Visa Applications Just Call Us!, Meet The Team, ​Large payments volume or unique business model?, ​Small Pricing Plan For Your Creative Business">
      <meta name="description" content="">
      <meta name="page_type" content="np-template-header-footer-from-plugin">
      <title>Inicio</title>
      <link rel="stylesheet" href="css/Estilos.css" media="screen">
      <link rel="stylesheet" href="css/index.css" media="screen">
      <script class="u-script" type="text/javascript" src="js/jquery-1.9.1.min.js" defer=""></script>
      <script class="u-script" type="text/javascript" src="js/Funciones.js" defer=""></script>
      <meta name="generator" content="Nicepage 4.7.8, nicepage.com">
      <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
      <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
      <script type="application/ld+json">{
         "@context": "http://schema.org",
         "@type": "Organization",
         "name": "",
         "url": "/",
         "logo": "images/logo_practifp.JPG"
         }
      </script>
      <meta name="theme-color" content="#4d6eaa">
      <meta property="og:title" content="Inicio">
      <meta property="og:type" content="website">
      <link rel="canonical" href="/">
      <?php session_start();?>
   </head>
   <body class="u-body u-overlap u-xl-mode">
      <!-- politica de COOKIES -->
      <script type="text/javascript" src="js/cookies.js"></script>
      <script> window.start.init({Palette:"palette6",Mode:"banner bottom",Theme:"classic",ButtonText:"Aceptar politica",LinkText:"Leer más",Location:"Esta web utiliza cookies pra asegurar la mejor experiencia para el usuario en nuestra web.",Time:"5",})</script>
      <header class="u-clearfix u-header u-palette-1-base u-header" id="sec-4472">
         <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <a href="index.php" class="u-image u-logo u-image-1" data-image-width="80" data-image-height="40">
            <img src="images/logo_practifp.JPG" style="height: 40px;">
            </a>
            <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
               <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
                  <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
                     <svg class="u-svg-link" viewBox="0 0 24 24">
                        <use xlink:href="#menu-hamburger"></use>
                     </svg>
                     <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
                        <g>
                           <rect y="1" width="16" height="2"></rect>
                           <rect y="7" width="16" height="2"></rect>
                           <rect y="13" width="16" height="2"></rect>
                        </g>
                     </svg>
                  </a>
               </div>
               <!--NAVEGADOR-->
               <div class="u-custom-menu u-nav-container">
                  <ul class="u-nav u-spacing-20 u-unstyled u-nav-1">
                     <li class="u-nav-item">
                        <a class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-palette-4-base u-text-hover-palette-4-base u-text-white" href="index.php" style="padding: 10px;">Inicio</a>
                     </li>
                     <!-- CODIGO PHP QUE MUESTRA DIFERENTES OPCIONES EN EL MENU SEGUN EL USUARIO QUE SE REGISTRE -->
                     <?php 
                        if(isset($_SESSION['usuario']) || isset($_COOKIE['user'])){
                           if($_SESSION['usuario'] == "ESTUDIANTE" || isset($_COOKIE['estudiante'])){
                              echo "<li class='u-nav-item'>
                              <a class='u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-palette-4-base u-text-hover-palette-4-base u-text-white' href='Mi-Perfil_Estudiante.php' style='padding: 10px;'>Mi perfil</a>
                           </li>";
                           } elseif ($_SESSION['usuario'] == "EMPRESA" || isset($_COOKIE['empresa'])) {
                              
                              echo "<li class='u-nav-item'>
                              <a class='u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-palette-4-base u-text-hover-palette-4-base u-text-white' href='Mi-Perfil_Empresa.php' style='padding: 10px;'>Mi perfil</a>
                           </li>";
                           } 
                           elseif($_SESSION['usuario'] == "ADMIN" || isset($_COOKIE['admin'])){

                              echo"<li class='u-nav-item'>
                              <a class='u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-palette-4-base u-text-hover-palette-4-base u-text-white' href='Administrador.php' style='padding: 10px;'>Administrador</a>
                           </li>";
                           }
                        } 
                     ?>
                     <!-- FIN DEL CODIGO PHP -->
                     <!-- COndiciona de log in aparece si no esta logeado -->
                     <?php if(!isset($_SESSION['usuario'])){
                        echo "<li class='u-nav-item'>
                        <a class='u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-palette-4-base u-text-hover-palette-4-base u-text-white' href='Login.php' style='padding: 10px;'>Log in</a>
                        <div class='u-nav-popup'>
                           <ul class='u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-2'>
                              <li class='u-nav-item'><a class='u-active-palette-4-base u-button-style u-nav-link u-palette-3-base' href='Registro.php'>Registro</a></li>
                           </ul>
                        </div>
                     </li>";
                     }?>
                     <!-- Fin del logeo -->
                     <li class="u-nav-item"><a class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-palette-4-base u-text-hover-palette-4-base u-text-white" href="Ofertas.php" style="padding: 10px;">Ofertas</a></li>
                     <li class="u-nav-item">
                        <a class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-palette-4-base u-text-hover-palette-4-base u-text-white" href="Contacto.php" style="padding: 10px;">Contacto</a>
                        <div class="u-nav-popup">
                           <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-3">
                              <li class="u-nav-item"><a class="u-active-palette-4-base u-button-style u-nav-link u-palette-3-base" href="Terminos-y-Condiciones.php">Terminos y Condiciones</a></li>
                           </ul>
                        </div>
                     </li>
                     <li class="u-nav-item">
                        <a class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-palette-4-base u-text-hover-palette-4-base u-text-white" href="./php/cerrar_sesion.php" style="padding: 10px;"><img src="images/logo_cerrarsesion.png" id="cerrar_sesion" alt="Foto"></a>
                     </li>
                  </ul>
               </div>
               <!-- Navegador lateral con pantalla reducida -->
               <div class="u-custom-menu u-nav-container-collapse">
                  <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                     <div class="u-inner-container-layout u-sidenav-overflow">
                        <div class="u-menu-close"></div>
                        <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-4">
                           <li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.php">Inicio</a></li>
                           <!-- Mi perfil solo aparecera cuando se ahya inicado sesion -->
                           <?php 
                              if(isset($_SESSION['usuario']) || isset($_COOKIE['user'])){
                                 if($_SESSION['usuario'] == "ESTUDIANTE" || isset($_COOKIE['estudiante'])){
                                    echo " <li class='u-nav-item'>
                                    <a class='u-button-style u-nav-link' href='Mi-Perfil_Estudiante.php'>Mi perfil</a>
                                 </li>";
                                 } elseif ($_SESSION['usuario'] == "EMPRESA" || isset($_COOKIE['empresa'])){
                                    echo " <li class='u-nav-item'>
                                    <a class='u-button-style u-nav-link' href='Mi-Perfil_EEmpresa.php'>Mi perfil</a>
                                 </li>";
                                 }
                                 elseif($_SESSION['usuario'] == "ADMIN" || isset($_COOKIE['admin'])){
                                    echo"<li class='u-nav-item'>
                                    <a class='u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-palette-4-base u-text-hover-palette-4-base u-text-white' href='Administrador.php' style='padding: 10px;'>Administrador</a>
                                 </li>";
                                 }
                              }
                           ?>
                           <!-- fin mi perfil -->
                           <!-- COndicional logeo -->
                           <?php if(!isset($_SESSION['usuario'])){
                              echo "<li class='u-nav-item'>
                              <a class='u-active-palette-4-base u-button-style u-nav-link u-palette-3-base' href='Login.php'>Log in</a>
                              <div class='u-nav-popup'>
                                 <ul class='u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-5'>
                                    <li class='u-nav-item'><a class='u-active-palette-4-base u-button-style u-nav-link u-palette-3-base' href='Registro.php'>Registro</a></li>
                                 </ul>
                              </div>
                           </li>";
                           }?>
                           <!-- fin logeo -->
                           <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Ofertas.php">Ofertas</a></li>
                           <li class="u-nav-item">
                              <a class="u-button-style u-nav-link" href="Contacto.php">Contacto</a>
                              <div class="u-nav-popup">
                                 <ul class="u-h-spacing-20 u-nav u-unstyled u-v-spacing-10 u-nav-6">
                                    <li class="u-nav-item"><a class="u-active-palette-4-base u-button-style u-nav-link u-palette-3-base" href="Terminos-y-Condiciones.php">Terminos y Condiciones</a></li>
                                 </ul>
                              </div>
                           </li>
                           <li class="u-nav-item">
                              <a class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-palette-4-base u-text-hover-palette-4-base u-text-white" href="./php/cerrar_sesion.php" style="padding: 10px;"><img src="images/logo_cerrarsesion.png" id="cerrar_sesion" alt="Foto"></a>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
               </div>
            </nav>
         </div>
      </header>
      <section class="u-align-center u-clearfix u-palette-1-dark-3 u-section-1" id="carousel_f9e6">
         <div class="u-clearfix u-sheet u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-sheet-1">
            <h1 class="u-text u-text-default u-text-1" data-animation-name="customAnimationIn" data-animation-duration="2000">Practi<font color="#4d6eaa">fp</font>
            </h1>
            <h5 class="u-text u-text-default u-text-2"> Unimos empresas y estudiantes</h5>
         </div>
      </section>
      <section class="u-clearfix u-section-2" id="sec-b882">
         <div class="u-expanded-width u-list u-list-1">
            <div class="u-repeater u-repeater-1">
               <div class="u-container-style u-custom-item u-list-item u-palette-3-base u-repeater-item u-list-item-1">
                  <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
                     <h1 class="u-align-center u-text u-text-default u-title u-text-1">Eres&nbsp;<br>estudiante
                     </h1>
                     <a href="Registro.php" class="u-active-palette-1-light-2 u-border-none u-btn u-btn-round u-button-style u-custom-item u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-btn-1">REGISTRATE</a>
                  </div>
               </div>
               <div class="u-container-style u-custom-item u-list-item u-palette-1-base u-repeater-item u-list-item-2">
                  <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2">
                     <h1 class="u-align-center u-text u-text-default u-title u-text-2">Eres&nbsp;<br>empresa
                     </h1>
                     <a href="Registro.php" class="u-active-palette-3-light-2 u-border-none u-btn u-btn-round u-button-style u-custom-item u-palette-3-base u-radius-50 u-btn-2">REGISTRATE</a>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="u-align-center u-clearfix u-grey-5 u-typography-Normal--Introduction u-section-3" src="" id="carousel_8b49">
         <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-border-6 u-border-palette-1-base u-line u-line-horizontal u-line-1"></div>
            <h6 class="u-text u-text-default u-text-1"></h6>
            <h2 class="u-text u-text-default u-text-2"> El trabajo que deseas a un paso</h2>
            <p class="u-text u-text-3">Conectamos estudiantes y empresas para ofrecer la oportunidad de colaborar en las practicas de formación profesional.</p>
         </div>
      </section>
      <section class="u-align-center u-clearfix u-section-4" id="carousel_d8fd">
         <div class="u-clearfix u-sheet u-sheet-1">
            <h2 class="u-text u-text-default u-text-palette-1-base u-text-1">Experiencias</h2>
            <div class="u-expanded-width u-list u-list-1">
               <div class="u-repeater u-repeater-1">
                  <div class="u-align-center u-container-style u-list-item u-palette-1-base u-radius-22 u-repeater-item u-shape-round u-list-item-1">
                     <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
                        <div alt="" class="u-image u-image-circle u-image-1" data-image-width="1000" data-image-height="876"></div>
                        <h6 class="u-text u-text-default u-text-palette-1-light-2 u-text-2">Alexandra López</h6>
                        <p class="u-text u-text-3">"Es una apliacción útil que puede facilita las gestiones de encontrar empresa."</p>
                     </div>
                  </div>
                  <div class="u-align-center u-container-style u-list-item u-palette-1-base u-radius-22 u-repeater-item u-shape-round u-list-item-2">
                     <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2">
                        <div alt="" class="u-image u-image-circle u-image-2" data-image-width="800" data-image-height="800"></div>
                        <h6 class="u-text u-text-default u-text-palette-1-light-2 u-text-4">Ignacio Garcia</h6>
                        <p class="u-text u-text-5">"Todos los institutos debería utilizar practiFP para ayudar a los alumnos a encontrar empresa."</p>
                     </div>
                  </div>
                  <div class="u-align-center u-container-style u-list-item u-palette-1-base u-radius-22 u-repeater-item u-shape-round u-list-item-3">
                     <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
                        <div alt="" class="u-image u-image-circle u-image-3" data-image-width="626" data-image-height="417"></div>
                        <h6 class="u-text u-text-default u-text-palette-1-light-2 u-text-6"> Paula Rodríguez</h6>
                        <p class="u-text u-text-7">"Nos puede ayudar a encontrar candidatos para nuestra empresa."</p>
                     </div>
                  </div>
                  <div class="u-align-center u-container-style u-list-item u-palette-1-base u-radius-22 u-repeater-item u-shape-round u-list-item-4">
                     <div class="u-container-layout u-similar-container u-valign-top u-container-layout-4">
                        <div alt="" class="u-image u-image-circle u-image-4" data-image-width="995" data-image-height="1080"></div>
                        <h6 class="u-text u-text-default u-text-palette-1-light-2 u-text-8"> Pedro Nate</h6>
                        <p class="u-text u-text-9">"Tenemos acceso a los candidatos para poder seleccionar el mejor."</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="u-clearfix u-palette-1-dark-3 u-section-5" id="carousel_8239">
         <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
               <div class="u-layout">
                  <div class="u-layout-row">
                     <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-1">
                        <div class="u-container-layout u-valign-bottom u-container-layout-1">
                           <h6 class="u-text u-text-body-alt-color u-text-default u-text-1">sobre nosotros</h6>
                           <h2 class="u-text u-text-2"> Buscamos facilitar las búsquedas de oportunidades para empresas y estudiantes</h2>
                           <h5 class="u-custom-font u-font-montserrat u-text u-text-3"> Ofrecemos la posibilidad de que tanto estudiatnes como empresas puedan tener la facilidad de conectar.</h5>
                        </div>
                     </div>
                     <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-2" data-animation-name="customAnimationIn" data-animation-duration="2000">
                        <div class="u-container-layout u-valign-middle u-container-layout-2">
                           <h5 class="u-text u-text-default u-text-4">Sencillez</h5>
                           <p class="u-text u-text-5">De forma sencilla e intuitiva se pueden ver los diferentes perfiles tanto de las empresas como de los estudiantes.</p>
                           <h5 class="u-text u-text-default u-text-6">Publicitarse</h5>
                           <p class="u-text u-text-7">Es una manera sencilla de darse a conocer tanto para las empresas que buscan personal cualificado como para los estudaintes que buscan una oportunidad.</p>
                           <h5 class="u-text u-text-default u-text-8">Resultados</h5>
                           <p class="u-text u-text-9">Ahorramos tiempo en busquedas de personal y de empresas dentro del sector.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="u-align-center u-clearfix u-valign-top-lg u-valign-top-xl u-section-6" id="carousel_8ac6">
         <div class="u-expanded-width u-palette-1-base u-shape u-shape-rectangle u-shape-1"></div>
         <h2 class="u-text u-text-body-alt-color u-text-default u-text-1">Nuestro equipo</h2>
         <div class="u-list u-list-1">
            <div class="u-repeater u-repeater-1">
               <div class="u-align-center u-container-style u-list-item u-repeater-item u-white u-list-item-1" data-animation-name="customAnimationIn" data-animation-duration="2000">
                  <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
                     <img alt="" class="u-image u-image-default u-image-1" data-image-width="1000" data-image-height="1500" src="images/guille.jpg">
                     <h3 class="u-text u-text-2">Guillermo García</h3>
                     <p class="u-text u-text-palette-1-base u-text-3">Consultor SAP BW</p>
                     <p class="u-text u-text-4">Estudió en el centro IES Ciudad Escolar el grado superior en desarrollo de aplicaciones web</p>
                     <div class="u-social-icons u-spacing-10 u-social-icons-1">
                        <a class="u-social-url" target="_blank" href="http://www.facebook.com">
                           <span class="u-icon u-icon-circle u-social-facebook u-social-icon u-icon-1">
                              <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" >
                                 <use xlink:href="#svg-ad72"></use>
                              </svg>
                              <svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-ad72" class="u-svg-content">
                                 <path d="M75.5,28.8H65.4c-1.5,0-4,0.9-4,4.3v9.4h13.9l-1.5,15.8H61.4v45.1H42.8V58.3h-8.8V42.4h8.8V32.2 c0-7.4,3.4-18.8,18.8-18.8h13.8v15.4H75.5z"></path>
                              </svg>
                           </span>
                        </a>
                        <a class="u-social-url" target="_blank" href="http://www.twitter.com">
                           <span class="u-icon u-icon-circle u-social-icon u-social-twitter u-icon-2">
                              <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" >
                                 <use xlink:href="#svg-f916"></use>
                              </svg>
                              <svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-f916" class="u-svg-content">
                                 <path d="M92.2,38.2c0,0.8,0,1.6,0,2.3c0,24.3-18.6,52.4-52.6,52.4c-10.6,0.1-20.2-2.9-28.5-8.2 c1.4,0.2,2.9,0.2,4.4,0.2c8.7,0,16.7-2.9,23-7.9c-8.1-0.2-14.9-5.5-17.3-12.8c1.1,0.2,2.4,0.2,3.4,0.2c1.6,0,3.3-0.2,4.8-0.7 c-8.4-1.6-14.9-9.2-14.9-18c0-0.2,0-0.2,0-0.2c2.5,1.4,5.4,2.2,8.4,2.3c-5-3.3-8.3-8.9-8.3-15.4c0-3.4,1-6.5,2.5-9.2 c9.1,11.1,22.7,18.5,38,19.2c-0.2-1.4-0.4-2.8-0.4-4.3c0.1-10,8.3-18.2,18.5-18.2c5.4,0,10.1,2.2,13.5,5.7c4.3-0.8,8.1-2.3,11.7-4.5 c-1.4,4.3-4.3,7.9-8.1,10.1c3.7-0.4,7.3-1.4,10.6-2.9C98.9,32.3,95.7,35.5,92.2,38.2z"></path>
                              </svg>
                           </span>
                        </a>
                        <a class="u-social-url" target="_blank" href="http://www.instagram.com">
                           <span class="u-icon u-icon-circle u-social-icon u-social-instagram u-icon-3">
                              <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" >
                                 <use xlink:href="#svg-a0a0"></use>
                              </svg>
                              <svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-a0a0" class="u-svg-content">
                                 <path d="M55.9,32.9c-12.8,0-23.2,10.4-23.2,23.2s10.4,23.2,23.2,23.2s23.2-10.4,23.2-23.2S68.7,32.9,55.9,32.9z M55.9,69.4c-7.4,0-13.3-6-13.3-13.3c-0.1-7.4,6-13.3,13.3-13.3s13.3,6,13.3,13.3C69.3,63.5,63.3,69.4,55.9,69.4z"></path>
                                 <path d="M79.7,26.8c-3,0-5.4,2.5-5.4,5.4s2.5,5.4,5.4,5.4c3,0,5.4-2.5,5.4-5.4S82.7,26.8,79.7,26.8z"></path>
                                 <path d="M78.2,11H33.5C21,11,10.8,21.3,10.8,33.7v44.7c0,12.6,10.2,22.8,22.7,22.8h44.7c12.6,0,22.7-10.2,22.7-22.7 V33.7C100.8,21.1,90.6,11,78.2,11z M91,78.4c0,7.1-5.8,12.8-12.8,12.8H33.5c-7.1,0-12.8-5.8-12.8-12.8V33.7 c0-7.1,5.8-12.8,12.8-12.8h44.7c7.1,0,12.8,5.8,12.8,12.8V78.4z"></path>
                              </svg>
                           </span>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="u-align-center u-container-style u-list-item u-repeater-item u-white u-list-item-2" data-animation-name="customAnimationIn" data-animation-duration="2000">
                  <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2">
                     <img alt="" class="u-image u-image-default u-image-1" data-image-width="1000" data-image-height="1500" src="images/Andres.jpg">
                     <h3 class="u-text u-text-5">Andrés Cámara</h3>
                     <p class="u-text u-text-palette-1-base u-text-6">Back-End Developer</p>
                     <p class="u-text u-text-7">Estudió en el centro IES Ciudad Escolar el grado superior en desarrollo de aplicaciones web</p>
                     <div class="u-social-icons u-spacing-10 u-social-icons-2">
                        <a class="u-social-url" target="_blank" href="http://www.facebook.com">
                           <span class="u-icon u-icon-circle u-social-facebook u-social-icon u-icon-4">
                              <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" >
                                 <use xlink:href="#svg-ad72"></use>
                              </svg>
                              <svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-ad72" class="u-svg-content">
                                 <path d="M75.5,28.8H65.4c-1.5,0-4,0.9-4,4.3v9.4h13.9l-1.5,15.8H61.4v45.1H42.8V58.3h-8.8V42.4h8.8V32.2 c0-7.4,3.4-18.8,18.8-18.8h13.8v15.4H75.5z"></path>
                              </svg>
                           </span>
                        </a>
                        <a class="u-social-url" target="_blank" href="http://www.twitter.com">
                           <span class="u-icon u-icon-circle u-social-icon u-social-twitter u-icon-5">
                              <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" >
                                 <use xlink:href="#svg-f916"></use>
                              </svg>
                              <svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-f916" class="u-svg-content">
                                 <path d="M92.2,38.2c0,0.8,0,1.6,0,2.3c0,24.3-18.6,52.4-52.6,52.4c-10.6,0.1-20.2-2.9-28.5-8.2 c1.4,0.2,2.9,0.2,4.4,0.2c8.7,0,16.7-2.9,23-7.9c-8.1-0.2-14.9-5.5-17.3-12.8c1.1,0.2,2.4,0.2,3.4,0.2c1.6,0,3.3-0.2,4.8-0.7 c-8.4-1.6-14.9-9.2-14.9-18c0-0.2,0-0.2,0-0.2c2.5,1.4,5.4,2.2,8.4,2.3c-5-3.3-8.3-8.9-8.3-15.4c0-3.4,1-6.5,2.5-9.2 c9.1,11.1,22.7,18.5,38,19.2c-0.2-1.4-0.4-2.8-0.4-4.3c0.1-10,8.3-18.2,18.5-18.2c5.4,0,10.1,2.2,13.5,5.7c4.3-0.8,8.1-2.3,11.7-4.5 c-1.4,4.3-4.3,7.9-8.1,10.1c3.7-0.4,7.3-1.4,10.6-2.9C98.9,32.3,95.7,35.5,92.2,38.2z"></path>
                              </svg>
                           </span>
                        </a>
                        <a class="u-social-url" target="_blank" href="http://www.instagram.com">
                           <span class="u-icon u-icon-circle u-social-icon u-social-instagram u-icon-6">
                              <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" >
                                 <use xlink:href="#svg-a0a0"></use>
                              </svg>
                              <svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-a0a0" class="u-svg-content">
                                 <path d="M55.9,32.9c-12.8,0-23.2,10.4-23.2,23.2s10.4,23.2,23.2,23.2s23.2-10.4,23.2-23.2S68.7,32.9,55.9,32.9z M55.9,69.4c-7.4,0-13.3-6-13.3-13.3c-0.1-7.4,6-13.3,13.3-13.3s13.3,6,13.3,13.3C69.3,63.5,63.3,69.4,55.9,69.4z"></path>
                                 <path d="M79.7,26.8c-3,0-5.4,2.5-5.4,5.4s2.5,5.4,5.4,5.4c3,0,5.4-2.5,5.4-5.4S82.7,26.8,79.7,26.8z"></path>
                                 <path d="M78.2,11H33.5C21,11,10.8,21.3,10.8,33.7v44.7c0,12.6,10.2,22.8,22.7,22.8h44.7c12.6,0,22.7-10.2,22.7-22.7 V33.7C100.8,21.1,90.6,11,78.2,11z M91,78.4c0,7.1-5.8,12.8-12.8,12.8H33.5c-7.1,0-12.8-5.8-12.8-12.8V33.7 c0-7.1,5.8-12.8,12.8-12.8h44.7c7.1,0,12.8,5.8,12.8,12.8V78.4z"></path>
                              </svg>
                           </span>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="u-align-center u-container-style u-list-item u-repeater-item u-white u-list-item-3" data-animation-name="customAnimationIn" data-animation-duration="2000">
                  <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
                     <img alt="" class="u-image u-image-default u-image-3" src="images/Jorge.jpeg" data-image-width="1000" data-image-height="1500">
                     <h3 class="u-text u-text-8">Jorge Chivato</h3>
                     <p class="u-text u-text-palette-1-base u-text-9">Consultor SAP BW</p>
                     <p class="u-text u-text-10">Estudió en el centro IES Ciudad Escolar el grado superior en desarrollo de aplicaciones web</p>
                     <div class="u-social-icons u-spacing-10 u-social-icons-3">
                        <a class="u-social-url" target="_blank" href="http://www.facebook.com">
                           <span class="u-icon u-icon-circle u-social-facebook u-social-icon u-icon-7">
                              <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" >
                                 <use xlink:href="#svg-ad72"></use>
                              </svg>
                              <svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-ad72" class="u-svg-content">
                                 <path d="M75.5,28.8H65.4c-1.5,0-4,0.9-4,4.3v9.4h13.9l-1.5,15.8H61.4v45.1H42.8V58.3h-8.8V42.4h8.8V32.2 c0-7.4,3.4-18.8,18.8-18.8h13.8v15.4H75.5z"></path>
                              </svg>
                           </span>
                        </a>
                        <a class="u-social-url" target="_blank" href="http://www.twitter.com">
                           <span class="u-icon u-icon-circle u-social-icon u-social-twitter u-icon-8">
                              <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" >
                                 <use xlink:href="#svg-f916"></use>
                              </svg>
                              <svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-f916" class="u-svg-content">
                                 <path d="M92.2,38.2c0,0.8,0,1.6,0,2.3c0,24.3-18.6,52.4-52.6,52.4c-10.6,0.1-20.2-2.9-28.5-8.2 c1.4,0.2,2.9,0.2,4.4,0.2c8.7,0,16.7-2.9,23-7.9c-8.1-0.2-14.9-5.5-17.3-12.8c1.1,0.2,2.4,0.2,3.4,0.2c1.6,0,3.3-0.2,4.8-0.7 c-8.4-1.6-14.9-9.2-14.9-18c0-0.2,0-0.2,0-0.2c2.5,1.4,5.4,2.2,8.4,2.3c-5-3.3-8.3-8.9-8.3-15.4c0-3.4,1-6.5,2.5-9.2 c9.1,11.1,22.7,18.5,38,19.2c-0.2-1.4-0.4-2.8-0.4-4.3c0.1-10,8.3-18.2,18.5-18.2c5.4,0,10.1,2.2,13.5,5.7c4.3-0.8,8.1-2.3,11.7-4.5 c-1.4,4.3-4.3,7.9-8.1,10.1c3.7-0.4,7.3-1.4,10.6-2.9C98.9,32.3,95.7,35.5,92.2,38.2z"></path>
                              </svg>
                           </span>
                        </a>
                        <a class="u-social-url" target="_blank" href="http://www.instagram.com">
                           <span class="u-icon u-icon-circle u-social-icon u-social-instagram u-icon-9">
                              <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" >
                                 <use xlink:href="#svg-a0a0"></use>
                              </svg>
                              <svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-a0a0" class="u-svg-content">
                                 <path d="M55.9,32.9c-12.8,0-23.2,10.4-23.2,23.2s10.4,23.2,23.2,23.2s23.2-10.4,23.2-23.2S68.7,32.9,55.9,32.9z M55.9,69.4c-7.4,0-13.3-6-13.3-13.3c-0.1-7.4,6-13.3,13.3-13.3s13.3,6,13.3,13.3C69.3,63.5,63.3,69.4,55.9,69.4z"></path>
                                 <path d="M79.7,26.8c-3,0-5.4,2.5-5.4,5.4s2.5,5.4,5.4,5.4c3,0,5.4-2.5,5.4-5.4S82.7,26.8,79.7,26.8z"></path>
                                 <path d="M78.2,11H33.5C21,11,10.8,21.3,10.8,33.7v44.7c0,12.6,10.2,22.8,22.7,22.8h44.7c12.6,0,22.7-10.2,22.7-22.7 V33.7C100.8,21.1,90.6,11,78.2,11z M91,78.4c0,7.1-5.8,12.8-12.8,12.8H33.5c-7.1,0-12.8-5.8-12.8-12.8V33.7 c0-7.1,5.8-12.8,12.8-12.8h44.7c7.1,0,12.8,5.8,12.8,12.8V78.4z"></path>
                              </svg>
                           </span>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="u-clearfix u-grey-5 u-section-7" id="carousel_3693">
         <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
               <div class="u-layout">
                  <div class="u-layout-row">
                     <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-1">
                        <div class="u-container-layout u-valign-bottom-sm u-valign-bottom-xl u-container-layout-1">
                           <img class="u-image u-image-1" src="images/ga65cbb730950b6d04d51936a8a3356c32112b2b21990fba9c1678f2258f5c7eaaafc4a30802103f2a8964b067d6bc7fd57650340bfa970898a5659d942396ba2_1280.jpg" data-image-width="1280" data-image-height="853">
                           <div class="u-align-center u-container-style u-group u-palette-1-base u-group-1" data-animation-name="slideIn" data-animation-duration="2000" data-animation-direction="Right">
                              <div class="u-container-layout u-valign-middle u-container-layout-2">
                                 <p class="u-custom-font u-heading-font u-text u-text-1"> Colaboramos con centros educativos y empresas para dar la oportunidad de conectar estudiantes y empresas</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="u-align-left u-container-style u-layout-cell u-size-30 u-layout-cell-2">
                        <div class="u-container-layout u-valign-middle u-container-layout-3">
                           <div class="u-expanded-width u-list u-list-1">
                              <div class="u-repeater u-repeater-1">
                                 <div class="u-align-center u-container-style u-custom-item u-list-item u-repeater-item">
                                    <div class="u-container-layout u-similar-container u-container-layout-4">
                                       <h3 class="u-text u-text-palette-1-base u-text-2" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">90%</h3>
                                       <p class="u-text u-text-grey-40 u-text-3">De los estudiantes utilizarían nuestra web para buscar las prácticas.</p>
                                    </div>
                                 </div>
                                 <div class="u-align-center u-container-style u-custom-item u-list-item u-repeater-item">
                                    <div class="u-container-layout u-similar-container u-container-layout-5">
                                       <h3 class="u-text u-text-palette-1-base u-text-4" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">78%</h3>
                                       <p class="u-text u-text-grey-40 u-text-5">Considera que sería más facil encontrar unas prácticas a través de nuestra plataforma.</p>
                                    </div>
                                 </div>
                                 <div class="u-align-center u-container-style u-custom-item u-list-item u-repeater-item">
                                    <div class="u-container-layout u-similar-container u-container-layout-6">
                                       <h3 class="u-text u-text-palette-1-base u-text-6" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">18%</h3>
                                       <p class="u-text u-text-grey-40 u-text-7">Se pensaría llegar a invertir dinero en nuestros servicios.</p>
                                    </div>
                                 </div>
                                 <div class="u-align-center u-container-style u-custom-item u-grey-5 u-list-item u-repeater-item u-list-item-4">
                                    <div class="u-container-layout u-similar-container u-container-layout-7">
                                       <h3 class="u-text u-text-palette-1-base u-text-8" data-animation-name="counter" data-animation-event="scroll" data-animation-duration="3000">76%</h3>
                                       <p class="u-text u-text-grey-40 u-text-9">Piensan que es necesaria una aplicación de búsqueda de prácticas para formación profesional</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="u-align-center u-clearfix u-palette-1-dark-3 u-section-8" id="carousel_472d">
         <div class="u-clearfix u-sheet u-sheet-1">
            <h2 class="u-text u-text-body-alt-color u-text-1"> Empresas colaboradoras</h2>
            <div class="u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-list u-list-1">
               <div class="u-repeater u-repeater-1">
                  <div class="u-align-center-sm u-align-center-xs u-container-style u-list-item u-repeater-item u-list-item-1" data-animation-name="customAnimationIn" data-animation-duration="2000">
                     <div class="u-container-layout u-similar-container u-valign-middle-lg u-valign-middle-xl u-container-layout-1">
                        <img alt="" class="u-expanded-width-lg u-expanded-width-md u-expanded-width-xl u-image u-image-contain u-image-default u-image-1" data-image-width="300" data-image-height="90" src="images/logo-amazon-18.svg">
                     </div>
                  </div>
                  <div class="u-align-center-sm u-align-center-xs u-container-style u-list-item u-repeater-item u-list-item-2" data-animation-name="customAnimationIn" data-animation-duration="2000">
                     <div class="u-container-layout u-similar-container u-valign-middle-lg u-valign-middle-xl u-container-layout-2">
                        <img alt="" class="u-expanded-width-lg u-expanded-width-md u-expanded-width-xl u-image u-image-contain u-image-default u-image-2" data-image-width="300" data-image-height="90" src="images/1.svg">
                     </div>
                  </div>
                  <div class="u-align-center-sm u-align-center-xs u-container-style u-list-item u-repeater-item u-list-item-3" data-animation-name="customAnimationIn" data-animation-duration="2000">
                     <div class="u-container-layout u-similar-container u-valign-middle-lg u-valign-middle-xl u-container-layout-3">
                        <img alt="" class="u-expanded-width-lg u-expanded-width-md u-expanded-width-xl u-image u-image-contain u-image-default u-image-3" data-image-width="300" data-image-height="63" src="images/evga.svg">
                     </div>
                  </div>
                  <div class="u-align-center-sm u-align-center-xs u-container-style u-list-item u-repeater-item u-list-item-4" data-animation-name="customAnimationIn" data-animation-duration="2000">
                     <div class="u-container-layout u-similar-container u-valign-middle-lg u-valign-middle-xl u-container-layout-4">
                        <img alt="" class="u-expanded-width-lg u-expanded-width-md u-expanded-width-xl u-image u-image-contain u-image-default u-image-4" data-image-width="300" data-image-height="39" src="images/tesla-9.svg">
                     </div>
                  </div>
                  <div class="u-align-center-sm u-align-center-xs u-container-style u-list-item u-repeater-item u-list-item-5" data-animation-name="customAnimationIn" data-animation-duration="2000">
                     <div class="u-container-layout u-similar-container u-valign-middle-lg u-valign-middle-xl u-container-layout-5">
                        <img alt="" class="u-expanded-width-lg u-expanded-width-md u-expanded-width-xl u-image u-image-contain u-image-default u-image-5" data-image-width="300" data-image-height="54" src="images/sony-logo.svg">
                     </div>
                  </div>
                  <div class="u-align-center-sm u-align-center-xs u-container-style u-list-item u-repeater-item u-list-item-6" data-animation-name="customAnimationIn" data-animation-duration="2000">
                     <div class="u-container-layout u-similar-container u-valign-middle-lg u-valign-middle-xl u-container-layout-6">
                        <img alt="" class="u-expanded-width-lg u-expanded-width-md u-expanded-width-xl u-image u-image-contain u-image-default u-image-6" data-image-width="300" data-image-height="65" src="images/crocs-wordmark.svg">
                     </div>
                  </div>
                  <div class="u-align-center-sm u-align-center-xs u-container-style u-list-item u-repeater-item u-list-item-7" data-animation-name="customAnimationIn" data-animation-duration="2000">
                     <div class="u-container-layout u-similar-container u-valign-middle-lg u-valign-middle-xl u-container-layout-7">
                        <img alt="" class="u-expanded-width-lg u-expanded-width-md u-expanded-width-xl u-image u-image-contain u-image-default u-image-7" data-image-width="300" data-image-height="90" src="images/logo-amazon.svg">
                     </div>
                  </div>
                  <div class="u-align-center-sm u-align-center-xs u-container-style u-list-item u-repeater-item u-list-item-8" data-animation-name="customAnimationIn" data-animation-duration="2000">
                     <div class="u-container-layout u-similar-container u-valign-middle-lg u-valign-middle-xl u-container-layout-8">
                        <img alt="" class="u-expanded-width-lg u-expanded-width-md u-expanded-width-xl u-image u-image-contain u-image-default u-image-8" data-image-width="300" data-image-height="87" src="images/asos-1.svg">
                     </div>
                  </div>
                  <div class="u-align-center-sm u-align-center-xs u-container-style u-list-item u-repeater-item u-list-item-9" data-animation-name="customAnimationIn" data-animation-duration="2000">
                     <div class="u-container-layout u-similar-container u-valign-middle-lg u-valign-middle-xl u-container-layout-9">
                        <img alt="" class="u-expanded-width-lg u-expanded-width-md u-expanded-width-xl u-image u-image-contain u-image-default u-image-9" data-image-width="300" data-image-height="89" src="images/bergners-1.svg">
                     </div>
                  </div>
                  <div class="u-align-center-sm u-align-center-xs u-container-style u-list-item u-repeater-item u-list-item-10" data-animation-name="customAnimationIn" data-animation-duration="2000">
                     <div class="u-container-layout u-similar-container u-valign-middle-lg u-valign-middle-xl u-container-layout-10">
                        <img alt="" class="u-expanded-width-lg u-expanded-width-md u-expanded-width-xl u-image u-image-contain u-image-default u-image-10" data-image-width="300" data-image-height="89" src="images/bergners-1-11.svg">
                     </div>
                  </div>
                  <div class="u-align-center-sm u-align-center-xs u-container-style u-list-item u-repeater-item u-list-item-11" data-animation-name="customAnimationIn" data-animation-duration="2000">
                     <div class="u-container-layout u-similar-container u-valign-middle-lg u-valign-middle-xl u-container-layout-11">
                        <img alt="" class="u-expanded-width-lg u-expanded-width-md u-expanded-width-xl u-image u-image-contain u-image-default u-image-11" data-image-width="300" data-image-height="61" src="images/medium-wordmark.svg">
                     </div>
                  </div>
                  <div class="u-align-center-sm u-align-center-xs u-container-style u-list-item u-repeater-item u-list-item-12" data-animation-name="customAnimationIn" data-animation-duration="2000">
                     <div class="u-container-layout u-similar-container u-valign-middle-lg u-valign-middle-xl u-container-layout-12">
                        <img alt="" class="u-expanded-width-lg u-expanded-width-md u-expanded-width-xl u-image u-image-contain u-image-default u-image-12" data-image-width="300" data-image-height="61" src="images/t.svg">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <style class="u-overlap-style">.u-overlap:not(.u-sticky-scroll) .u-header {
         background-color: #4d6eaa !important
         }
      </style>
      <!-- Footer -->
      <section class="u-clearfix u-palette-1-base u-block-ceac-1" custom-posts-hash="T" data-post-id="4034617752" data-section-properties="{&quot;stretch&quot;:true}" data-id="ceac" style="background-image: none" data-posts-content="[{'images':[],'maps':[],'videos':[],'icons':[],'textWidth':570,'textHeight':236,'id':1,'headingProp':'h2','textProp':'text'}]" data-style="social-section-style-4" id="sec-560b" data-source="Sketch">
         <div class="u-clearfix u-sheet u-block-ceac-2" style="min-height: 331px;" data-height-lg="179" data-height-md="149" data-block-type="Sheet">
            <div class="u-clearfix u-layout-wrap u-block-control u-gutter-0 u-expanded-width u-block-ceac-3" style="margin-top: 0.4064px; margin-bottom: 0px;" data-layout-wrap-id="3" data-block="80" data-block-type="Layout">
               <div class="u-gutter-0 u-layout">
                  <div class="u-layout-row">
                     <div class="u-align-left u-container-style u-layout-cell u-left-cell u-block-control ui-draggable ui-droppable u-size-20 u-block-ceac-4" style="min-height: 261px;" data-cell-id="5" data-column-id="5" data-block="81" data-block-type="Cell">
                        <div class="u-container-layout u-valign-middle u-block-ceac-5" style="padding: 25.7143px 60px;" data-container-layout-dom="8" data-block-type="">
                           <h2 class="u-text u-text-default u-block-control u-block-ceac-6" style="margin: 0px auto 0px 0px;" data-block="82" data-block-type="Text">PractiFP</h2>
                           <p class="u-text u-block-control u-block-ceac-7" style="margin: 20px 0px 0px;" data-block="83" data-block-type="Text">Conexión entre estudiantes y empresas, facilitando la gestión de los centros educativos para las prácticas.</p>
                           <a href="" class="u-active-none u-border-2 u-border-palette-1-base u-btn u-btn-rectangle u-button-style u-hover-none u-none u-block-control u-block-ceac-11" style="background-image: none; border-style: none none solid; margin-left: 0px; margin-right: 0px; margin-bottom: 0px; padding-top: 0px; padding-bottom: 0px; padding-left: 0px; padding-right: 0px" data-block="84" data-block-type="Button">Hyperlink</a>
                        </div>
                     </div>
                     <div class="u-container-style u-layout-cell u-right-cell u-block-control ui-draggable ui-droppable u-align-left u-size-40 u-block-ceac-8" style="min-height: 261px;" data-cell-id="6" data-column-id="6" data-block="85" data-block-type="Cell">
                        <div class="u-container-layout u-block-ceac-9" style="padding: 30px 31.427px;" data-container-layout-dom="9" data-block-type="">
                           <!-- Links de la navegacion -->
                           <a  class="u-btn u-button-style u-block-control u-hover-palette-1-dark-1 u-palette-1-base u-block-ceac-19" data-block="136" style="border-style: none; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin: 0px 10.573px;" data-block-type="Button" href="index.php">INICIO</a>
                           <?php 
                              if(isset($_SESSION['usuario']) || isset($_COOKIE['user'])){
                                 if($_SESSION['usuario'] == "ESTUDIANTE" || isset($_COOKIE['estudiante'])){
                                    echo "<a  class='u-btn u-button-style u-block-control u-hover-palette-1-dark-1 u-palette-1-base u-block-ceac-20' data-block='138' style='border-style: none; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin: -45.5939px auto 0px 158.406px;' data-block-type='Button' href='Mi-Perfil_Estudiante.php'>Mi perfil<br></a>";
                                 } elseif($_SESSION['usuario'] == "EMPRESA" || isset($_COOKIE['empresa'])){
                                    echo "<a  class='u-btn u-button-style u-block-control u-hover-palette-1-dark-1 u-palette-1-base u-block-ceac-20' data-block='138' style='border-style: none; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin: -45.5939px auto 0px 158.406px;' data-block-type='Button' href='Mi-Perfil_Empresa.php'>Mi perfil<br></a>";
                                 }
                              }
                           ?>
                           <a  class="u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-block-control u-block-ceac-24" style="border-style: none; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin: -45.5939px 211.417px 0px auto;" data-block="147" data-block-type="Button" href="Ofertas.php">ofertas</a>
                           <a  class="u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-block-control u-block-ceac-25" style="border-style: none; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin: -45.5939px 10.584px 0px auto;" data-block="151" data-block-type="Button" href="Contacto.php">contacto</a>
                           <?php 
                              if(!isset($_SESSION['usuario'])){
                                 echo "<a  class='u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-block-control u-block-ceac-21' style='border-style: none; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin: 21.125px auto 0px 158.375px;' data-block='140' data-block-type='Button' href='Login.php'>&gt; Login</a>";
                              }
                           ?>
                           <a  class="u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-block-control u-block-ceac-26" style="border-style: none; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin: -45.5939px -0.0104px 0px auto;" data-block="153" data-block-type="Button" href="Terminos-y-Condiciones.php">&gt; terminos</a>
                           <a  class="u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-block-control u-block-ceac-22" style="border-style: none; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin: 21px auto 0px 158.385px;" data-block="142" data-block-type="Button" href="Registro.php">&gt; Registro</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <p class="u-text u-block-control u-align-center u-block-ceac-18" data-block="87" style="width: 488.146px; margin: 0px auto 44px;" data-block-type="Text">​@2022&nbsp;<b>Copyright practipf.php</b>&nbsp;| Todos los derechos reservados.</p>
         </div>
      </section>
   </body>
</html>