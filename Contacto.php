<!DOCTYPE html>
<html style="font-size: 16px;">
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta charset="utf-8">
      <meta name="keywords" content="Pregundas y dudas frecuentes">
      <meta name="description" content="">
      <meta name="page_type" content="np-template-header-footer-from-plugin">
      <title>Contacto</title>
      <link rel="stylesheet" href="css/Estilos.css" media="screen">
      <link rel="stylesheet" href="css/Contacto.css" media="screen">
      <script class="u-script" type="text/javascript" src="js/jquery-1.9.1.min.js" defer=""></script>
      <script class="u-script" type="text/javascript" src="js/Funciones.js" defer=""></script>
      <meta name="generator" content="Nicepage 4.7.8, nicepage.com">
      <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
      <script type="application/ld+json">{
         "@context": "http://schema.org",
         "@type": "Organization",
         "name": "",
         "logo": "images/default-logo.png"
         }
      </script>
      <meta name="theme-color" content="#4d6eaa">
      <meta property="og:title" content="Contacto">
      <meta property="og:type" content="website">
      <?php session_start(); ?>
   </head>
   <body class="u-body u-xl-mode">
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
      <section class="u-align-center u-clearfix u-section-1" id="carousel_69ce">
         <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <div class="u-clearfix u-gutter-40 u-layout-wrap u-layout-wrap-1">
               <div class="u-layout">
                  <div class="u-layout-row">
                     <div class="u-align-center u-container-style u-layout-cell u-right-cell u-size-33 u-layout-cell-1">
                        <div class="u-container-layout u-valign-top u-container-layout-1">
                           <h6 class="u-text u-text-default u-text-1">Contacto</h6>
                           <div class="u-expanded-width u-form u-form-1">
                              <!-- Formulario de contacto -->
                              <form action="php/mail_contacto.php" method="POST" style="padding: 0;" >
                                 <input type="hidden" id="siteId" name="siteId" value="1654506">
                                 <input type="hidden" id="pageId" name="pageId" value="1654507">
                                 <div class="u-form-group u-form-name">
                                    <label for="name-daf4" class="u-label">Datos de contacto</label>
                                    <input type="text" placeholder="Nombre y apellidos" id="name-daf4" name="cnt_name" class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-white" required="">
                                 </div>
                                 <br>
                                 <div class="u-form-email u-form-group">
                                    <label for="email-daf4" class="u-label">Correo electrónico</label>
                                    <input type="email" placeholder="email válido" id="email-daf4" name="cnt_email" class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-white" required="">
                                 </div>
                                 <br>
                                 <div class="u-form-group u-form-message">
                                    <label for="message-daf4" class="u-label">Mensaje</label>
                                    <textarea placeholder="Escriba aquí su mensaje" rows="4" cols="50" id="message-daf4" name="cnt_message" class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-white" required=""></textarea>
                                 </div>
                                 <br>
                                 <div class="u-form-agree u-form-group u-form-group-4">
                                    <input type="checkbox" id="agree-f183" name="cnt_agree" class="u-agree-checkbox" required="">
                                    <label for="agree-f183" class="u-label">Acepto los <a href="Terminos-y-Condiciones.php">términos y condiciones</a>
                                    </label>
                                 </div>
                                 <br>
                                 <div class="u-align-left u-form-group u-form-submit">
                                 </div>
                                 <input type="submit" value="Enviar" name="btnENviar" class="u-active-palette-1-light-2 u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-12 u-btn-1">
                                 <div class="u-form-send-message u-form-send-success">Muchas gracias. 
                                    Su mensaje se ha enviado correctamente.
                                 </div>
                                 <div class="u-form-send-error u-form-send-message">El mensaje no ha podio ser enviado. Por favor, espere unos minutos e intentelo de nuevo.</div>
                                 <input type="hidden" value="" name="recaptchaResponse">
                                 <!-- Salida de mensaje enviado correctamente -->
                                 <?php include 'php/mail_contacto.php'; 
                                    ?>
                              </form>
                           </div>
                        </div>
                     </div>
                     <div class="u-align-center u-container-style u-grey-5 u-layout-cell u-size-27 u-layout-cell-2">
                        <div class="u-container-layout u-container-layout-2">
                           <h6 class="u-text u-text-palette-1-base u-text-2">Contacta con nostros</h6>
                           <p class="u-text u-text-body-color u-text-3">
                              <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-2" href="mailto:guillermoasergarcia.daw@ciudadescolarfp.es?subject=Contacto%20PractiFP">guillermoasergarcia.daw@ciudadescolarfp.es<br>
                              </a>
                           </p>
                           <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-3" href="mailto:andrescamaramartin.daw@ciudadescolarfp.es?subject=Contacto%20PractiFP">andrescamaramartin.daw@ciudadescolarfp.es<br>
                           </a>
                           <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-4" href="mailto:jorgechivato.daw@ciudadescolarfp.es?subject=Contacto%20PractiFP">jorgechivato.daw@ciudadescolarfp.es<br>
                           </a>
                           <h6 class="u-text u-text-palette-1-base u-text-4">dirección</h6>
                           <p class="u-text u-text-5"> Carr. Vía de Servicio, Km.12, 800, 28049 Madrid</p>
                           <img class="u-image u-image-default u-image-1" src="images/gcb271740e6ef00e13ae8fa183903f96f3c55f0f219e26a80f2485b2dfc1c00d29a86e0435569d7eccf3c1d1435c4a62f82887dd5a335ca8e7215c93a8e3044dc_1280.jpg" alt="" data-image-width="1280" data-image-height="807">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="u-align-center u-clearfix u-palette-1-light-3 u-section-2" id="sec-2610">
         <div class="u-clearfix u-sheet u-sheet-1">
            <h2 class="u-text u-text-default u-text-1">Preguntas y dudas frecuentes</h2>
            <p class="u-text u-text-2">A continuación respondemos a las dudas frecuentes que los usuarios nos han planteado.</p>
            <div class="u-accordion u-expanded-width u-faq u-spacing-10 u-accordion-1">
               <div class="u-accordion-item">
                  <a class="active u-accordion-link u-active-palette-1-base u-button-style u-hover-palette-1-base u-white u-accordion-link-1" id="link-accordion-f600" aria-controls="accordion-f600" aria-selected="false">
                     <span class="u-accordion-link-text">¿Me puedo registrar sin ser estudiante de formación profesional?</span>
                     <span class="u-accordion-link-icon u-icon u-text-palette-1-light-2 u-icon-1">
                        <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 448 448" >
                           <use xlink:href="#svg-fe6a"></use>
                        </svg>
                        <svg class="u-svg-content" viewBox="0 0 448 448" id="svg-fe6a" >
                           <path d="m272 184c-4.417969 0-8-3.582031-8-8v-176h-80v176c0 4.417969-3.582031 8-8 8h-176v80h176c4.417969 0 8 3.582031 8 8v176h80v-176c0-4.417969 3.582031-8 8-8h176v-80zm0 0"></path>
                        </svg>
                     </span>
                  </a>
                  <div class="u-accordion-active u-accordion-pane u-container-style u-white u-accordion-pane-1" id="accordion-f600" aria-labelledby="link-accordion-f600">
                     <div class="u-container-layout u-container-layout-1">
                        <div class="fr-view u-clearfix u-rich-text u-text">
                           <p>La respuesta es sí, puedes tener un perfil en nuestra web pero debes saber que este portal esta orientado a poner en contacto empresas y estudiantes que busquen realizar las prácticas de formación profesional, por lo que seguramente las empresas no lleguen a contactarte.</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="u-accordion-item">
                  <a class="u-accordion-link u-active-palette-1-base u-button-style u-hover-palette-1-base u-white u-accordion-link-2" id="link-accordion-72f4" aria-controls="accordion-72f4" aria-selected="false">
                     <span class="u-accordion-link-text">¿Cuánto tiempo tarda una empresa en contestar?</span>
                     <span class="u-accordion-link-icon u-icon u-text-palette-1-light-2 u-icon-2">
                        <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 448 448" >
                           <use xlink:href="#svg-85d7"></use>
                        </svg>
                        <svg class="u-svg-content" viewBox="0 0 448 448" id="svg-85d7" >
                           <path d="m272 184c-4.417969 0-8-3.582031-8-8v-176h-80v176c0 4.417969-3.582031 8-8 8h-176v80h176c4.417969 0 8 3.582031 8 8v176h80v-176c0-4.417969 3.582031-8 8-8h176v-80zm0 0"></path>
                        </svg>
                     </span>
                  </a>
                  <div class="u-accordion-pane u-container-style u-white u-accordion-pane-2" id="accordion-72f4" aria-labelledby="link-accordion-72f4">
                     <div class="u-container-layout u-container-layout-2">
                        <div class="fr-view u-clearfix u-rich-text u-text">
                           <p>El tiempo de respuesta va a variar en base a la empresa, cada empresa tiene un proceso diferente con un departamento de recursos humanos diferente, por lo que no podemos saber el tiempo que van a necesitar para procesar todas las peticiones.</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="u-accordion-item">
                  <a class="u-accordion-link u-active-palette-1-base u-button-style u-hover-palette-1-base u-white u-accordion-link-3" id="link-accordion-854e" aria-controls="accordion-854e" aria-selected="false">
                     <span class="u-accordion-link-text">Como empresa, ¿cómo puedo conseguir el acuerdo de colaboración?</span>
                     <span class="u-accordion-link-icon u-icon u-text-palette-1-light-2 u-icon-3">
                        <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 448 448" >
                           <use xlink:href="#svg-7f79"></use>
                        </svg>
                        <svg class="u-svg-content" viewBox="0 0 448 448" id="svg-7f79" >
                           <path d="m272 184c-4.417969 0-8-3.582031-8-8v-176h-80v176c0 4.417969-3.582031 8-8 8h-176v80h176c4.417969 0 8 3.582031 8 8v176h80v-176c0-4.417969 3.582031-8 8-8h176v-80zm0 0"></path>
                        </svg>
                     </span>
                  </a>
                  <div class="u-accordion-pane u-container-style u-white u-accordion-pane-3" id="accordion-854e" aria-labelledby="link-accordion-854e">
                     <div class="u-container-layout u-container-layout-3">
                        <div class="fr-view u-clearfix u-rich-text u-text">
                           <p>EL acuerdo y contrato de colaboración se realiza directamente con el centro educativo, si un perfil de los estudiante te interesa el siguietne paso sería contactar con el centro educativo para poder formalizar el acuerdo.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
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