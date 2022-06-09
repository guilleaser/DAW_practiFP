
<?php
require "conexion_bd.php";
error_reporting(E_ALL ^ E_WARNING); //Quitar los warning


if(!isset($_SESSION['user'])){
    header("Location:cerrar_sesion.php");
}


/* PAGINACION */
// Calcular el total de los registros
$tamano=6;
$pagina = $_GET["pagina"];

if (!$pagina) {
    $inicio = 0;
    $pagina=1;
}
else {
    $inicio = ($pagina - 1) * $tamano;
}


$consulta=$conn->query("SELECT COUNT(*) FROM `ofertas`;");
$numeroResgistros=$consulta->fetch(PDO::FETCH_ASSOC);
$totalPaginas=ceil($numeroResgistros['COUNT(*)']/$tamano);

// Contar los resultados en base a la consulta para poder realizar la busqueda adecuada (nombre, posicion, habilidad)
$usuario = $_REQUEST['empresa'];
$consulta=$conn->query("SELECT COUNT(*) as 'cont' FROM `empresas` WHERE nombre LIKE '%$usuario%';");
$nombre=$consulta->fetch(PDO::FETCH_ASSOC);

$consulta=$conn->query("SELECT COUNT(*) as 'cont' FROM `ofertas` WHERE posicion LIKE '%$usuario%';");
$posicion=$consulta->fetch(PDO::FETCH_ASSOC);

$consulta=$conn->query("SELECT COUNT(*) as 'cont' FROM `ofertas` WHERE habilidad LIKE '%$usuario%';");
$habilidad=$consulta->fetch(PDO::FETCH_ASSOC);

// Consula de datos en base a los criterios del limit, para ofrecer datos en cada pagina
// Buscar por id
// $usuario = $_REQUEST['empresa'];
// if (!empty($_REQUEST['empresa'])){
if (($nombre['cont'] > 0) && (!empty($_REQUEST['empresa']))){
    $consulta = "SELECT * FROM centros_educativos WHERE cod_centro LIKE '%$usuario%';";
    $consulta = "SELECT empresas.id_empresa, empresas.nombre, ofertas.* FROM ofertas
                    LEFT OUTER JOIN empresas
                    ON ofertas.id_empresa = empresas.id_empresa
                    WHERE empresas.nombre LIKE '%$usuario%'
                LIMIT $inicio, $tamano";
}
//Buscar por nombre
$usuario = $_REQUEST['empresa'];
// if (!empty($_REQUEST['posicion'])){
if (($posicion['cont'] > 0) && (!empty($_REQUEST['empresa']))){
    $consulta = "SELECT * FROM centros_educativos WHERE nombre LIKE '%$usuario%';";
    $consulta = "SELECT empresas.id_empresa, empresas.nombre, ofertas.* FROM ofertas
                    LEFT OUTER JOIN empresas
                    ON ofertas.id_empresa = empresas.id_empresa
                    WHERE ofertas.posicion LIKE '%$usuario%'
                LIMIT $inicio, $tamano";
}
//Buscar por nombre
$usuario = $_REQUEST['empresa'];
// if (!empty($_REQUEST['Habilidades'])){
if (($habilidad['cont'] > 0) && (!empty($_REQUEST['empresa']))){
    $consulta = "SELECT * FROM centros_educativos WHERE nombre LIKE '%$usuario%';";
    $consulta = "SELECT empresas.id_empresa, empresas.nombre, ofertas.* FROM ofertas
                    LEFT OUTER JOIN empresas
                    ON ofertas.id_empresa = empresas.id_empresa
                    WHERE ofertas.habilidad LIKE '%$usuario%'
                LIMIT $inicio, $tamano";
}
// Consulta completa cuando el input esta vacio, da como resultado todos los datos de la tabla ofertas
if (empty($_REQUEST['empresa']) || (($habilidad['cont'] == 0)&& ($posicion['cont'] == 0)&& ($nombre['cont'] == 0))){
    $consulta = "SELECT empresas.id_empresa, empresas.nombre, ofertas.* FROM ofertas
                    LEFT OUTER JOIN empresas
                    ON ofertas.id_empresa = empresas.id_empresa
                LIMIT $inicio, $tamano";
}
     
$datos = $conn->prepare($consulta);
$datos->execute();
/*Pintar las tablas */
$listacodigosCheck = "";
$contador = 0;
while ($registro = $datos->fetch(PDO:: FETCH_ASSOC)){
    echo " <tr style='height: 75px;'>";
    echo " <td class='u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell'>'".$registro['nombre']."'</td>";
    echo " <td class='u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell'>'".$registro['descripcion']."'</td>";
    echo " <td class='u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell'>'".$registro['habilidad']."'</td>";
    echo " <td class='u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell'>'".$registro['posicion']."'</td>";
    echo " <td class='u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell'>'".$registro['fecha']."'</td>";
    echo " <form action='Aplicar.php'> <input type='hidden' name='id_oferta' value='".$registro['id_oferta']."'></td>";
    echo " <td class='u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell'>
                <input type='submit' name='enviar' value='Ver'></td>";
    echo " </form>";
    echo " </tr>";
    $contador +=1;
}
if (($habilidad['cont'] == 0) && ($posicion['cont'] == 0)&& ($nombre['cont'] == 0)){
    // echo "<script>alert('Lo sentimos, pero no hay registros con los datos introducidos.');</script>";
    echo "<div class='alert' id='alerta'>
        <strong>No hay registros.</strong><br> Mostramos todos los registros disponibles para 
        que pueda volver a realizar una búsqueda.
        </div>
        ";

}



// Salida de los numeros para la seleccion de paginacion
if ($totalPaginas > 1){
    for ($i=1;$i<=$totalPaginas;$i++){
       if ($pagina == $i)
          //si muestro el índice de la página actual, no coloco enlace
          echo "<p style='margin-left: 5%; font-size: 1.5em; display: inline ;'>$pagina</p>";
       else
          //si el índice no corresponde con la página mostrada actualmente, coloco el enlace para ir a esa página
          echo "<a  style='margin-left: 5%; font-size: 1.5em;' href='?pagina=" . $i . "'>" . $i . "</a>";
    }
}   





?>
