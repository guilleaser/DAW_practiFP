<?php
$enviado = '';

require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'configuracion_mails.php';

function enviarCorreo($correoF, $usuario, $pass, $host, $SMTPSecure, $Port, $SMTPDebug, $SMTPAuth, $Username, $Password, $SetFromMail, $SetFromNombre, $AddReplyToMail, $AddReplyToNombre, $Subject, $AddAddressMail, $AddAddressNombre){

    $mail=new PHPMailer();
    $mail->CharSet = 'UTF-8';
    
    $body = 'Muchas gracias, se ha registrado correctamente.';
    $body.= '<br><br>Usuario: <br>'.$usuario;
    $body.= '<br><br>Contraseña: <br>'.$pass;
    $body.= '<br><br>Para activar la cuenta haga click en aceptar.';
    $body.= '<br><hr><br><a href="https://localhost/WEB_practifp/php/confirmacion_cuenta.php?usuario='.$usuario.'">Aceptar</a>';

    $mail->IsSMTP();
    $mail->Host       = $host;
    $mail->SMTPSecure = $SMTPSecure;
    $mail->Port       = $Port  ;
    $mail->SMTPDebug  = $SMTPDebug;
    $mail->SMTPAuth   = $SMTPAuth;
    $mail->Username   = $Username;
    $mail->Password   = $Password;
    $mail->SetFrom($SetFromMail , $SetFromNombre);
    // $mail->AddReplyTo($AddReplyToMail, $AddReplyToNombre);
    $mail->Subject    = $Subject;
    $mail->MsgHTML($body);
    
    $mail->AddAddress($AddAddressMail, 'Servicio Técnico PractiFP');
    $mail->addBCC($correoF);
    $mail->send();
}







