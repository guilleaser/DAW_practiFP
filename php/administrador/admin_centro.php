<!DOCTYPE html>
<html>
   <head>
      <link rel="stylesheet" href="../../css/administrador.css" media="screen">
      <style>form {width: 50%; margin-left: 10%;}</style>
   </head>
   <body>

<div>
<form action='' style='margin-left: 10%;' class="formAdmin">
    <input type='text' name='cod_centro' id='cod_centro' placeholder="| Código del centro">
    <input type='text' name='nombre' id='nombre' placeholder="| Nombre del centro">
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
        $usuario = $_REQUEST['cod_centro'];
        if (!empty($_REQUEST['cod_centro'])){
            $consulta = "SELECT * FROM centros_educativos WHERE cod_centro LIKE '%$usuario%';";
        }
        //Buscar por nombre
        $usuario = $_REQUEST['nombre'];
        if (!empty($_REQUEST['nombre'])){
            $consulta = "SELECT * FROM centros_educativos WHERE nombre LIKE '%$usuario%';";
        }
        
        if (empty($_REQUEST['cod_centro'])&&empty($_REQUEST['nombre'])){
            $consulta = "SELECT * FROM centros_educativos;";
        }

        $datos = $conn->prepare($consulta);
        $datos->execute();
        echo "<table>";
        echo "<thead class='u-grey-50 u-table-header u-table-header-1'>";
        echo "<tr style='height: 21px;'>";
        echo "<th class='u-border-1 u-border-grey-50 u-table-cell'>Código centro</th>";
        echo "<th class='u-border-1 u-border-grey-50 u-table-cell'>Nombre</th>";
        echo "<th class='u-border-1 u-border-grey-50 u-table-cell'>Localidad</th>";
        echo "<th class='u-border-1 u-border-grey-50 u-table-cell'>Municipio</th>";
        echo "<th class='u-border-1 u-border-grey-50 u-table-cell'>Código postal</th>";
        echo "<th class='u-border-1 u-border-grey-50 u-table-cell'>Dirección</th>";
        echo "<th class='u-border-1 u-border-grey-50 u-table-cell'>Teléfono</th>";
        echo "<th class='u-border-1 u-border-grey-50 u-table-cell'>Mail</th>";
        echo "<th class='u-border-1 u-border-grey-50 u-table-cell'>Fax</th>";
        echo "<th class='u-border-1 u-border-grey-50 u-table-cell'>Web</th>";
        echo "<th class='u-border-1 u-border-grey-50 u-table-cell'>Descripción</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody class='u-table-body'>";
        while ($registro = $datos->fetch(PDO:: FETCH_ASSOC)){
            echo "<form action='' method='POST' id='formulario'>";
            echo "<tr>";
            echo "<input type='hidden' name='id_centro' value='".$registro['id_centro']."'>";
            echo "<td><input type='text' name='cod_centro' value='".$registro['cod_centro']."'></td>";
            echo "<td><input type='text' name='nombre' value='".$registro['nombre']."'></td>";
            echo "<td><input type='text' name='localidad' value='".$registro['localidad']."'></td>";
            echo "<td><input type='text' name='municipio' value='".$registro['municipio']."'></td>";
            echo "<td><input type='text' name='cod_postal' value='".$registro['cod_postal']."'></td>";
            echo "<td><input type='text' name='direccion' value='".$registro['direccion']."'></td>";
            echo "<td><input type='text' name='telefono' value='".$registro['telefono']."'></td>";
            echo "<td><input type='text' name='mail' value='".$registro['mail']."'></td>";
            echo "<td><input type='text' name='fax' value='".$registro['fax']."'></td>";
            echo "<td><input type='text' name='web' value='".$registro['web']."'></td>";
            echo "<td><input type='text' name='descripcion' value='".$registro['descripcion']."'></td>";
            echo "<td><input type='submit' id='btnEditar' name='btnEditar' value='Editar'></td>";
            echo "<td><input type='submit'name='btnEliminar' value='Eliminar'></td>";
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
        $usuario = $_REQUEST['id_centro'];
        $consulta = "DELETE FROM centros_educativos WHERE id_centro IN ($usuario);";
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
        $consulta = "UPDATE centros_educativos 
        SET cod_centro=:cod_centro, nombre=:nombre, localidad=:localidad, municipio=:municipio, cod_postal=:cod_postal, 
        direccion=:direccion, telefono=:telefono, mail=:mail, fax=:fax, web=:web, descripcion=:descripcion
        WHERE id_centro=:id_centro;";
        $stmt = $conn->prepare($consulta);
        $stmt->bindParam(':id_centro', $_REQUEST['id_centro']);
        $stmt->bindParam(':cod_centro', $_REQUEST['cod_centro']);
        $stmt->bindParam(':nombre', $_REQUEST['nombre']);
        $stmt->bindParam(':localidad', $_REQUEST['localidad']);
        $stmt->bindParam(':municipio', $_REQUEST['municipio']);
        $stmt->bindParam(':cod_postal', $_REQUEST['cod_postal']);
        $stmt->bindParam(':direccion', $_REQUEST['direccion']);
        $stmt->bindParam(':telefono', $_REQUEST['telefono']);
        $stmt->bindParam(':mail', $_REQUEST['mail']);
        $stmt->bindParam(':fax', $_REQUEST['fax']);
        $stmt->bindParam(':web', $_REQUEST['web']);
        $stmt->bindParam(':descripcion', $_REQUEST['descripcion']);
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
    echo "<br><input type='text' placeholder='Ingresa tu usuario' id='text-aa37' name='usuario' class='u-border-1 u-border-grey-30 u-input u-input-rectangle u-white u-input-1' required='required'>";
    echo "<br><label for='text-8cf5' class='u-label'>Contraseña *</label>";
    echo "<br><input type='password' placeholder='Ingresa tu contraseña' id='text-8cf5' name='pass' class='u-border-1 u-border-grey-30 u-input u-input-rectangle u-white u-input-2' required='required'>";
    echo "<br><label for='text-65ef' class='u-label'>Comprobación de contraseña *</label>";
    echo "<br><input type='password' placeholder='Ingresa de nuevo la contraseña' id='text-65ef' name='pass2' class='u-border-1 u-border-grey-30 u-input u-input-rectangle u-white u-input-3' required='required'>";
    echo "<br><label for='text-6291' class='u-label'>Identificador personal *</label>";
    echo "<br><input type='text' placeholder='Ingresa el DNI completo (por ejemplo, 50324786D)' id='text-6291' name='identificador' class='u-border-1 u-border-grey-30 u-input u-input-rectangle u-white u-input-4' required='required'>";
    echo "<br><label for='name-c13e' class='u-label'>Nombre *</label>";
    echo "<br><input type='text' placeholder='Introduzca su nombre' id='name-c13e' name='nombre' class='u-border-1 u-border-grey-30 u-input u-input-rectangle u-white u-input-5' required=''>";
    echo "<br><label for='text-de88' class='u-label'>Apellidos *</label>";
    echo "<br><input type='text' placeholder='Introduzca sus apellidos' id='text-de88' name='apellidos' class='u-border-1 u-border-grey-30 u-input u-input-rectangle u-white u-input-6' required='required'>";
    echo "<br><label for='phone-692a' class='u-label'>Teléfono</label>";
    echo "<br><input type='tel' placeholder='Ingrese su teléfono (por ejemplo, 654321987))' id='phone-692a' name='telefono' class='u-border-1 u-border-grey-30 u-input u-input-rectangle u-white u-input-7'>";
    echo "<br><label for='phone-e71e' class='u-label'>Móvil *</label>";
    echo "<br><input type='tel' placeholder='Ingrese su teléfono (por ejemplo, 654321987)' id='phone-e71e' name='movil' class='u-border-1 u-border-grey-30 u-input u-input-rectangle u-white u-input-8' required=''>";
    echo "<br><label for='text-c80c' class='u-label'>Fecha de nacimiento</label>";
    echo "<br><input type='date' placeholder='' id='text-c80c' name='fechNacimiento' class='u-border-1 u-border-grey-30 u-input u-input-rectangle u-white u-input-9'>";
    echo "<br><label for='email-c13e' class='u-label'>Email *</label>";
    echo "<br><input type='email' placeholder='Introduzca una dirección de correo electrónico válida' id='email-c13e' name='mail' class='u-border-1 u-border-grey-30 u-input u-input-rectangle u-white u-input-10' required='required'>";
    echo "<br><label for='address-36d6' class='u-label'>Dirección *</label>";
    echo "<br><input type='text' placeholder='Ingrese su dirección' id='address-36d6' name='direccion' class='u-border-1 u-border-grey-30 u-input u-input-rectangle u-white u-input-11' required='required'>";
    echo "<br><label for='address-36d6' class='u-label'>Localidad *</label>";
    echo "<br><input type='text' placeholder='Ingrese su localidad' id='address-36d6' name='localidad' class='u-border-1 u-border-grey-30 u-input u-input-rectangle u-white u-input-11' required='required'>";
    echo "<br><label for='text-6868' class='u-label'>Municipio *</label>";
    echo "<br><input type='text' placeholder='Introduce tu municipio' id='text-6868' name='municipio' class='u-border-1 u-border-grey-30 u-input u-input-rectangle u-white u-input-12' required='required'>";
    echo "<br><label for='text-8b1a' class='u-label'>Código Postal *</label>";
    echo "<br><input type='text' placeholder='Introduce tu código postal' id='text-8b1a' name='codigoPostal' class='u-border-1 u-border-grey-30 u-input u-input-rectangle u-white u-input-13' required='required'>";
    echo "<br><label for='select-cfa8' class='u-label'>Centro de estudios *</label>";
    echo "<br><select id='select-cfa8' name='cenEstudios' class='u-border-1 u-border-grey-30 u-input u-input-rectangle u-white' required='required'>";
    echo "<br><option value='01'>IES Ciudad Escolar</option>";
    echo "<br><option value='Otro'>Otro</option>";
    echo "<br></select>";
    echo "<br><svg xmlns='http://www.w3.org/2000/svg' width='14' height='12' version='1' class='u-caret'>";
    echo "<br><path fill='currentColor' d='M4 8L0 4h8z'></path>";
    echo "<br><label for='select-4649' class='u-label'>Estudios *</label>";
    echo "<br><select id='select-4649' name='estudios' class='u-border-1 u-border-grey-30 u-input u-input-rectangle u-white' required='required'>";
    echo "<br><option value='DAW'>DAW</option>";
    echo "<br><option value='DAM'>DAM</option>";
    echo "<br><option value='ASIR'>ASIR</option>";
    echo "<br></select>";
    echo "<br><svg xmlns='http://www.w3.org/2000/svg' width='14' height='12' version='1' class='u-caret'>";
    echo "<br> <path fill='currentColor' d='M4 8L0 4h8z'></path>";
    echo "<br> </svg>";
    echo "<br><label for='text-c103' class='u-label'>Descripción</label>";
    echo "<br><input type='text' placeholder='Puedes hacer una introducción breve sobre tí' id='text-c103' name='descripcion' class='u-border-1 u-border-grey-30 u-input u-input-rectangle u-white u-input-16' maxlength='500'>";
    echo "<br><input type='submit' value='Enviar' name='btnInsertarAlumno' class='u-btn u-btn-submit u-button-style'>";
    echo "<br></form>";
 }

?>


</body>
</html>
