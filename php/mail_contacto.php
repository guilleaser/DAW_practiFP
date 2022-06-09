<?php
$enviado = '';
error_reporting(E_ALL ^ E_WARNING); //Quitar los warning

if(isset($_POST['btnENviar'])){
    require 'PHPMailer/PHPMailer.php';
    require 'PHPMailer/SMTP.php';
    require 'configuracion_mails.php';

    $correo = strval($_POST['cnt_email']);

    $mail=new PHPMailer();
    $mail->CharSet = 'UTF-8';

    $body = 'Consulta enviada correctamente:';
    $body.= '<br><hr><br>Email: '.$_POST['cnt_email'].'<br><br>Nombre: <br>'.$_POST['cnt_name'].'<br><br>Consulta: <br>'.$_POST['cnt_message'];
    $body.= '<br><hr><br>Muchas gracias, recibirá respuesta de nuestro servicio técnico lo antes posible.';

    $mail->IsSMTP();
    $mail->Host       = $host;
    $mail->SMTPSecure = $SMTPSecure;
    $mail->Port       = $Port ;
    $mail->SMTPDebug  = $SMTPDebug;
    $mail->SMTPAuth   = $SMTPAuth ;
    $mail->Username   = $Username;
    $mail->Password   = $Password;
    $mail->SetFrom($SetFromMail, $SetFromNombre);
    // $mail->AddReplyTo($AddReplyToMail,$AddReplyToNombre);
    $mail->Subject    = $Subject;
    $mail->MsgHTML($body);

    $mail->AddAddress($AddAddressMail, $AddAddressNombre);
    $mail->addBCC($correo);
    $mail->send();

    header('location:../contacto.php'); 

}


?>
