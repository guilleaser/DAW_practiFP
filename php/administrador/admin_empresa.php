<!DOCTYPE html>
<html>
   <head>
      <link rel="stylesheet" href="../../css/administrador.css" media="screen">
      <style>
        form {width: 50%; margin-left: 10%;}
        label {display:inline-block; margin-right: 120px; float: right;}
    </style>
   </head>
   <body>
<div>
<form action='' style='margin-left: 10%;' class="formAdmin">
    <input type='text' name='cif' id='cif' placeholder="| CIF / NIF">
    <input type='text' name='nombre' id='nombre' placeholder="| Nombre de la empresa">
    <input type='submit' value='buscar' name='buscar' id='buscar'><br><br>
    <input type='submit' value='Insertar nuevo registro' name='insertar' id='insertar' style="background-color: #849cce;"><br><br>
</form>
</div>
<?php
require "../conexion_bd.php";

session_start();

if(!isset($_SESSION['user']) || $_SESSION['usuario'] != "ADMIN"){
    header("Location:../cerrar_sesion.php");
}

error_reporting(E_ALL ^ E_WARNING); //Quitar los warning


if (isset($_REQUEST['buscar'])){
    try{
        // Buscar por id
        $usuario = $_REQUEST['cif'];
        if (!empty($_REQUEST['cif'])){
            $consulta = "SELECT * FROM empresas WHERE CIF_NIF LIKE '%$usuario%';";
        }
        //Buscar por nombre
        $usuario = $_REQUEST['nombre'];
        if (!empty($_REQUEST['nombre'])){
            $consulta = "SELECT * FROM empresas WHERE nombre LIKE '%$usuario%';";
        }
        if (empty($_REQUEST['cif'])&&empty($_REQUEST['nombre'])){
            $consulta = "SELECT * FROM empresas;";
        }

        $datos = $conn->prepare($consulta);
        $datos->execute();
        echo "<table>";
        echo "<thead class='u-grey-50 u-table-header u-table-header-1'>";
        echo "<tr style='height: 21px;'>";
              echo "<th class='u-border-1 u-border-grey-50 u-table-cell'>id_empresa</th>";
              echo "<th class='u-border-1 u-border-grey-50 u-table-cell'>CIF/NIF</th>";
              echo "<th class='u-border-1 u-border-grey-50 u-table-cell'>Usuario</th>";
              echo "<th class='u-border-1 u-border-grey-50 u-table-cell'>Nombre</th>";
              echo "<th class='u-border-1 u-border-grey-50 u-table-cell'>Categoria</th>";
              echo "<th class='u-border-1 u-border-grey-50 u-table-cell'>Tipo de industria</th>";
              echo "<th class='u-border-1 u-border-grey-50 u-table-cell'>Nombre del Contacto</th>";
              echo "<th class='u-border-1 u-border-grey-50 u-table-cell'>Apellidos del contacto</th>";
              echo "<th class='u-border-1 u-border-grey-50 u-table-cell'>Posicion del contacto</th>";
              echo "<th class='u-border-1 u-border-grey-50 u-table-cell'>Localidad</th>";
              echo "<th class='u-border-1 u-border-grey-50 u-table-cell'>Municipio</th>";
              echo "<th class='u-border-1 u-border-grey-50 u-table-cell'>Código postal</th>";
              echo "<th class='u-border-1 u-border-grey-50 u-table-cell'>Dirección</th>";
              echo "<th class='u-border-1 u-border-grey-50 u-table-cell'>Móvil</th>";
              echo "<th class='u-border-1 u-border-grey-50 u-table-cell'>Mail</th>";
              echo "<th class='u-border-1 u-border-grey-50 u-table-cell'>Fax</th>";
              echo "<th class='u-border-1 u-border-grey-50 u-table-cell'>Web</th>";
              echo "<th class='u-border-1 u-border-grey-50 u-table-cell'>Información</th>";
              echo "<th class='u-border-1 u-border-grey-50 u-table-cell'>Numero de empleados</th>";
              echo "</tr>";
            echo "</thead>";
        echo "<tbody class='u-table-body'>";
        while ($registro = $datos->fetch(PDO:: FETCH_ASSOC)){
            echo "<form action='' method='POST' id='formulario'>";
            echo "<tr>";
            echo "<td><input type='text' name='id' value='".$registro['id_empresa']."'></td>";
            echo "<td><input type='text' name='cif' value='".$registro['CIF_NIF']."'></td>";
            echo "<td><input type='text' name='usuario' value='".$registro['usuario']."'></td>";
            echo "<td><input type='text' name='nombre' value='".$registro['nombre']."'></td>";
            echo "<td><input type='text' name='categoria' value='".$registro['categoria']."'></td>";
            echo "<td><input type='text' name='industria' value='".$registro['tipoIndustria']."'></td>";
            echo "<td><input type='text' name='nombreContacto' value='".$registro['nombreContacto']."'></td>";
            echo "<td><input type='text' name='apellidoContacto' value='".$registro['apellidoContacto']."'></td>";
            echo "<td><input type='text' name='posicionContacto' value='".$registro['posicionContacto']."'></td>";
            echo "<td><input type='text' name='localidad' value='".$registro['localidad']."'></td>";
            echo "<td><input type='text' name='municipio' value='".$registro['municipio']."'></td>";
            echo "<td><input type='number' name='cod_postal' value='".$registro['cod_postal']."'></td>";
            echo "<td><input type='text' name='dir' value='".$registro['direccion']."'></td>";
            echo "<td><input type='number' name='movil' value='".$registro['movil']."'></td>";
            echo "<td><input type='text' name='mail' value='".$registro['mail']."'></td>";
            echo "<td><input type='text' name='web' value='".$registro['web']."'></td>";
            echo "<td><input type='text' name='informacion' value='".$registro['informacion']."'></td>";
            echo "<td><input type='text' name='numEmpleados' value='".$registro['numEmpleados']."'></td>";
            echo "<td><input type='submit' id='btnEditar' name='btnEditar' value='Editar'></td>";
            echo "<td><a href='mailto:practifp@gmail.com?subject=Eliminar Perfil&body=Deseo eliminar mi perfil.' style='color: red;'>Eliminar</a></td>";
            echo "</form>";
            echo " </tbody>";

        }
        echo "</table>";

    }catch(PDOException $e){
        $mensaje = "Error: ".$e->getMessage();
    }
}

/* ELIMINAR */
if(isset($_REQUEST['btnEliminar'])){

    try{
        $usuario = $_REQUEST['id_empresa'];
        $consulta = "DELETE FROM empresas WHERE id_empresa LIKE ($usuario);";
        $datos = $conn->prepare($consulta);
        $datos->execute();
        $registro = $datos->fetch(PDO:: FETCH_ASSOC);
        Echo "El registro se ha eliminado correctamente.";

    }catch(PDOException $e){
        echo "Error: ".$e->getMessage();
    }
}

/* MODIFICAR */
if(isset($_REQUEST['btnEditar'])){
    try{
        $sql = "UPDATE empresas 
        SET CIF_NIF=:CIF_NIF, usuario=:usuario, nombre=:nombre, categoria=:categoria, 
        tipoIndustria=:tipoIndustria, nombreContacto=:nombreContacto, apellidoContacto=:apellidoContacto, posicionContacto=:posicionContacto,
        localidad=:localidad, municipio=:municipio, cod_postal=:cod_postal, direccion=:direccion, 
        movil=:movil, mail=:mail, web=:web, informacion=:informacion, numEmpleados=:numEmpleados
        WHERE CIF_NIF=:CIF_NIF;";


$stmt = $conn -> prepare($sql);
$stmt->bindParam(':CIF_NIF', $_REQUEST['cif']);
$stmt->bindParam(':usuario', $_REQUEST['usuario']);
$stmt->bindParam(':nombre', $_REQUEST['nombre']);
$stmt->bindParam(':categoria', $_REQUEST['categoria']);
$stmt->bindParam(':tipoIndustria', $_REQUEST['industria']);
$stmt->bindParam(':nombreContacto', $_REQUEST['nombreContacto']);
$stmt->bindParam(':apellidoContacto', $_REQUEST['apellidoContacto']);
$stmt->bindParam(':posicionContacto', $_REQUEST['posicionContacto']);
$stmt->bindParam(':localidad', $_REQUEST['localidad']);
$stmt->bindParam(':municipio', $_REQUEST['municipio']);
$stmt->bindParam(':cod_postal', $_REQUEST['cod_postal']);
$stmt->bindParam(':direccion', $_REQUEST['dir']);
$stmt->bindParam(':movil', $_REQUEST['movil']);
$stmt->bindParam(':mail', $_REQUEST['mail']);
$stmt->bindParam(':web', $_REQUEST['web']);
$stmt->bindParam(':informacion', $_REQUEST['informacion']);
$stmt->bindParam(':numEmpleados', $_REQUEST['numEmpleados']);
if($stmt->execute()){
    echo "Registro modificado correctamente";
}
$mensaje = "La información se ha enviado con éxito.";
        
        $registro = $datos->fetch(PDO:: FETCH_ASSOC);
    }catch(PDOException $e){
        echo "Error: ".$e->getMessage();
    }
}

// INSERTAR
if(isset($_REQUEST['insertar'])){ 
    echo  '<form action="../crud.php" method="POST" class="u-clearfix u-form-spacing-10 u-inner-form" source="email" name="form" style="padding: 10px; " onsubmit="return validar_empresa();">';
    echo  ' <br><label for="text-29e9" >Usuario *</label>';
    echo  '<input type="text" placeholder="Usuario" id="text-29e9" name="usuario" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required" maxlength="20">';
    echo  ' <br><label for="text-8c2d"  >CIF /NIF</label>';
    echo  '<input type="text" placeholder="CIF / NIF" id="text-8c2d" name="identificador" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">';
    echo  ' <br><label for="name-c13e"  >Nombre de la empresa *</label>';
    echo  '<input type="text" placeholder="Nombre empresa" id="name-c13e" name="nombreEmpresa" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">';
    echo  ' <br><label for="text-4c9a"  >Nombre de la persona de contacto *</label>';
    echo  '<input type="text" placeholder="Nombre contacto" id="text-4c9a" name="nombreContacto" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">';
    echo  ' <br><label for="text-de88"  >Apellidos de la persona de contacto *</label>';
    echo  '<input type="text" placeholder="Apellidos contacto" id="text-de88em" name="apellidosCOntacto" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">';
    echo  ' <br><label for="text-de88"  >Posicion del contacto dentro de la empresa</label>';
    echo  '<input type="text" placeholder="Posición" id="text-dee88" name="posicion" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" >';
    echo  ' <br><label for="phone-e71e"  >Móvil *</label>';
    echo  '<input type="tel" placeholder="Móvil" id="phone-e71em" name="movil" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="" maxlength="12">';
    echo  ' <br><label for="email-c13e"  >Email *</label>';
    echo  '<input type="email" placeholder="Mail" id="email-c13em" name="mail" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">';
    echo  ' <br><label for="address-36d6"  >Dirección *</label>';
    echo  '<input type="text" placeholder="Dirección" id="address-36d6em" name="direccion" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">';
    echo  ' <br><label for="text-6868"  >Localidad *</label>';
    echo  '<input type="text" placeholder="Localidad" id="text-6868" name="localidad" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">';
    echo  ' <br><label for="text-6868"  >Municipio *</label>';
    echo  '<input type="text" placeholder="Municipio" id="text-6868" name="municipio" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">';
    echo  ' <br><label for="text-8b1a"  >Código Postal *</label>';
    echo  '<input type="text" placeholder="Código postal" id="text-8b1aem" name="codigoPostal" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required" maxlength="5">';
    echo  ' <br><label for="text-c103"  >Tipo de industria *</label>';
    echo  '<input type="text" placeholder="Industria" id="text-c103" name="industria" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" maxlength="500" required="required">';
    echo  ' <br><label for="text-f53a"  >Categoría de la empresa</label>';
    echo  '<input type="text" placeholder="Categoría" id="text-f53a" name="categoria" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">';
    echo  ' <br><label for="text-23c6"  >Número de empleados</label>';
    echo  '<input type="text" placeholder="Num EMpleados" id="text-23c6" name="numEmpleados" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" maxlength="9">';
    echo  ' <br><label for="address-36d6"  >WEB</label>';
    echo  '<input type="text" placeholder="WEB" id="address-36d6" name="web" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">';
    echo  ' <br><label for="address-36d6"  >Información de la empresa</label>';
    echo  '<input type="text" placeholder="Información" id="address-36d6" name="descripcion" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">';
    echo  '<br><input type="submit" value="Enviar" name="btnInsertarEmpresa" class="u-btn u-btn-submit u-button-style">';
    echo  '</form>';
 }

?>
</body>
</html>




