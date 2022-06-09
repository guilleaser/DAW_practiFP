<?php

$host = 'smtp-mail.outlook.com';
$SMTPSecure = 'tls';
// $SMTPSecure = 'SSL';
// $Port       = 587;
$Port       = 587;
$SMTPDebug  =0;
$SMTPAuth   = true;
$Username   = 'practifp@outlook.com';
<<<<<<< HEAD
$Password   = '(***your password***)';
=======
$Password   = '*** YOUR PASSWORD ***';
>>>>>>> 43cc411d3c15b7d9b9336ccb0a2bcc6ec1e355a9
$SetFromMail    = $Username;
$SetFromNombre = "WEB PractiFP";
$AddReplyToMail = 'no-reply@mycomp.com';
$AddReplyToNombre = 'no-reply';
$Subject    = '*CONTACTO DESDE PRACTIFP*';

$AddAddressMail = $Username;
$AddAddressNombre = 'Guillermo García';

?>
