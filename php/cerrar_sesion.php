<?php
    //CERRAMOS SESION Y VOLVEMOS AL LOGIN
    session_start();
    session_destroy();
    header("Location:../index.php");
?>
