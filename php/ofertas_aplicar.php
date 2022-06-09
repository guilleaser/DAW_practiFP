<?php
require "conexion_bd.php";

if(!isset($_SESSION['user'])){
    header("Location:cerrar_sesion.php");
}

$codOferta = $_REQUEST['id_oferta'];
// Consula de datos en base a los criterios del limit, para ofrecer datos en cada pagina
$consulta = "SELECT empresas.nombre, ofertas.* FROM ofertas
                LEFT OUTER JOIN empresas
                    ON ofertas.id_empresa = empresas.id_empresa 
                WHERE ofertas.id_oferta = $codOferta;";
$datos = $conn->prepare($consulta);
$datos->execute();
/*Pintar las tablas */
$listacodigosCheck = "";
$registro = $datos->fetch(PDO:: FETCH_ASSOC);

$id_oferta      = $registro['id_oferta'];
$nombreEMpresa  = $registro['nombre'];
$posicion       = $registro['posicion'];
$correo         = $registro['mail'];
$descripcion    = $registro['descripcion'];
$industria      = $registro['tipoIndustria'];
$direccion      = $registro['direccion'];
$municipio      = $registro['municipio'];
$habilidades    = $registro['habilidad'];
$fecha          = $registro['fecha'];

?>