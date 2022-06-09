<?php
require "conexion_bd.php";
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'configuracion_mails.php';

error_reporting(E_ALL ^ E_WARNING); //Quitar los warning

$enviado = '';
$mensaje = '';
$mensaje2 = '';
$mensaje3 = '';
// Variable con los datos de recuperacion
$correo = $_POST['recu_email'];

// Configuracion para el envio del mail de recuperacion de contrasena
// Buscar en la BD estudiante o empresa si el correo concide 
/* Consultar usuario y contraseña para la validacion */

        $consulta = "SELECT usuario, contrasena, mail FROM estudiantes WHERE mail LIKE '$correo';";
        $datos = $conn->prepare($consulta);
        $datos->execute();
        $registro = $datos->fetch(PDO:: FETCH_ASSOC);
        // Obtenemos los datos
        if ($registro['mail']>0){
            $usuario = $registro['usuario'];
            $pass = $registro['contrasena'];
            $usuarioMail = strval($registro['mail']);
        }
        else{
            $consulta = "SELECT usuario, contrasena, mail FROM empresas WHERE mail LIKE '$correo';";
            $datos = $conn->prepare($consulta);
            $datos->execute();
            $registro = $datos->fetch(PDO:: FETCH_ASSOC);
                $usuario = $registro['usuario'];
                $pass = $registro['contrasena'];
                $usuarioMail = strval($registro['mail']);
        }

    // Obtenemos los datos
    $usuario = $registro['usuario'];
    $usuarioMail = strval($registro['mail']);
    if ($registro['mail']==0){
    $mensaje =  "El correo introducido no está registrado.";
    $mensaje2 =  "<a href='../Registro.php>Puede registrarse aquí. </a>";
    }

    // Datos de envio del mail de recuperacin de pass
    $mail = new PHPMailer();
    $mail->CharSet = 'UTF-8';

    $body = 'Este correo responde a la solicitud de recuperación de contraseña en el portal PractiFP.';
    $body.= '<br><br>Sus datos de usuario son los siguientes:';
    $body.= '<br><br>Usuario: <b>'.$usuario.'</b>';
    /* Preparacion para poder enviar correo de cambio de contrasena */
    $body.= '<br><br>Si no recuerda su contraseña puede restablecer una nueva contraseña.</b>';
    $body.= '<br><br>Haga click <a href="https://localhost/WEB_practifp/php/restablecer.php?usuario='.$usuario.'">AQUÍ.</a>';
    $body.= '<br><br>Gracias por usar nuestro servicio.';
    $body.= '<br><br>Atentamente, el servicio técnico de PractiFP.';
    $body.= '<br><i>Si tiene algúna consulta puede responder a este correo.</i>';

    define ('GUSER',$Username);
    define ('GPWD',$Password);
    
    $name       = $SetFromNombre;
    $mailfrom   = $SetFromMail;
    $mailto     = $usuarioMail;
    $context    = $body;
    $subject    = 'Recuperación de cuenta';

    global $error;
    $mail = new PHPMailer();             
    $mail->isSMTP();                          
    $mail->Host      = $host;     
    $mail->SMTPAuth  = $SMTPAuth;                  
    $mail->CharSet   = "UTF-8";
    $mail->SMTPDebug = $SMTPDebug;                    
    $mail->isHTML(true);                    
    
    $mail->Username = GUSER;                    
    $mail->Password = GPWD;                   
    
    //$mail->SMTPAutoTLS    = false;
    $mail->SMTPSecure   = $SMTPSecure;            
    $mail->Port         = $Port  ;      

    $mail->setFrom($mailfrom,$name); 
    $mail->addAddress($mailto);

    $mail->Subject = $subject;
    $mail->Body    = $context;

 
    if($mail->Send()) {
        $mensaje = 'Petición recibida. Compruebe el correo.';
    } else {
        $mensaje = "Error en el envío";
        $mensaje2 = "Pruebe más tarde.";
    }


    require "crud_salida.php";

?>




