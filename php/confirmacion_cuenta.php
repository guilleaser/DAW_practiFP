<?php
require "conexion_bd.php";
$mensaje = "";
$mensaje2 = "";
$mensaje3 = "";
// Confiramcion estudiante
$consulta = "UPDATE estudiantes SET confirmado = 's'
        WHERE usuario=:user;";
        $stmt = $conn->prepare($consulta);
        $stmt->bindParam(':user', $_GET['usuario']);
        if($stmt->execute()){
            $mensaje = "Muchas gracias ".$_GET['usuario'];
            $mensaje2 = "Su cuenta ha sido correctamente activada.";
            $mensaje3 = "<a href='../Login.php'>Acceder a login</a>";

        }
        // $registro = $stmt->fetch(PDO:: FETCH_ASSOC);

// Confirmacion Empresa
$consulta = "UPDATE empresas SET confirmado = 's'
        WHERE usuario=:user;";
        $stmt = $conn->prepare($consulta);
        $stmt->bindParam(':user', $_GET['usuario']);
        if($stmt->execute()){
            $mensaje = "Muchas gracias ".$_GET['usuario'];
            $mensaje2 = "Su cuenta ha sido correctamente activada.";
            $mensaje3 = "<a href='../Login.php'>Acceder a login</a>";

        }

$paginasalida = 1;

// Web de salida
if ($paginasalida == 1){
    require "crud_salida.php";
}

?>