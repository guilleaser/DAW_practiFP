<!DOCTYPE html>
<html style="font-size: 16px;">
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta charset="utf-8">
      <meta name="keywords" content="Registro, Consejos para crear un buen CV">
      <meta name="description" content="">
      <meta name="page_type" content="np-template-header-footer-from-plugin">
      <title>Registro</title>
      <link rel="stylesheet" href="css/Estilos.css" media="screen">
      <link rel="stylesheet" href="css/Registro.css" media="screen">
      <script class="u-script" type="text/javascript" src="./js/jquery-1.9.1.min.js" defer=""></script>
      <script class="u-script" type="text/javascript" src="./js/Funciones.js" defer=""></script>
      <script src="js/form_validaciones.js"></script> 

      <meta name="generator" content="Nicepage 4.7.8, nicepage.com">
      <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
      <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i">
      <script type="application/ld+json">{
         "@context": "http://schema.org",
         "@type": "Organization",
         "name": "",
         "logo": "images/default-logo.png"
         }
      </script>
      <meta name="theme-color" content="#4d6eaa">
      <meta property="og:title" content="Registro">
      <meta property="og:type" content="website">
      <style>
         #errores{
        background-color: lightcoral;
    }
    #errores_empresa{
        background-color: lightcoral;
    }
      </style>
      <?php session_start();?>
   </head>
   <body class="u-body u-xl-mode">
      <!-- Navegador -->
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
      <!-- fin navegador -->
      <section class="u-align-center u-clearfix u-section-1" id="sec-33f5">
         <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
               <div class="u-layout">
                  <div class="u-layout-row">
                     <div class="u-align-left u-container-style u-image u-layout-cell u-left-cell u-size-30 u-size-xs-60 u-image-1" src="" data-image-width="1280" data-image-height="805">
                        <div class="u-container-layout u-valign-middle u-container-layout-1" src="">
                           <img src="images/g14cc363954de9190809ceeb664db96034237a8a83245afe9ee0cf22ac6d7614c1e93cf6f50956b355f4eb358f396bb46d3c0b26e5af03f8f9ba4852cff826cca_1280.jpg" alt="Foto cv">
                        </div>
                     </div>
                     <div class="u-container-style u-layout-cell u-palette-1-base u-right-cell u-size-30 u-size-xs-60 u-layout-cell-2">
                        <div class="u-container-layout u-valign-middle u-container-layout-2">
                           <h2 class="u-align-left u-text u-text-default u-text-1">Registro</h2>
                           <p class="u-align-justify u-text u-text-2">Introduce tus datos personales para tener la posibilidad de aplicar a ofertas de prácticas en las empresas principales.<br>
                              <br>Tener un curriculum actualizado, vistoso y bien formado es muy imporante para mejorar las posiblidades de que las empresas se interesen en tu CV.
                           </p>
                           <a href="#consejos" class="u-border-2 u-border-white u-btn u-button-style u-palette-2-base u-btn-1">consejos sobre el cv</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="u-align-center u-clearfix u-section-2" id="sec-9175">
         <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <div class="u-expanded-width u-tab-links-align-justify u-tabs u-tabs-1">
               <ul class="u-border-2 u-border-palette-1-base u-spacing-0 u-tab-list u-unstyled" role="tablist">
                  <li class="u-tab-item" role="presentation">
                     <a class="active u-active-palette-1-base u-button-style u-grey-10 u-tab-link u-text-active-white u-text-black u-tab-link-1" id="link-tab-0da5" href="#tab-0da5" role="tab" aria-controls="tab-0da5" aria-selected="true">Estudiantes</a>
                  </li>
                  <li class="u-tab-item" role="presentation">
                     <a class="u-active-palette-1-base u-button-style u-grey-10 u-tab-link u-text-active-white u-text-black u-tab-link-2" id="link-tab-14b7" href="#tab-14b7" role="tab" aria-controls="tab-14b7" aria-selected="false">Empresas</a>
                  </li>
               </ul>
               
               <!-- Formulario de estudiante -->
               <div class="u-tab-content">
                  <div class="u-container-style u-tab-active u-tab-pane u-white u-tab-pane-1" id="tab-0da5" role="tabpanel" aria-labelledby="link-tab-0da5">
                     <div class="u-container-layout u-valign-middle u-container-layout-1">
                        <div class="u-form u-form-1">
                           <form action="php/crud.php" method="POST" class="u-clearfix u-form-spacing-10 u-inner-form" name="form" style="padding: 10px;" onsubmit="return validar_estudiante();">
                              
                              <input type="hidden" id="siteId" name="siteId" value="1654506">
                              <input type="hidden" id="pageId" name="pageId" value="1654789">
                              <div class="u-form-group u-form-group-1">
                                 <label for="text-aa37" class="u-label">Usuario *</label>
                                 <input type="text" placeholder="Ingresa tu usuario" id="text-aa37" name="usuario" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white u-input-1">
                              </div>
                              <div class="u-form-group u-form-partition-factor-2 u-form-group-2">
                                 <label for="text-8cf5" class="u-label">Contraseña *</label>
                                 <input type="password" placeholder="Ingresa tu contraseña" id="text-8cf5" name="pass" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white u-input-2" >
                              </div>
                              <div class="u-form-group u-form-partition-factor-2 u-form-group-3">
                                 <label for="text-65ef" class="u-label">Comprobación de contraseña *</label>
                                 <input type="password" placeholder="Ingresa de nuevo la contraseña" id="text-65ef" name="pass2" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white u-input-3">
                              </div>
                              <div class="u-form-group u-form-partition-factor-2 u-form-group-4">
                                 <label for="text-6291" class="u-label">Identificador personal *</label>
                                 <input type="text" placeholder="Ingresa el DNI completo (por ejemplo, 50324786D)" id="text-6291" name="identificador" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white u-input-4">
                              </div>
                              <div class="u-form-group u-form-name u-form-partition-factor-2">
                                 <label for="name-c13e" class="u-label">Nombre *</label>
                                 <input type="text" placeholder="Introduzca su nombre" id="name-c13e" name="nombre" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white u-input-5">
                              </div>
                              <div class="u-form-group u-form-group-6">
                                 <label for="text-de88" class="u-label">Apellidos *</label>
                                 <input type="text" placeholder="Introduzca sus apellidos" id="text-de88" name="apellidos" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white u-input-6">
                              </div>
                              <div class="u-form-group u-form-partition-factor-2 u-form-phone u-form-group-8">
                                 <label for="phone-e71e" class="u-label">Móvil *</label>
                                 <input type="tel" placeholder="Ingrese su teléfono (por ejemplo, 654321987)" id="phone-e71e" name="movil" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white u-input-8">
                              </div>
                              <div class="u-form-date u-form-group u-form-group-9">
                                 <label for="text-c80c" class="u-label">Fecha de nacimiento</label>
                                 <input type="date" placeholder="" id="text-c80c" name="fechNacimiento" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white u-input-9">
                              </div>
                              <div class="u-form-email u-form-group">
                                 <label for="email-c13e" class="u-label">Email *</label>
                                 <input type="email" placeholder="Introduzca una dirección de correo electrónico válida" id="email-c13e" name="mail" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white u-input-10">
                              </div>
                              <div class="u-form-address u-form-group u-form-group-11">
                                 <label for="address-36d6" class="u-label">Dirección *</label>
                                 <input type="text" placeholder="Ingrese su dirección" id="address-36d6" name="direccion" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white u-input-11">
                              </div>
                              <div class="u-form-address u-form-group u-form-group-11">
                                 <label for="address-36d6" class="u-label">Localidad *</label>
                                 <input type="text" placeholder="Ingrese su localidad" id="text-6868" name="localidad" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white u-input-11">
                              </div>
                              <div class="u-form-group u-form-partition-factor-2 u-form-group-12">
                                 <label for="text-6868" class="u-label">Municipio *</label>
                                 <input type="text" placeholder="Introduce tu municipio" id="text-6868m" name="municipio" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white u-input-12">
                              </div>
                              <div class="u-form-group u-form-partition-factor-2 u-form-group-13">
                                 <label for="text-8b1a" class="u-label">Código Postal *</label>
                                 <input type="text" placeholder="Introduce tu código postal" id="text-8b1a" name="codigoPostal" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white u-input-13">
                              </div>
                              <div class="u-form-group u-form-select u-form-group-14">
                                 <label for="select-cfa8" class="u-label">Centro de estudios *</label>
                                 <div class="u-form-select-wrapper">
                                    <select id="select-cfa8" name="cenEstudios" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                                       <option value="01">IES Ciudad Escolar</option>
                                       <option value="Otro">Otro</option>
                                    </select>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret">
                                       <path fill="currentColor" d="M4 8L0 4h8z"></path>
                                    </svg>
                                 </div>
                              </div>
                              <div class="u-form-group u-form-select u-form-group-15">
                                 <label for="select-4649" class="u-label">Estudios *</label>
                                 <div class="u-form-select-wrapper">
                                    <select id="select-4649" name="estudios" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                                       <option value="DAW">DAW</option>
                                       <option value="DAM">DAM</option>
                                       <option value="ASIR">ASIR</option>
                                    </select>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret">
                                       <path fill="currentColor" d="M4 8L0 4h8z"></path>
                                    </svg>
                                 </div>
                              </div>
                              <div class="u-form-group u-form-group-16">
                                 <label for="text-c103" class="u-label">Descripción</label>
                                 <input type="text" placeholder="Puedes hacer una introducción breve sobre tí" id="text-c103d" name="descripcion" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white u-input-16" maxlength="500">
                              </div>
                              <br>
                              <div class="u-form-agree u-form-group u-form-group-17">
                                 <input type="checkbox" id="agree-189f" name="reg_est_terminos" class="u-agree-checkbox" required="required">
                                 <label for="agree-189f" class="u-label">Acepto los <a href="Terminos-y-Condiciones.php">términos del servicio</a>
                                 </label>
                              </div>
                              <div class="u-align-center u-form-group u-form-submit">
                              <div id="errores"><script>document.write(error)</script></div>
                                 <input type="submit" value="Enviar" name="btnInsertarAlumno" class="u-btn u-btn-submit u-button-style">
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>


               <!-- Formulario de empresa -->
                  <div class="u-align-left u-container-style u-tab-pane u-white u-tab-pane-2" id="tab-14b7" role="tabpanel" aria-labelledby="link-tab-14b7">
                     <div class="u-container-layout u-valign-middle u-container-layout-2">
                        <div class="u-form u-form-2">
                           <!-- <form action="php/crud.php" method="POST" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" source="email" name="form" style="padding: 10px;"> -->
                           <form action="php/crud.php" method="POST" class="" source="email" name="form" style="padding: 10px; " onsubmit="return validar_empresa();">
                              <div class="u-form-group u-form-group-19">
                                 <label for="text-29e9" class="u-label">Usuario *</label>
                                 <input type="text" placeholder="Ingresa tu usuario" id="text-29e9" name="usuario" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" maxlength="20">
                              </div>
                              <div class="u-form-group u-form-partition-factor-2 u-form-group-22">
                                 <label for="text-0ddd" class="u-label">Contraseña *</label>
                                 <input type="password" placeholder="Ingresa tu contraseña" id="text-0ddd" name="pass" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white"  maxlength="10">
                              </div>
                              <div class="u-form-group u-form-partition-factor-2 u-form-group-23">
                                 <label for="text-7df1" class="u-label">Comprobación de contraseña *</label>
                                 <input type="password" placeholder="Ingresa de nuevo tu contraseña" id="text-7df1" name="pass2" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white"  maxlength="10">
                              </div>
                              <!-- <div class="u-form-group u-form-partition-factor-2 u-form-select u-form-group-20">
                                 <label for="select-29b7" class="u-label">Identificación</label>
                                 <div class="u-form-select-wrapper">
                                    <select id="select-29b7" name="reg_emp_identificador" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">
                                       <option value="CIF">CIF</option>
                                       <option value="NIF">NIF</option>
                                    </select>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret">
                                       <path fill="currentColor" d="M4 8L0 4h8z"></path>
                                    </svg>
                                 </div>
                              </div> -->
                              <div class="u-form-group u-form-partition-factor-2 u-form-group-21">
                                 <label for="text-8c2d" class="u-label">CIF /NIF *</label>
                                 <input type="text" placeholder="Ingresa el CIF / NIF" id="text-8c2d" name="identificador" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                              </div>
                              <div class="u-form-group u-form-name">
                                 <label for="name-c13e" class="u-label">Nombre de la empresa *</label>
                                 <input type="text" placeholder="Introduzca el nombre de la empresa" id="name-c13em" name="nombreEmpresa" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                              </div>
                              <div class="u-form-group u-form-group-25">
                                 <label for="text-4c9a" class="u-label">Nombre de la persona de contacto *</label>
                                 <input type="text" placeholder="Ingresa el nombre de la persona de contacto" id="text-4c9a" name="nombreContacto" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" >
                              </div>
                              <div class="u-form-group u-form-group-26">
                                 <label for="text-de88" class="u-label">Apellidos de la persona de contacto *</label>
                                 <input type="text" placeholder="Introduzca sus apellidos" id="text-de88em" name="apellidosCOntacto" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                              </div>
                              <div class="u-form-group u-form-group-26">
                                 <label for="text-de88" class="u-label">Posicion del contacto dentro de la empresa</label>
                                 <input type="text" placeholder="Introduzca su posición" id="text-dee88" name="posicion" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" >
                              </div>
                              <div class="u-form-group u-form-partition-factor-2 u-form-phone u-form-group-28">
                                 <label for="phone-e71e" class="u-label">Móvil *</label>
                                 <input type="tel" placeholder="Ingrese su teléfono (por ejemplo, 622598736)" id="phone-e71em" name="movil" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white"  maxlength="12">
                              </div>
                              <div class="u-form-email u-form-group">
                                 <label for="email-c13e" class="u-label">Email *</label>
                                 <input type="email" placeholder="Introduzca una dirección de correo electrónico válida" id="email-c13em" name="mail" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" >
                              </div>
                              <div class="u-form-address u-form-group u-form-group-30">
                                 <label for="address-36d6" class="u-label">Dirección *</label>
                                 <input type="text" placeholder="Ingrese su dirección" id="address-36d6em" name="direccion" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" >
                              </div>
                              <div class="u-form-group u-form-partition-factor-2 u-form-phone u-form-group-27">
                                 <label for="text-6868" class="u-label">Localidad *</label>
                                 <input type="text" placeholder="Introduce tu municipio" id="text-6868e" name="localidad" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                              </div>
                              <div class="u-form-group u-form-partition-factor-2 u-form-phone u-form-group-28">
                                 <label for="text-6868" class="u-label">Municipio *</label>
                                 <input type="text" placeholder="Introduce tu municipio" id="text-6868em" name="municipio" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" >
                              </div>
                              <div class="u-form-group u-form-group-33">
                                 <label for="text-8b1a" class="u-label">Código Postal *</label>
                                 <input type="text" placeholder="Introduce tu código postal" id="text-8b1aem" name="codigoPostal" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white"  maxlength="5">
                              </div>
                              <div class="u-form-group u-form-group-33">
                                 <label for="text-c103" class="u-label">Tipo de industria *</label>
                                 <input type="text" placeholder="Introduce el tipo de industria" id="text-c103" name="industria" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" maxlength="500" >
                              </div>
                              <div class="u-form-group u-form-partition-factor-2 u-form-group-34">
                                 <label for="text-f53a" class="u-label">Categoría</label>
                                 <input type="text" placeholder="Ingresa la categoría de la empresa" id="text-f53a" name="categoria" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                              </div>
                              <div class="u-form-group u-form-partition-factor-2 u-form-group-35">
                                 <label for="text-23c6" class="u-label">Número de empleados</label>
                                 <input type="text" placeholder="Ingresa el número de empleados" id="text-23c6" name="numEmpleados" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" maxlength="9">
                              </div>
                              <div class="u-form-address u-form-group u-form-group-30">
                                 <label for="address-36d6" class="u-label">WEB</label>
                                 <input type="text" placeholder="Ingrese su dirección" id="address-36d6" name="web" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                              </div>
                              <div class="u-form-address u-form-group u-form-group-30">
                                 <label for="address-36d6" class="u-label">Información de la empresa</label>
                                 <input type="text" placeholder="Breve descripción o información relevante de la empresa" id="address-36d6" name="descripcion" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                              </div>
                              <br>
                              <div class="u-form-agree u-form-group u-form-group-36">
                                 <input type="checkbox" id="agree-189f" name="agree" class="u-agree-checkbox" required="required">
                                 <label for="agree-189f" class="u-label">Acepto los <a href="#">términos del servicio</a>
                                 </label>
                              </div>
                              <div id="errores_empresa"><script>document.write(error)</script></div>
                              <div class="u-align-left u-form-group u-form-submit">
                                 <input type="submit" value="Enviar" name="btnInsertarEmpresa" class="u-btn u-btn-submit u-button-style">
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="u-align-left u-clearfix u-palette-2-base u-section-3" id="sec-1dde">
         <div class="u-clearfix u-sheet u-sheet-1">
            <div class="fr-view u-align-center u-clearfix u-rich-text u-text u-text-1">
               <h1 id="consejos">Consejos para crear un buen CV</h1>
            </div>
         </div>
      </section>
      <section class="u-align-left u-clearfix u-palette-2-base u-section-4" id="carousel_8b6a">
         <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
               <div class="u-layout">
                  <div class="u-layout-row">
                     <div class="u-align-center u-container-style u-image u-layout-cell u-size-30 u-image-1" data-image-width="1619" data-image-height="1080">
                        <div class="u-container-layout u-valign-middle u-container-layout-1">
                           <div class="u-align-center u-container-style u-group u-palette-1-base u-shape-circle u-group-1">
                              <div class="u-container-layout u-container-layout-2">
                                 <p class="u-custom-font u-font-merriweather u-text u-text-1"> «Aprende las reglas como un profesional, para que puedas romperlas como un artista». – Pablo Picasso.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="u-align-justify u-container-style u-layout-cell u-size-30 u-layout-cell-2">
                        <div class="u-container-layout u-container-layout-3">
                           <p class="u-large-text u-text u-text-variant u-text-2">EL CV es la carta de ventas, por ello debes adaptarlo a la empresa y trabajo para el que estas optando, trata de personalizarlo para el puesto al que quieres optar.<br>
                              <br>Tratar de descatar no implica mentir, resalta tus habilidades y puntos fuertes pero se siempre sincero.<br>
                              <br>Cantidad no implica calidad, intenta no pasar de mas de dos páginas, es mejor un CV corto pero atractivo y potente, que un CV largo, cuando lo creas piensa que la persona que lo recibe va a tener muchos sobre los que elegir, ¿el tuyo descata sobre los demás?<br>
                              <br>No tiene por que ser un CV cronológico, si no tienes mucha experiencia aprovecha para incorporar proyectos que hayas realizado durante el curso.<br>
                              <br>Si después de estos consejos sigues con dudas siempre puedes encontrar plantillas en internet que te pueden valer como base para un buen CV.
                           </p>
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
