<!DOCTYPE html>
<html style="font-size: 16px;">
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta charset="utf-8">
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="page_type" content="np-template-header-footer-from-plugin">
      <title></title>
      <link rel="stylesheet" href="../css/Estilos.css" media="screen">
      <link rel="stylesheet" href="../css/Login.css">
      <link rel="stylesheet" href="../css/crud.css">
      <script class="u-script" type="text/javascript" src="../js/jquery-1.9.1.min.js" defer=""></script>
      <script class="u-script" type="text/javascript" src="../js/Funciones.js" defer=""></script>
      <script src="../js/form_validaciones.js"></script> 
      <meta name="generator" content="Nicepage 4.7.8, nicepage.com">
      <style>
      #errores_clave{
         background-color: lightcoral;
      }
      </style>
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
                              <li class="u-nav-item"><a class="u-button-style u-nav-link" href="../index.php">Inicio</a></li>
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
      <!-- Formulario de cambio de contrasena -->
        <section style="width: 70%; margin: 0 auto;">
        <h1>Bienvenido <?php if(isset($_SESSION['user']) ? $dato=$_SESSION['user'] : $dato=$_GET['usuario']); echo $dato;?></h1>
            <form action="crud.php" method="POST" class="u-clearfix u-inner-form u-form-spacing-10" name="form-2" style="padding: 10px;" onsubmit="return validar_contrasena();">
               <div class="u-form-group u-form-name u-block-control ui-draggable ui-draggable-handle u-block-d3a6-86" data-block="125" data-block-type="FormField" >
               <input type="hidden" name="usuario" value="<?php if(isset($_SESSION['user']) ? $dato=$_SESSION['user'] : $dato=$_GET['usuario']); echo $dato;?>">
                <label for="name-a6cf" class="u-label u-block-d3a6-87" data-block-type="FormChild">Contraseña nueva</label>
                <input type="password" placeholder="Introduzca su nueva contraseña" id="name-a6cf" name="pass" class="u-input u-input-rectangle u-white u-border-1 u-border-grey-30 u-block-d3a6-88" required="" maxlength="10" data-block-type="FormChild">
                </div>
                <div class="u-form-group u-form-name u-block-control ui-draggable ui-draggable-handle u-block-d3a6-94" data-block="132" style="margin-left: 0px;" data-block-type="FormField">
                <label for="name-6953" class="u-label u-block-d3a6-95" data-block-type="FormChild">Repetir contraseña</label>
                <input type="password" placeholder="Introduzca de nuevo su contraseña" id="name-6953" name="pass2" class="u-input u-input-rectangle u-white u-border-1 u-border-grey-30 u-block-d3a6-96" required="" data-block-type="FormChild" maxlength="10">
                </div>
                <div class="u-form-group u-form-submit u-block-control u-align-center u-block-d3a6-92" data-block="128">
                <div id="errores_clave"><script>document.write(error)</script></div>
                <!-- <a href="#" class="u-btn u-button-style u-btn-submit u-block-control ui-draggable ui-draggable-handle u-block-d3a6-93" data-block="129" data-block-type="FormChild,FormButton" >Enviar</a> -->
                <input type="submit" value="Restablecer contraseña" name="btnModificarPass" class="u-btn u-button-style u-btn-submit u-block-control ui-draggable ui-draggable-handle u-block-d3a6-93">
                </div>
            </form>
        </section>
   </body>
</html>