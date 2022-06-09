<!DOCTYPE html>
<html style="font-size: 16px;">
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta charset="utf-8">
      <meta name="keywords" content="Pregundas y dudas frecuentes">
      <meta name="description" content="">
      <meta name="page_type" content="np-template-header-footer-from-plugin">
      <title>Aplicar</title>
      <link rel="stylesheet" href="css/Estilos.css" media="screen">
      <link rel="stylesheet" href="Aplicar.css" media="screen">
      <script class="u-script" type="text/javascript" src="js/jquery-1.9.1.min.js" defer=""></script>
      <script class="u-script" type="text/javascript" src="js/Funciones.js" defer=""></script>
      <meta name="generator" content="Nicepage 4.8.2, nicepage.com">
      <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
      <script type="application/ld+json">{
         "@context": "http://schema.org",
         "@type": "Organization",
         "name": "",
         "logo": "images/default-logo.png"
         }
      </script>
      <meta name="theme-color" content="#4d6eaa">
      <meta property="og:title" content="Aplicar">
      <meta property="og:type" content="website">
      <?php session_start();
         if(!isset($_SESSION['user'])){
            header("Location:Registro.php");
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
      <!-- Enlace con la el archivo para la busqueda en bd -->
      <?php require "php/ofertas_aplicar.php";?> 
      <section class="u-align-left u-clearfix u-block-fff4-1" custom-posts-hash="T" data-posts-content="[{'images':[],'maps':[],'videos':[],'icons':[],'textWidth':1140,'textHeight':436,'id':1,'headingProp':'h3','textProp':'text'}]" data-id="fff4"  data-style="rich-text-1" id="sec-111d" data-source="Sketch">
         <div class="u-clearfix u-sheet u-block-fff4-2" style="min-height: 251px;" data-block-type="Sheet">
            <div style="margin: 45.9615px 0px 60px;" class="u-clearfix u-rich-text u-text u-block-control fr-view u-block-fff4-3" data-block="64" data-block-type="RichText">
               <h1 style="text-align: left;"><?php echo $posicion;?></h1>
               <hr><h5>Empresa: <b><?php echo $nombreEMpresa;?></b></h5>
               <hr><h5>Descripción del puesto:</h5>
               <p style="text-align: left;"><span style="line-height: 2.0;"><?php echo $descripcion;?></span></p>
            </div>
         </div>
      </section>
      <section class="u-align-center u-clearfix u-block-4460-1" custom-posts-hash="[I,T]" data-post-id="4048318134" data-section-properties="{&quot;grid-spacing&quot;:&quot;0&quot;,&quot;align&quot;:&quot;left&quot;,&quot;stretch&quot;:true}" data-id="4460" data-posts-content="[{'images':[[570,590]],'maps':[],'videos':[],'icons':[],'textWidth':570,'textHeight':590,'id':1,'headingProp':'h2','textProp':'text'}]" data-style="split-1-image-1-text-fill-fix" id="sec-0eed" data-source="Sketch" >
         <div class="u-clearfix u-sheet u-block-4460-2" data-height-lg="585" data-height-md="481" data-height-sm="367" data-height-xs="653" style="min-height: 689px;" data-block-type="Sheet">
            <div class="u-expanded-width u-table u-table-responsive u-block-control u-block-4460-13" style="margin-bottom: 0px; margin-top: 0px;" data-block="17">
               
            <p>
            <b>Fecha de inicio: </b><?php echo $fecha;?>
            </p>
            <p>
            <b>Dirección: </b><?php echo $direccion;?>
            </p>
            <p>
            <b>Municipio: </b><?php echo $municipio;?> </td>
            </p>
            <p>
            <b>Habilidades requeridas: </b><?php echo $habilidades;?></td>
            </p>
            </div>
            <div class="u-form u-block-control u-expanded-width u-block-4460-36" data-block="67" style="margin-bottom: 39.8022px; margin-top: 0.4167px; height: 155.781px;" data-block-type="Form">
               <!-- Formulario de solicitud -->
               <hr>
            <?php 
               if(isset($_SESSION['usuario']) || isset($_COOKIE['user'])){
                  if($_SESSION['usuario'] == "ESTUDIANTE" || isset($_COOKIE['estudiante'])){
                     echo "<h3 id='linea'><h3>Enviar Curriculum Vitae</h3>
                     <form action='php/mail_solicitudOferta.php' enctype='multipart/form-data' method='POST' class='u-clearfix u-inner-form u-form-spacing-10' name='form' style='padding: 10px;'>
                        <input type='hidden' name='cod_id' value='".$id_oferta."'>
                        <input type='hidden' name='direccion' value='".$direccion."'>
                        <input type='hidden' name='correo' value='".$correo."'>
                        <input type='hidden' name='descripcion' value='".$descripcion."'>
                        <input type='hidden' name='municipio' value='".$municipio."'>
                        <input type='hidden' name='posicion' value='".$posicion."'>
                           <div class='u-form-group u-form-name u-block-control ui-draggable ui-draggable-handle u-form-partition-factor-2 u-block-4460-37' data-block='68' data-block-type='FormField'>
                              <label for='name-0a94' class='u-label u-block-4460-38' data-block-type='FormChild'>Nombre completo</label>
                              <input type='text' value='".(isset($_SESSION['estudiante']) ? $_SESSION['estudiante']['nombre'] : $_COOKIE['estudiante_nombre'])." ".(isset($_SESSION['estudiante']) ? $_SESSION['estudiante']['apellidos'] : $_COOKIE['estudiante_apellidos'])."' id='name-0a94' name='name' class='u-input u-input-rectangle u-white u-border-1 u-border-grey-30 u-block-4460-39' required='' data-block-type='FormChild'>
                           </div>
                           <div class='u-form-group u-block-control ui-draggable ui-draggable-handle u-form-partition-factor-2 u-block-4460-40' data-block='74' data-block-type='FormField' style='margin-left: 0px;'>
                              <label for='text-a30f' class='u-label u-block-4460-41' data-block-type='FormChild'>Recomendamos adjuntar el archivo en formato PDF.</label>
                              <input type='file' accept='application/pdf' id='text-a30f' name='archivo' class='u-input u-white u-border-grey-30 u-border-1 u-input-rectangle u-block-4460-42' data-block-type='FormChild' required>
                           </div>
                           <div class='u-form-group u-form-submit u-block-control u-align-center u-block-4460-43' data-block='71'>
                              <input type='submit' value='Aplicar' class='u-btn u-button-style u-btn-submit u-block-control ui-draggable ui-draggable-handle u-block-4460-44'>
                           </div>
                        </form>";
                  }
               }
            ?>
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
   </body>
</html>