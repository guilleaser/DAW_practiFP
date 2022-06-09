<!DOCTYPE html>
<html>
   <head>
      <link rel="stylesheet" href="../../css/administrador.css" media="screen">
      <style>
        form {width: 50%; margin-left: 10%;}
        label {display:inline-block; margin-right: 180px; float: right;}
    </style>

   </head>
   <body>
<div>
<form action='' style='margin-left: 10%;' class="formAdmin" id="formAdmin">
    <input type='text' name='dni' id='dni' placeholder="| DNI">
    <input type='text' name='nombre' id='nombre' placeholder="| Nombre del estudiante">
    <input type='text' name='mail' placeholder="| Mail">
    <input type='submit' value='buscar' name='buscar' id='buscar'><br><br>
    <input type='submit' value='Insertar nuevo registro' name='insertar' id='insertar' onclick="aumentarIframe()"><br><br>
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
        $usuario = $_REQUEST['dni'];
        if (!empty($_REQUEST['dni'])){
            $consulta = "SELECT * FROM estudiantes WHERE dni LIKE '%$usuario%';";
        }
        //Buscar por nombre
        $usuario = $_REQUEST['nombre'];
        if (!empty($_REQUEST['nombre'])){
            $consulta = "SELECT * FROM estudiantes WHERE nombre LIKE '%$usuario%';";
        }
        //Buscar por mail
        $usuario = $_REQUEST['mail'];
        if (!empty($_REQUEST['mail'])){
            $consulta = "SELECT * FROM estudiantes WHERE mail LIKE '%$usuario%';";
        }
        
        if (empty($_REQUEST['dni'])&&empty($_REQUEST['nombre'])&&empty($_REQUEST['mail'])){
            $consulta = "SELECT * FROM estudiantes ;";
        }

        $datos = $conn->prepare($consulta);
        $datos->execute();
        echo "<table>";
        echo "<thead class='u-grey-50 u-table-header u-table-header-1'>";
        echo "<tr style='height: 21px;'>";
        echo "<th class='u-border-1 u-border-grey-50 u-table-cell'>Usuario</th>";
              echo "<th class='u-border-1 u-border-grey-50 u-table-cell'>DNI</th>";
              echo "<th class='u-border-1 u-border-grey-50 u-table-cell'>Nombre</th>";
              echo "<th class='u-border-1 u-border-grey-50 u-table-cell'>Apellidos</th>";
              echo "<th class='u-border-1 u-border-grey-50 u-table-cell'>Fecha de Nacimiento</th>";
              echo "<th class='u-border-1 u-border-grey-50 u-table-cell'>Localidad</th>";
              echo "<th class='u-border-1 u-border-grey-50 u-table-cell'>Municipio</th>";
              echo "<th class='u-border-1 u-border-grey-50 u-table-cell'>Código Postal</th>";
              echo "<th class='u-border-1 u-border-grey-50 u-table-cell'>Dirección</th>";
              echo "<th class='u-border-1 u-border-grey-50 u-table-cell'>Móvil</th>";
              echo "<th class='u-border-1 u-border-grey-50 u-table-cell'>Mail</th>";
              echo "<th class='u-border-1 u-border-grey-50 u-table-cell'>Descripción</th>";
            //   echo "<th class='u-border-1 u-border-grey-50 u-table-cell'>Modificar</th>";
            //   echo "<th class='u-border-1 u-border-grey-50 u-table-cell'>Eliminar</th>";
              echo "</tr>";
            echo "</thead>";
        echo "<tbody class='u-table-body'>";
        while ($registro = $datos->fetch(PDO:: FETCH_ASSOC)){
            echo "<form action='' method='POST' id='formulario'>";
            echo "<tr>";
            echo "<input type='hidden' name='id_estudiante' value='".$registro['id_estudiante']."'>";
            echo "<td><input type='text' name='usuario' value='".$registro['usuario']."'></td>";
            echo "<td><input type='text' name='dni' value='".$registro['dni']."'></td>";
            echo "<td><input type='text' name='nombre' value='".$registro['nombre']."'></td>";
            echo "<td><input type='text' name='apellidos' value='".$registro['apellidos']."'></td>";
            echo "<td><input type='date' name='fechNac' value='".$registro['fechaNacimiento']."'></td>";
            echo "<td><input type='text' name='loc' value='".$registro['localidad']."'></td>";
            echo "<td><input type='text' name='mun' value='".$registro['municipio']."'></td>";
            echo "<td><input type='text' name='cp' value='".$registro['codPostal']."'></td>";
            echo "<td><input type='text' name='dir' value='".$registro['direccion']."'></td>";
            echo "<td><input type='number' name='mov' value='".$registro['movil']."'></td>";
            echo "<td><input type='mail' name='mail' value='".$registro['mail']."'></td>";
            echo "<td><input type='text' name='desc' value='".$registro['descripcion']."'></td>";
            echo "<td><input type='submit' id='btnEditar' name='btnEditar' value='Editar'></td>";
            echo "<td><input type='submit'name='btnEliminar' value='Eliminar'></td>";
            echo "</tr>";
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
        $usuario = $_REQUEST['id_estudiante'];
        $consulta = "DELETE FROM estudiantes WHERE id_estudiante LIKE ($usuario);";
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
        $consulta = "UPDATE estudiantes 
        SET centro=:cen, usuario=:user, dni=:dni, nombre=:nom, apellidos=:ape, 
        fechaNacimiento=:fechNac, localidad=:loc, municipio=:mun, codPostal=:codPos, direccion=:dir, 
        movil=:mov, mail=:mail, descripcion=:descr
        WHERE dni=:dni;";
        $stmt = $conn->prepare($consulta);
        $stmt->bindParam(':cen', $_REQUEST['cenEstudios']);
        $stmt->bindParam(':user', $_REQUEST['usuario']);
        $stmt->bindParam(':dni', $_REQUEST['dni']);
        $stmt->bindParam(':nom', $_REQUEST['nombre']);
        $stmt->bindParam(':ape', $_REQUEST['apellidos']);
        $stmt->bindParam(':fechNac', $_REQUEST['fechNac']);
        $stmt->bindParam(':loc', $_REQUEST['loc']);
        $stmt->bindParam(':mun', $_REQUEST['mun']);
        $stmt->bindParam(':codPos', $_REQUEST['cp']);
        $stmt->bindParam(':dir', $_REQUEST['dir']);
        $stmt->bindParam(':mov', $_REQUEST['mov']);
        $stmt->bindParam(':mail', $_REQUEST['mail']);
        $stmt->bindParam(':descr', $_REQUEST['desc']);
        if($stmt->execute()){
            echo "El registro se ha actualizado correctamente.";
        }
        $registro = $datos->fetch(PDO:: FETCH_ASSOC);
    }catch(PDOException $e){
        echo "Error: ".$e->getMessage();
    }
}

// INSERTAR
if(isset($_REQUEST['insertar'])){ 
    echo "<br><form action='../crud.php' method='POST' class='u-clearfix u-form-spacing-10 u-inner-form' name='form' style='padding: 10px;' onsubmit='return validar();'>";
    echo "<br><label for='text-aa37' class='u-label'>Usuario *</label>";
    echo "<input type='text' placeholder='Usuario' id='text-aa37' name='usuario' class='u-border-1 u-border-grey-30 u-input u-input-rectangle u-white u-input-1' required='required'>";
    echo "<br><label for='text-8cf5' class='u-label'>Contraseña *</label>";
    echo "<input type='password' placeholder='Password' id='text-8cf5' name='pass' class='u-border-1 u-border-grey-30 u-input u-input-rectangle u-white u-input-2' required='required'>";
    echo "<br><label for='text-6291' class='u-label'>Identificador personal *</label>";
    echo "<input type='text' placeholder='DNI /NIF' id='text-6291' name='identificador' class='u-border-1 u-border-grey-30 u-input u-input-rectangle u-white u-input-4' required='required'>";
    echo "<br><label for='name-c13e' class='u-label'>Nombre *</label>";
    echo "<input type='text' placeholder='Nombre' id='name-c13e' name='nombre' class='u-border-1 u-border-grey-30 u-input u-input-rectangle u-white u-input-5' required=''>";
    echo "<br><label for='text-de88' class='u-label'>Apellidos *</label>";
    echo "<input type='text' placeholder='Apellidos' id='text-de88' name='apellidos' class='u-border-1 u-border-grey-30 u-input u-input-rectangle u-white u-input-6' required='required'>";
    echo "<br><label for='phone-e71e' class='u-label'>Móvil *</label>";
    echo "<input type='tel' placeholder='Móvil' id='phone-e71e' name='movil' class='u-border-1 u-border-grey-30 u-input u-input-rectangle u-white u-input-8' required=''>";
    echo "<br><label for='text-c80c' class='u-label'>Fecha de nacimiento</label>";
    echo "<input type='date' placeholder='' id='text-c80c' name='fechNacimiento' class='u-border-1 u-border-grey-30 u-input u-input-rectangle u-white u-input-9'>";
    echo "<br><label for='email-c13e' class='u-label'>Email *</label>";
    echo "<input type='email' placeholder='Mail' id='email-c13e' name='mail' class='u-border-1 u-border-grey-30 u-input u-input-rectangle u-white u-input-10' required='required'>";
    echo "<br><label for='address-36d6' class='u-label'>Dirección *</label>";
    echo "<input type='text' placeholder='Dirección' id='address-36d6' name='direccion' class='u-border-1 u-border-grey-30 u-input u-input-rectangle u-white u-input-11' required='required'>";
    echo "<br><label for='address-36d6' class='u-label'>Localidad *</label>";
    echo "<input type='text' placeholder='Localidad' id='address-36d6' name='localidad' class='u-border-1 u-border-grey-30 u-input u-input-rectangle u-white u-input-11' required='required'>";
    echo "<br><label for='text-6868' class='u-label'>Municipio *</label>";
    echo "<input type='text' placeholder='Municipio' id='text-6868' name='municipio' class='u-border-1 u-border-grey-30 u-input u-input-rectangle u-white u-input-12' required='required'>";
    echo "<br><label for='text-8b1a' class='u-label'>Código Postal *</label>";
    echo "<input type='text' placeholder='Código Postal' id='text-8b1a' name='codigoPostal' class='u-border-1 u-border-grey-30 u-input u-input-rectangle u-white u-input-13' required='required'>";
    echo "<br><label for='text-c103' class='u-label'>Descripción</label>";
    echo "<input type='textarea' placeholder='Introducción' id='text-c103' name='descripcion' maxlength='500'>";
    echo "<br><input type='submit' value='Enviar' name='btnInsertarAlumno' class='u-btn u-btn-submit u-button-style'>";
    echo "<br></form>";
 }

?>

</body>
</html>

