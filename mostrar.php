<?php
// Utilizaremos conexion PDO PHP
require "./php/conexion_bd.php";
session_start();

$keyword = '%'.$_REQUEST['palabra'].'%';
$sql = "SELECT nombre FROM empresas WHERE nombre LIKE (:keyword) LIMIT 0, 7";

$query = $conn->prepare($sql);
$query->bindParam(':keyword', $keyword, PDO::PARAM_STR);
$query->execute();
$lista = $query->fetchAll();

foreach ($lista as $milista) {

	// Colocaremos negrita a los textos
	$lista_nombre = str_replace($_POST['palabra'], '<b>'.$_POST['palabra'].'</b>', $milista['nombre']);
	// Aquì, agregaremos opciones
    echo '<li style="color:#0FC2C0;" onclick="set_item(\''.str_replace("'", "\'", $milista['nombre']).'\')">'.$lista_nombre.'</li>';
}

if(empty($lista)){
        $sql = "SELECT posicion FROM ofertas WHERE posicion LIKE (:keyword) LIMIT 0, 7";

        $query = $conn->prepare($sql);
        $query->bindParam(':keyword', $keyword, PDO::PARAM_STR);
        $query->execute();
        $lista = $query->fetchAll();

        foreach ($lista as $milista) {

                // Colocaremos negrita a los textos
                $lista_nombre = str_replace($_POST['palabra'], '<b>'.$_POST['palabra'].'</b>', $milista['posicion']);
                // Aquì, agregaremos opciones
            echo '<li style="color:#0CABA8;" onclick="set_item(\''.str_replace("'", "\'", $milista['posicion']).'\')">'.$lista_nombre.'</li>';
        }
}
if(empty($lista)){
        $sql = "SELECT habilidad FROM ofertas WHERE habilidad LIKE (:keyword) LIMIT 0, 7";

        $query = $conn->prepare($sql);
        $query->bindParam(':keyword', $keyword, PDO::PARAM_STR);
        $query->execute();
        $lista = $query->fetchAll();

        foreach ($lista as $milista) {

                // Colocaremos negrita a los textos
                $lista_nombre = str_replace($_POST['palabra'], '<b>'.$_POST['palabra'].'</b>', $milista['habilidad']);
                // Aquì, agregaremos opciones
            echo '<li style="color:#008F8C;" onclick="set_item(\''.str_replace("'", "\'", $milista['habilidad']).'\')">'.$lista_nombre.'</li>';
        }
}

