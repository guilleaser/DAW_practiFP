<!DOCTYPE html>
<html>
   <head>
      <link rel="stylesheet" href="../../css/administrador.css" media="screen">
      <style>
        form {width: 50%; margin-left: 10%;}
        label {display:inline-block; margin-right: 0px; float: right;}
    </style>
   </head>
   <body>
<div>
<form action='' style='margin-left: 10%;' class="formAdmin">
    <input type='text' name='cif' id='cif' placeholder="| Nombre de la empresa">
    <input type='text' name='posicion' id='posicion' placeholder="| Posición">
    <input type='text' name='habilidad' id='habilidad' placeholder="| Habilidades">
    <input type='submit' value='Buscar' name='buscar' id='buscar'><br><br>
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
        $consulta = "SELECT empresas.nombre, ofertas.* FROM ofertas
                            LEFT OUTER JOIN empresas
                                ON empresas.id_empresa = ofertas.id_empresa
                                WHERE empresas.nombre LIKE '%$usuario%';";
        }
        //Buscar por posicion
        $usuario = $_REQUEST['posicion'];
        if (!empty($_REQUEST['posicion'])){
            $consulta = "SELECT empresas.nombre, ofertas.* FROM ofertas
                            LEFT OUTER JOIN empresas
                                ON empresas.id_empresa = ofertas.id_empresa
                                WHERE posicion LIKE '%$usuario%';";
        }
        //Buscar por Habilidad
        $usuario = $_REQUEST['habilidad'];
        if (!empty($_REQUEST['habilidad'])){
        $consulta = "SELECT empresas.nombre, ofertas.* FROM ofertas
                            LEFT OUTER JOIN empresas
                                ON empresas.id_empresa = ofertas.id_empresa
                                WHERE habilidad LIKE '%$usuario%';";
        }
        if (empty($_REQUEST['cif'])&&empty($_REQUEST['habilidad'])&&empty($_REQUEST['posicion'])){
            $consulta = "SELECT empresas.nombre, ofertas.* FROM ofertas
                                LEFT OUTER JOIN empresas
                                    ON empresas.id_empresa = ofertas.id_empresa;";
        }
        $datos = $conn->prepare($consulta);
        $datos->execute();
        echo "<table>";
        echo "<thead class='u-grey-50 u-table-header u-table-header-1'>";
        echo "<tr style='height: 21px;'>";
        echo "<th class='u-border-1 u-border-grey-50 u-table-cell'>Nombre empresa</th>";
        echo "<th class='u-border-1 u-border-grey-50 u-table-cell'>Fecha</th>";
        echo "<th class='u-border-1 u-border-grey-50 u-table-cell'>Dirección</th>";
        echo "<th class='u-border-1 u-border-grey-50 u-table-cell'>Municipio</th>";
        echo "<th class='u-border-1 u-border-grey-50 u-table-cell'>Posición</th>";
        echo "<th class='u-border-1 u-border-grey-50 u-table-cell'>Departamento</th>";
        echo "<th class='u-border-1 u-border-grey-50 u-table-cell'>Habilidades</th>";
        echo "<th class='u-border-1 u-border-grey-50 u-table-cell'>Descripción</th>";
        echo "<th class='u-border-1 u-border-grey-50 u-table-cell'>Tipo de industria</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody class='u-table-body'>";
        while ($registro = $datos->fetch(PDO:: FETCH_ASSOC)){
            echo "<form action='' method='POST' id='formulario'>";
            echo "<tr>";
            echo "<input type='hidden' name='id_oferta' value='".$registro['id_oferta']."'>";
            echo "<td>".$registro['nombre']."</td>";
            echo "<td><input type='date' name='fecha' value='".$registro['fecha']."'></td>";
            echo "<td><input type='text' name='direccion' value='".$registro['direccion']."'></td>";
            echo "<td><input type='text' name='municipio' value='".$registro['municipio']."'></td>";
            echo "<td><input type='text' name='posicion' value='".$registro['posicion']."'></td>";
            echo "<td><input type='text' name='departamento' value='".$registro['departamento']."'></td>";
            echo "<td><input type='text' name='habilidad' value='".$registro['habilidad']."'></td>";
            echo "<td><input type='text' name='descripcion' value='".$registro['descripcion']."'></td>";
            echo "<td><input type='text' name='tipoIndustria' value='".$registro['tipoIndustria']."'></td>";
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
        $usuario = $_REQUEST['id_oferta'];
        $consulta = "DELETE FROM ofertas WHERE id_oferta IN ($usuario);";
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
        $consulta = "UPDATE ofertas 
        SET  fecha=:fecha, direccion=:direccion, municipio=:municipio, posicion=:posicion, 
        departamento=:departamento, habilidad=:habilidad, descripcion=:descripcion, tipoIndustria=:tipoIndustria
        WHERE id_oferta=:id_oferta;";
        $stmt = $conn->prepare($consulta);
        $stmt->bindParam(':id_oferta', $_REQUEST['id_oferta']);
        $stmt->bindParam(':fecha', $_REQUEST['fecha']);
        $stmt->bindParam(':direccion', $_REQUEST['direccion']);
        $stmt->bindParam(':municipio', $_REQUEST['municipio']);
        $stmt->bindParam(':posicion', $_REQUEST['posicion']);
        $stmt->bindParam(':departamento', $_REQUEST['departamento']);
        $stmt->bindParam(':habilidad', $_REQUEST['habilidad']);
        $stmt->bindParam(':descripcion', $_REQUEST['descripcion']);
        $stmt->bindParam(':tipoIndustria', $_REQUEST['tipoIndustria']);
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
    echo '<form action="../crud.php" method="POST" class="" name="form" style="padding: 10px;">';
    echo '<br><label for="">id_empresa</label>';
    echo '<input type="text" placeholder="id empresa" name="id_empresa" id="">';
    echo '<br><label for="name-ac71"  class="u-label">Posicion *</label>';
    echo '<input type="text" placeholder="Posición" id="name-ac71" name="posicion" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">';
    echo '<br><label for="name-ac71" class="u-label">Fecha de inicio *</label>';
    echo '<input type="date" id="name-ac71" name="fecha" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">';
    echo '<br><label for="text-29f4" class="u-label">Tipo de industria *</label>';
    echo '<input type="text" placeholder="Tipo industria" id="text-29f4" name="industria" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">';
    echo '<br><label for="email-ac71" class="u-label">Dirección *</label>';
    echo '<input type="text" placeholder="Dirección " id="email-ac71" name="direccion" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">';
    echo '<br><label for="text-46e8" class="u-label">Municipio *</label>';
    echo '<input type="text" placeholder="Municipio" id="text-46e8" name="municipio" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">';
    echo '<br><label for="text-3456" class="u-label">Habilidades</label>';
    echo '<input type="text" placeholder="Habilidades" id="text-3456" name="habilidades" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">';
    echo '<br><label for="text-3456" class="u-label">Correo donde llegarán las solicitudes *</label>';
    echo '<input type="mail" id="mail" name="correo" value="" placeholder="Mail"  required="required">';
    echo '<br><label for="message-ac71" class="u-label">Descripción de la oferta *</label>';
    echo '<textarea id="textoPlantilla" placeholder="Descripción" rows="4" cols="50"  name="descripcion" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required=""></textarea>';
    echo '<input type="submit" value="Enviar" class="u-btn u-btn-submit u-button-style" name="btnenviaroferta">';
    echo '</form>';
 }

?>

</body>
</html>



