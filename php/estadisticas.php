<?php
require "conexion_bd.php";

/****** Ofertas.php *****/
// Total ofertas 
$consulta = "SELECT count(*) as 'TotalOfertas' FROM ofertas;";
$datos = $conn->prepare($consulta);
$datos->execute();
$registro = $datos->fetch(PDO:: FETCH_ASSOC);
$TotalOfertas       =  $registro[ 'TotalOfertas']; // Salida
// Total estudiantes 
$consulta = "SELECT count(*) as 'TotalEstudiantes' FROM estudiantes;";
$datos = $conn->prepare($consulta);
$datos->execute();
$registro = $datos->fetch(PDO:: FETCH_ASSOC);
$TotalEstudiantes       =  $registro[ 'TotalEstudiantes']; // Salida
// Total empresas 
$consulta = "SELECT count(*) as 'TotalEmpresas' FROM empresas;";
$datos = $conn->prepare($consulta);
$datos->execute();
$registro = $datos->fetch(PDO:: FETCH_ASSOC);
$TotalEmpresas       =  $registro[ 'TotalEmpresas']; // Salida
// Total centros educativos 
$consulta = "SELECT count(*) as 'TotalCentros' FROM centros_educativos;";
$datos = $conn->prepare($consulta);
$datos->execute();
$registro = $datos->fetch(PDO:: FETCH_ASSOC);
$TotalCentros       =  $registro[ 'TotalCentros']; // Salida
?>