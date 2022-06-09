<!DOCTYPE html>
<html style="font-size: 16px;">
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta charset="utf-8">
      <meta name="keywords" content="Bienvenido *usuario*, Meter aqui la tabla">
      <meta name="description" content="">
      <meta name="page_type" content="np-template-header-footer-from-plugin">
      <title>Mi Perfil</title>
      <link rel="stylesheet" href="css/Estilos.css" media="screen">
      <link rel="stylesheet" href="css/Mi-Perfil.css" media="screen">
      <script class="u-script" type="text/javascript" src="js/jquery-1.9.1.min.js" defer=""></script>
      <script class="u-script" type="text/javascript" src="js/Funciones.js" defer=""></script>
      <script class="u-script" type="text/javascript" src="js/plantillaOferta.js" defer=""></script>
      <script class="u-script" type="text/javascript" src="js/alert.js" defer=""></script>
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
      <meta property="og:title" content="Mi Perfil">
      <meta property="og:type" content="website">
      <?php session_start();
         if(!isset($_SESSION['user']) || $_SESSION['usuario'] != "EMPRESA"){
            header("Location:php/cerrar_sesion.php");
         }
      ?>
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
      <section class="u-align-center u-clearfix u-section-1" id="sec-45c4">
         <div class="u-clearfix u-sheet u-sheet-1">
            <h1 class="u-text u-text-default u-text-1">Bienvenido  <?php if(isset($_SESSION['user']) ? $dato=$_SESSION['user'] : $dato=$_COOKIE['user']); echo $dato;?>
            </h1>
         </div>
      </section>
      <!-- Condicion para que esto solo salga cuando el usuario sea una empresa -->
      <section class="u-clearfix u-grey-5 u-section-2" id="sec-3ae4">
         <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
               <div class="u-gutter-0 u-layout">
                  <div class="u-layout-row">
                     <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-13 u-layout-cell-1">
                        <div class="u-container-layout u-valign-top u-container-layout-1">
                           <h3 class="u-text u-text-1">Nueva oferta de prácticas</h3>
                        </div>
                     </div>
                     <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-47 u-layout-cell-2">
                        <div class="u-container-layout u-container-layout-2">
                           <p class="u-text u-text-2">Puedes crear una nueva oferta en unos sencillos pasos.</p>
                           <a href="#nuevaOferta" class="u-active-palette-3-base u-border-grey-75 u-border-none u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-button-style u-hover-palette-4-base u-palette-2-base u-radius-0 u-text-active-white u-text-hover-black u-text-white u-top-left-radius-0 u-top-right-radius-0 u-btn-1">Crear una nueva oferta</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- fin condicion -->
      <section class="u-align-center u-clearfix u-section-3" id="sec-05b3">
         <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-expanded-width u-tab-links-align-justify u-tabs u-tabs-1">
               <ul class="u-border-2 u-border-palette-1-base u-spacing-0 u-tab-list u-unstyled" role="tablist">
                  <li class="u-tab-item" role="presentation">
                     <a class="active u-active-palette-1-base u-button-style u-grey-10 u-tab-link u-text-active-white u-text-black u-tab-link-1" id="link-tab-0da5" href="#tab-0da5" role="tab" aria-controls="tab-0da5" aria-selected="true">Mis datos</a>
                  </li>
                  <li class="u-tab-item" role="presentation">
                     <a class="u-active-palette-1-base u-button-style u-grey-10 u-tab-link u-text-active-white u-text-black u-tab-link-2" id="link-tab-14b7" href="#tab-14b7" role="tab" aria-controls="tab-14b7" aria-selected="false">Mis ofertas</a>
                  </li>
               </ul>
               <div class="u-tab-content">
                  <div class="u-container-style u-tab-active u-tab-pane u-white u-tab-pane-1" id="tab-0da5" role="tabpanel" aria-labelledby="link-tab-0da5">
                     <div class="u-container-layout u-container-layout-1">
                        <div class="u-form u-form-1">
                            <!-- Formulario empresa -->
                           <form action="php/crud.php" method="POST" class="u-clearfix u-form-spacing-10 u-inner-form" source="email" name="form" style="padding: 10px;">
                              <div class="u-form-group u-form-group-19">
                                 <label for="text-29e9" class="u-label">Usuario *</label>
                                 <input type="text" value="<?php if(isset($_SESSION['user']) ? $dato=$_SESSION['user'] : $dato=$_COOKIE['user']); echo $dato;?>" placeholder="Ingresa tu usuario" id="text-29e9" name="usuario" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required" maxlength="20">
                              </div>
                              <div class="u-form-group u-form-partition-factor-2 u-form-group-21">
                                 <label for="text-8c2d" class="u-label">CIF /NIF</label>
                                 <input type="text" value="<?php if(isset($_SESSION['user']) ? $dato=$_SESSION['empresa']['CIF_NIF'] : $dato=$_COOKIE['empresa_cif']); echo $dato;?>" placeholder="Ingresa el CIF / NIF" id="text-8c2d" name="id" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">
                              </div>
                              <!-- <div class="u-form-group u-form-partition-factor-2 u-form-group-22">
                                 <label for="text-0ddd" class="u-label">Contraseña *</label>
                                 <input type="password" value="<?php //if(isset($_SESSION['user']) ? $dato=$_SESSION['empresa']['contrasena'] : $dato=$_COOKIE['empresa_contrasena']); echo $dato;?>" placeholder="Ingresa tu contraseña" id="text-0ddd" name="pass" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required" maxlength="10">
                              </div> -->
                              <div class="u-form-group u-form-name">
                                 <label for="name-c13e" class="u-label">Nombre de la empresa *</label>
                                 <input type="text" value="<?php if(isset($_SESSION['user']) ? $dato=$_SESSION['empresa']['nombre'] : $dato=$_COOKIE['empresa_nombre']); echo $dato;?>" placeholder="Introduzca el nombre de la empresa" id="name-c13e" name="nombre" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                              </div>
                              <div class="u-form-group u-form-group-25">
                                 <label for="text-4c9a" class="u-label">Nombre de la persona de contacto *</label>
                                 <input type="text" value="<?php if(isset($_SESSION['user']) ? $dato=$_SESSION['empresa']['nombreContacto'] : $dato=$_COOKIE['empresa_nombreContacto']); echo $dato;?>" placeholder="Ingresa el nombre de la persona de contacto" id="text-4c9a" name="nomContacto" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">
                              </div>
                              <div class="u-form-group u-form-group-26">
                                 <label for="text-de88" class="u-label">Apellidos de la persona de contacto *</label>
                                 <input type="text" value="<?php if(isset($_SESSION['user']) ? $dato=$_SESSION['empresa']['apellidoContacto'] : $dato=$_COOKIE['empresa_apellidoContacto']); echo $dato;?>" placeholder="Introduzca sus apellidos" id="text-de88" name="apeCont" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">
                              </div>
                              <div class="u-form-group u-form-group-26">
                                 <label for="text-de88" class="u-label">Posición de la persona de contacto</label>
                                 <input type="text" value="<?php if(isset($_SESSION['user']) ? $dato=$_SESSION['empresa']['posicionContacto'] : $dato=$_COOKIE['empresa_posicionContacto']); echo $dato;?>" placeholder="Introduzca sus posicion en la empresa" id="text-de88" name="posicionContacto" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                              </div>
                              <div class="u-form-group u-form-partition-factor-2 u-form-phone u-form-group-28">
                                 <label for="phone-e71e" class="u-label">Móvil *</label>
                                 <input type="tel" value="<?php if(isset($_SESSION['user']) ? $dato=$_SESSION['empresa']['movil'] : $dato=$_COOKIE['empresa_movil']); echo $dato;?>" pattern="\+?\d{0,3}[\s\(\-]?([0-9]{2,3})[\s\)\-]?([\s\-]?)([0-9]{3})[\s\-]?([0-9]{2})[\s\-]?([0-9]{2})" placeholder="Ingrese su teléfono (por ejemplo, +14155552675)" id="phone-e71e" name="movil" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="" maxlength="12">
                              </div>
                              <div class="u-form-email u-form-group">
                                 <label for="email-c13e" class="u-label">Email *</label>
                                 <input type="email" value="<?php if(isset($_SESSION['user']) ? $dato=$_SESSION['empresa']['mail'] : $dato=$_COOKIE['empresa_mail']); echo $dato;?>" placeholder="Introduzca una dirección de correo electrónico válida" id="email-c13e" name="mail" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                              </div>
                              <div class="u-form-address u-form-group u-form-group-30">
                                 <label for="address-36d6" class="u-label">Dirección *</label>
                                 <input type="text" value="<?php if(isset($_SESSION['user']) ? $dato=$_SESSION['empresa']['direccion'] : $dato=$_COOKIE['empresa_direccion']); echo $dato;?>" placeholder="Ingrese su dirección" id="address-36d6" name="dir" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                              </div>
                              <div class="u-form-address u-form-group u-form-group-30">
                                 <label for="address-36d6" class="u-label">Localidad *</label>
                                 <input type="text" value="<?php if(isset($_SESSION['user']) ? $dato=$_SESSION['empresa']['localidad'] : $dato=$_COOKIE['empresa_localidad']); echo $dato;?>" placeholder="Ingrese su localidad" id="address-36d6" name="localidad" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                              </div>
                              <div class="u-form-group u-form-partition-factor-2 u-form-group-31">
                                 <label for="text-6868" class="u-label">Municipio *</label>
                                 <input type="text" value="<?php if(isset($_SESSION['user']) ? $dato=$_SESSION['empresa']['municipio'] : $dato=$_COOKIE['empresa_municipio']); echo $dato;?>" placeholder="Introduce tu municipio" id="text-6868" name="mun" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">
                              </div>
                              <div class="u-form-group u-form-partition-factor-2 u-form-group-32">
                                 <label for="text-8b1a" class="u-label">Código Postal *</label>
                                 <input type="text" value="<?php if(isset($_SESSION['user']) ? $dato=$_SESSION['empresa']['cod_postal'] : $dato=$_COOKIE['empresa_codPostal']); echo $dato;?>" placeholder="Introduce tu código postal" id="text-8b1a" name="codPost" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required" maxlength="5">
                              </div>
                              <div class="u-form-group u-form-group-33">
                                 <label for="text-c103" class="u-label">Tipo de industria *</label>
                                 <input type="text" value="<?php if(isset($_SESSION['user']) ? $dato=$_SESSION['empresa']['tipoIndustria'] : $dato=$_COOKIE['empresa_tipoIndustria']); echo $dato;?>" placeholder="Introduce el tipo de industria" id="text-c103" name="tipInd" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" maxlength="500" required="required">
                              </div>
                              <div class="u-form-group u-form-partition-factor-2 u-form-group-34">
                                 <label for="text-f53a" class="u-label">Categoría</label>
                                 <input type="text" value="<?php if(isset($_SESSION['user']) ? $dato=$_SESSION['empresa']['categoria'] : $dato=$_COOKIE['empresa_categoria']); echo $dato;?>" placeholder="Ingresa la categoría de la empresa" id="text-f53a" name="cat" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                              </div>
                              <div class="u-form-group u-form-partition-factor-2 u-form-group-35">
                                 <label for="text-23c6" class="u-label">Número de empleados</label>
                                 <input type="text" value="<?php if(isset($_SESSION['user']) ? $dato=$_SESSION['empresa']['numEmpleados'] : $dato=$_COOKIE['empresa_numEmpleados']); echo $dato;?>" placeholder="Ingresa el número de empleados" id="text-23c6" name="numEmp" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" maxlength="9">
                              </div>
                              <div class="u-form-group u-form-partition-factor-2 u-form-group-35">
                                 <label for="text-23c6" class="u-label">Web</label>
                                 <input type="text" value="<?php if(isset($_SESSION['user']) ? $dato=$_SESSION['empresa']['web'] : $dato=$_COOKIE['empresa_web']); echo $dato;?>" placeholder="Ingresa el número de empleados" id="text-23c6" name="web" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" maxlength="9">
                              </div>
                              <div class="u-form-group u-form-partition-factor-2 u-form-group-35">
                                 <label for="text-23c6" class="u-label">Información sobre la empresa</label>
                                 <input type="textholder" value="<?php if(isset($_SESSION['user']) ? $dato=$_SESSION['empresa']['informacion'] : $dato=$_COOKIE['empresa_informacion']); echo $dato;?>" placeholder="Ingresa el número de empleados" id="text-23c6" name="informacion" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" maxlength="9">
                              </div>
                              <div class="u-align-left u-form-group u-form-submit">
                                 <input type="submit" value="Modificar" name="btnModificarEmpresa" class="u-btn u-btn-submit u-button-style">
                              </div>
                           </form>
                           <a href="mailto:practifp@gmail.com?subject=Eliminar Perfil&body=Deseo eliminar mi perfil." style="margin-top: -50px;color: red;">Eliminar perfil</a>
                           <!-- Fin formulario empresa -->
                           </div>
                     </div>
                  </div>
                  <div class="u-align-left u-container-style u-tab-pane u-white u-tab-pane-2" id="tab-14b7" role="tabpanel" aria-labelledby="link-tab-14b7">
                     <div class="u-container-layout u-valign-top u-container-layout-2">
                         <!-- Tabla de empresa -->
                        <section class="u-align-center u-clearfix u-section-5" id="carousel_e346">
                           <div class="u-clearfix u-sheet u-sheet-1">
                              <div class="u-expanded-width u-table u-table-responsive u-table-1">
                                 <table class="u-table-entity u-table-entity-1">
                                    <colgroup>
                                       <col width="20%">
                                       <col width="20%">
                                       <col width="20%">
                                       <col width="20%">
                                       <col width="20%">
                                    </colgroup>
                                    <thead class="u-palette-2-base u-table-header u-table-header-1">
                                       <tr style="height: 21px; text-align: center;" >
                                          <th class="u-border-1 u-border-palette-1-base u-table-cell">Posicion</th>
                                          <th class="u-border-1 u-border-palette-1-base u-table-cell">Habilidad</th>
                                          <th class="u-border-1 u-border-palette-1-base u-table-cell">Dirección</th>
                                          <th class="u-border-1 u-border-palette-1-base u-table-cell">Habilidad</th>
                                          <th class="u-border-1 u-border-palette-1-base u-table-cell">Fecha</th>
                                          <th class="u-border-1 u-border-palette-1-base u-table-cell">Mail</th>
                                          <th class="u-border-1 u-border-palette-1-base u-table-cell">Ver</th>
                                          <th class="u-border-1 u-border-palette-1-base u-table-cell">Eliminar</th>
                                       </tr>
                                    </thead>
                                    <tbody class="u-table-body">
                                       <?php require "php/misOfertas.php" ?>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </section>
                        <!-- Fin tabla empresa -->
                        </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Seccion del formulario que solo debe aparecer cuando el usuario sea empresa -->
      <section class="u-clearfix u-palette-1-base u-section-6" id="sec-e812">
         <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <div class="u-border-3 u-border-grey-40 u-container-style u-group u-group-1">
               <div class="u-container-layout u-valign-middle u-container-layout-1">
                  <h1 class="u-align-center u-text u-text-default u-text-1" id="nuevaOferta">Nueva oferta de prácticas</h1>
               </div>
            </div>
         </div>
      </section>
      <section class="u-clearfix u-section-7" id="sec-faf7">
         <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-expanded-width u-form u-form-1">
               <!-- Formulario de la oferta -->
               <form action="php/crud.php" method="POST" class="" name="form" style="padding: 10px;">
                  <input type="hidden" name="id_empresa" value="<?php echo $_SESSION['empresa']['id_empresa']?>"> 
                  <div class="u-form-group u-form-name">
                     <label for="name-ac71" class="u-label">Posicion *</label>
                     <input type="text" placeholder="Introduzca la posición de la oferta" id="name-ac71" name="posicion" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                  </div>
                  <div class="u-form-group u-form-name">
                     <label for="name-ac71" class="u-label">Fecha de inicio *</label>
                     <input type="date" id="name-ac71" name="fecha" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                  </div>
                  <div class="u-form-group u-form-group-2">
                     <label for="text-29f4" class="u-label">Tipo de industria *</label>
                     <input type="text" placeholder="Introduzca la industria de la empresa" id="text-29f4" name="industria" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">
                  </div>
                  <div class="u-form-group">
                     <label for="email-ac71" class="u-label">Dirección *</label>
                     <input type="text" placeholder="Introduzca una dirección " id="email-ac71" name="direccion" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">
                  </div>
                  <div class="u-form-group u-form-partition-factor-2 u-form-group-5">
                     <label for="text-46e8" class="u-label">Municipio *</label>
                     <input type="text" placeholder="Introduzca el municipio" id="text-46e8" name="municipio" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">
                  </div>
                  <div class="u-form-group u-form-group-7">
                     <label for="text-3456" class="u-label">Habilidades</label>
                     <input type="text" placeholder="Introduzca las habilidades requeridas (Por ejemplo, &quot;Nivel de inglés alto&quot;, &quot;Python&quot;, &quot;Java&quot;, ... )" id="text-3456" name="habilidades" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                  </div>
                  <div class="u-form-group u-form-group-7">
                     <label for="text-3456" class="u-label">Correo donde llegarán las solicitudes *</label>
                     <input type="mail" id="mail" name="correo" value="<?php if(isset($_SESSION['user']) ? $dato=$_SESSION['empresa']['mail'] : $dato=$_COOKIE['empresa_mail']); echo $dato;?>" placeholder="Correo al que llegarán todas las solicitudes por parte de los estudiantes." class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">
                  </div>
                  <div class="u-form-group u-form-message">
                     <label for="message-ac71" class="u-label">Descripción de la oferta *</label>
                     <!-- Cargar plantilla de la oferta -->
                     <button type="button" id="boton" onClick="cargarPlantilla()">Cargar plantilla</button>
                     <textarea id="textoPlantilla" placeholder="Introduzca la descripción de la oferta" rows="4" cols="50"  name="descripcion" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required=""></textarea>
                  </div>
                  <div class="u-form-agree u-form-group u-form-group-9">
                     <input type="checkbox" id="agree-cec9" name="agree" class="u-agree-checkbox" required="">
                     <label for="agree-cec9" class="u-label">Acepto los <a href="Terminos-y-Condiciones.php">términos del servicio</a>
                     </label>
                  </div>
                  <div class="u-align-left u-form-group u-form-submit">
                     <!-- <a href="#" class="u-btn u-btn-submit u-button-style">Enviar</a> -->
                     <input type="submit" value="Enviar" class="u-btn u-btn-submit u-button-style" name="btnenviaroferta">
                     <button type="button" id="boton" onClick="limpiarFormulario()" class="u-btn u-btn-submit u-button-style" style="margin-left: 5%; background-color:darkcyan">Limpiar formulario</button>

                  </div>
               </form>
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