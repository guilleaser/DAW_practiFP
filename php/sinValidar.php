<!DOCTYPE html>
<html style="font-size: 16px;">
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta charset="utf-8">
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="page_type" content="np-template-header-footer-from-plugin">
      <link rel="stylesheet" href="../css/Estilos.css" media="screen">
      <link rel="stylesheet" href="../css/Login.css">
      <link rel="stylesheet" href="../css/crud.css">
      <script class="u-script" type="text/javascript" src="../js/jquery-1.9.1.min.js" defer=""></script>
      <script class="u-script" type="text/javascript" src="../js/Funciones.js" defer=""></script>
      <meta name="generator" content="Nicepage 4.7.8, nicepage.com">
      <?php session_start();
         // if(!isset($_SESSION['user'])){
         //    header("Location:cerrar_sesion.php");
         // }
      ?> 
   </head>
   <body class="u-body u-xl-mode" data-style="login-template-1" data-posts="" data-global-section-properties="{&quot;code&quot;:&quot;LOGIN&quot;,&quot;colorings&quot;:{&quot;light&quot;:[&quot;clean&quot;,&quot;clean&quot;],&quot;colored&quot;:[&quot;clean&quot;,&quot;clean&quot;,&quot;clean&quot;],&quot;dark&quot;:[&quot;clean&quot;,&quot;clean&quot;,&quot;clean&quot;]},&quot;isPreset&quot;:true}" data-source="fix" data-page-sections-style="[{&quot;name&quot;:&quot;login-form-1&quot;,&quot;margin&quot;:&quot;both&quot;,&quot;repeat&quot;:false}]" data-page-coloring-types="{&quot;light&quot;:[&quot;clean&quot;,&quot;clean&quot;],&quot;colored&quot;:[&quot;clean&quot;,&quot;clean&quot;,&quot;clean&quot;],&quot;dark&quot;:[&quot;clean&quot;,&quot;clean&quot;,&quot;clean&quot;]}" data-page-category="&quot;Login&quot;">
      <section class="u-align-center u-clearfix u-block-4460-1" custom-posts-hash="T" data-section-properties="{&quot;margin&quot;:&quot;both&quot;,&quot;stretch&quot;:true}" data-id="4460" data-style="login-form-1" id="sec-d3d1">
          <!-- Navegador -->
          <header class="u-clearfix u-header u-palette-1-base u-header" id="sec-4472">
            <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
               <a href="../index.php" class="u-image u-logo u-image-1" data-image-width="80" data-image-height="40">
               <img src="../images/logo_practifp.JPG" style="height: 40px;">
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
                  <div class="u-custom-menu u-nav-container">
                     <ul class="u-nav u-spacing-20 u-unstyled u-nav-1">
                     <li class="u-nav-item"><a class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-palette-4-base u-text-hover-palette-4-base u-text-white" href="../index.php" style="padding: 10px;">Inicio</a>
                     </li>
                     <li class="u-nav-item">
                        <a class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-palette-4-base u-text-hover-palette-4-base u-text-white" href="cerrar_sesion.php" style="padding: 10px;"><img src="../images/logo_cerrarsesion.png" id="cerrar_sesion" alt="Foto"></a>
                     </li>
                     </ul>
                  </div>
                  <!-- Navegador desplegable minimizado -->
                  <div class="u-custom-menu u-nav-container-collapse">
                     <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                        <div class="u-inner-container-layout u-sidenav-overflow">
                           <div class="u-menu-close"></div>
                           <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-4">
                              <li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.php">Inicio</a></li>
                              <li class="u-nav-item">
                                 <a class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-palette-4-base u-text-hover-palette-4-base u-text-white" href="cerrar_sesion.php" style="padding: 10px;"><img src="../images/logo_cerrarsesion.png" id="cerrar_sesion" alt="Foto"></a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
            </div>
            </nav>
            </div>
         </header>
         <!-- fin navegador -->
      <!-- Mensaje de salida -->
      <section>
            <div id="mensajeSalida">
                <p>
                    Cuenta sin validar.
                </p>
                <p>
                    Por favor, active su cuenta desde el mail.
                </p>
            </div>
      </section>
      <section>
          <div>
              <a href="../index.php" id="linkInicio">Volver al inicio</a> 
          </div>
      </section>
   </body>
</html>