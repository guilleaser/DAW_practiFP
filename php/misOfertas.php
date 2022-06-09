<?php
require "conexion_bd.php";

if(!isset($_SESSION['user'])){
    header("Location:cerrar_sesion.php");
}

// SALIDA DE LAS OFERTAS DE ESTUDIANTES
if(isset($_SESSION['estudiante'])){

    $estudiante = $_SESSION['estudiante']['id_estudiante'];

    // Consula de datos en base a los criterios del limit, para ofrecer datos en cada pagina
    $consulta = "SELECT empresas.nombre as nombre, ofertas.posicion as posicion, 
                    demandas.ultima_actualizacion as fecha, ofertas.id_oferta as id_oferta
                    FROM empresas	
                        INNER JOIN ofertas
                        ON empresas.id_empresa = ofertas.id_empresa
                        INNER JOIN demandas
                        ON ofertas.id_oferta = demandas.id_oferta 
                        INNER JOIN estudiantes
                        ON demandas.id_estudiante = estudiantes.id_estudiante
                    WHERE estudiantes.id_estudiante = $estudiante;";

    $datos = $conn->prepare($consulta);
    $datos->execute();
    /*Pintar las tablas */
    $listacodigosCheck = "";
    while ($registro = $datos->fetch(PDO:: FETCH_ASSOC)){
        echo " <tr style='height: 76px;'>";
        echo " <td class='u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell'>'".$registro['nombre']."'</td>";
        echo " <td class='u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell'>'".$registro['posicion']."'</td>";
        echo " <td class='u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell'>'".$registro['fecha']."'</td>";
        echo " <td class='u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell'>
        <form action='Aplicar.php'><input type='submit' value='Ver'>
        <input type='hidden' name='id_oferta' value='".$registro['id_oferta']."'>
        </form></td>";
        echo " </tr>";
    }
}

// SALIDA DE LAS OFERTAS DE EMPRESAS
if(isset($_SESSION['empresa'])){

    $empresa = $_SESSION['empresa']['id_empresa'];

    // Consula de datos en base a los criterios del limit, para ofrecer datos en cada pagina
    $consulta = "SELECT ofertas.fecha as fecha, ofertas.posicion as posicion, 
                    ofertas.mail as mail, ofertas.habilidad as habilidad, ofertas.direccion as direccion, 
                    ofertas.descripcion as descripcion, ofertas.id_oferta as id_oferta
                    FROM empresas	
                        INNER JOIN ofertas
                        ON empresas.id_empresa = ofertas.id_empresa
                    WHERE empresas.id_empresa = $empresa;";

    $datos = $conn->prepare($consulta);
    $datos->execute();
    /*Pintar las tablas */
    $listacodigosCheck = "";
    while ($registro = $datos->fetch(PDO:: FETCH_ASSOC)){
        echo " <tr style='height: 76px;'>";
        echo " <td class='u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell'>'".$registro['posicion']."'</td>";
        echo " <td class='u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell'>'".$registro['habilidad']."'</td>";
        echo " <td class='u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell'>'".$registro['direccion']."'</td>";
        echo " <td class='u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell'>'".$registro['habilidad']."'</td>";
        echo " <td class='u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell'>'".$registro['fecha']."'</td>";
        echo " <td class='u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell'>'".$registro['mail']."'</td>";
        echo " <td class='u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell'>
            <form action='Aplicar.php'><input type='submit' value='Ver'>
            <input type='hidden' name='id_oferta' value='".$registro['id_oferta']."'>
            </form></td>";
        echo " <td class='u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell'>
            <form action='php/crud.php' method='post'><input type='submit' value='Borrar' name='borrarOferta' onclick='borrarOfertas()'>
            <input type='hidden' name='id_oferta' value='".$registro['id_oferta']."'>
            </form></td>";
        echo " </tr>";
    }
}
?>
