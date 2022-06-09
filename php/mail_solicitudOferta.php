<?php
require 'conexion_bd.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'configuracion_mails.php';

session_start();

if(!isset($_SESSION['user'])){
   header("Location:cerrar_sesion.php");
}
error_reporting(E_ALL ^ E_WARNING); //Quitar los warning

$mensaje = "";
$mensaje2 = "";
$mensaje3 = "";

$correo = $_REQUEST['correo'];
$id_oferta = $_REQUEST['cod_id'];
$nombre = $_REQUEST['name'];
$direccion = $_REQUEST['direccion'];
$descripcion = $_REQUEST['descripcion'];
$municipio = $_REQUEST['municipio'];
$posicion = $_REQUEST['posicion'];
$id_estudiante = $_SESSION ['estudiante']['id_estudiante'];

//  Conseguir ruta del archivo y nombre del archivo
 $file = $_FILES['archivo'];


 $mail=new PHPMailer();
 $mail->CharSet = 'UTF-8';

 $body = 'Ha recibido una solicitud de oferta: ID: '.$id_oferta;
 $body.= '<br><br>Para la posicion de: '.$posicion;
 $body.= '<br><br>Direccion: '.$direccion.'Municipio: '.$direccion;
 $body.= '<br><br>Descripcion del puesto: '.$descripcion;
 $body.= '<br><br>Nombre del usuario que ha aplicado a la oferta: '.$nombre;
 $body.= '<br><br>No olvide comprobar el archivo adjunto donde encontrara el CV.';
 $body.= '<br><br>Muchas gracias por usar nuestro servicio.';
 $body.= '<br>Atentamente, servicio técnico de practiFP.';

 $mail->IsSMTP();
 $mail->Host       = $host;
 $mail->SMTPSecure = $SMTPSecure;
 $mail->Port       = $Port;
 $mail->SMTPDebug  = $SMTPDebug;
 $mail->SMTPAuth   = $SMTPAuth;
 $mail->Username   = $Username;
 $mail->Password   = $Password;
//  $mail->SetFrom($SetFromMail, $SetFromNombre);
 $mail->SetFrom($SetFromMail, $SetFromNombre);
 $mail->AddReplyTo($AddReplyToMail,$AddReplyToNombre);
 $mail->Subject    = $Subject;
 $mail->MsgHTML($body);

 $mail->AddAddress($correo, 'Aplicacion a la oferta: '.$id_oferta);
 $mail->addBCC($correo);

 $mail->AddAttachment($file["tmp_name"], $file["name"]); // ENviar el archivo adjunto

 if($mail->send()){
     $mensaje = "Solicitud enviada.";
     $mensaje2 = "Muchas gracias por utilizar nuestro servicio.";
 }else{
   $mensaje = "Error en el envío";
   $mensaje2 = "Pruebe más tarde.";
 }


// Insertar la aplicacion en las demandas para poder sacar los datos en mi perfil
$sql="INSERT INTO demandas (id_oferta, id_estudiante) 
VALUES(:of, :est)";

$stmt = $conn->prepare($sql);
$stmt->bindParam(':est', $id_estudiante);
$stmt->bindParam(':of', $id_oferta);
$stmt->execute();

?>
<!-- WEB DE SALIDA -->
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
      <meta name="generator" content="Nicepage 4.7.8, nicepage.com">
   </head>
   <body class="u-body u-xl-mode" data-style="login-template-1" data-posts="" data-global-section-properties="{&quot;code&quot;:&quot;LOGIN&quot;,&quot;colorings&quot;:{&quot;light&quot;:[&quot;clean&quot;,&quot;clean&quot;],&quot;colored&quot;:[&quot;clean&quot;,&quot;clean&quot;,&quot;clean&quot;],&quot;dark&quot;:[&quot;clean&quot;,&quot;clean&quot;,&quot;clean&quot;]},&quot;isPreset&quot;:true}" data-source="fix" data-page-sections-style="[{&quot;name&quot;:&quot;login-form-1&quot;,&quot;margin&quot;:&quot;both&quot;,&quot;repeat&quot;:false}]" data-page-coloring-types="{&quot;light&quot;:[&quot;clean&quot;,&quot;clean&quot;],&quot;colored&quot;:[&quot;clean&quot;,&quot;clean&quot;,&quot;clean&quot;],&quot;dark&quot;:[&quot;clean&quot;,&quot;clean&quot;,&quot;clean&quot;]}" data-page-category="&quot;Login&quot;">
      <section class="u-align-center u-clearfix u-block-4460-1" custom-posts-hash="T" data-section-properties="{&quot;margin&quot;:&quot;both&quot;,&quot;stretch&quot;:true}" data-id="4460" data-style="login-form-1" id="sec-d3d1">
          <!-- Navegador -->
          <header class="u-clearfix u-header u-palette-1-base u-header" id="sec-4472">
            <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
               <a href="index.php" class="u-image u-logo u-image-1" data-image-width="80" data-image-height="40">
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
                    <?php echo $mensaje;?>
                </p>
                <p>
                    <?php echo $mensaje2; ?>
                </p>
                <p>
                    <?php echo $mensaje3; ?>
                </p>
            </div>
      </section>
      <section>
          <div>
              <a href="../Mi-Perfil_Estudiante.php" id="linkInicio">Ir a mi perfil</a> 
          </div>
      </section>
   </body>
</html>




