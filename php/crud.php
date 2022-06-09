<?php
require "conexion_bd.php";
require "mail_verificacion.php";
require 'configuracion_mails.php';

$mensaje = "";
$mensaje2 = "";
$mensaje3 = "";
$paginasalida = 0;



/************************************************************/
/***************       CENTROS EDUCATIVOS   *****************/
/************************************************************/
/***** BUSCAR *****/

/***** INSERTAR *****/
if(isset($_POST['btnInsertarCentro'])){
   
   $sql="SELECT COUNT(*) AS 'cantidad' FROM centros_educativos WHERE cod_centro='".$_REQUEST['codigo']."';";
   $result=$conn->query($sql);
   $num=$result->fetch();
   if ($num['cantidad']>0)
       $mensaje =  "Ya estás registrado<br>";
   else{

   $sql="INSERT INTO centros_educativos (cod_centro, nombre, localidad, municipio, cod_postal, direccion, telefono, mail,
            fax, web, descripcion) 
        VALUES(:cod, :nam, :loc, :mun, :cp, :dir, :tel, :mail, :fax, :web, :descr)";

   $stmt = $conn -> prepare($sql);
   $stmt->bindParam(':cod', $_REQUEST['codigo']);
   $stmt->bindParam(':nam', $_REQUEST['nombre']);
   $stmt->bindParam(':mun', $_REQUEST['municipio']);
   $stmt->bindParam(':loc', $_REQUEST['localidad']);
   $stmt->bindParam(':cp', $_REQUEST['codigoPostal']);
   $stmt->bindParam(':dir', $_REQUEST['direccion']);
   $stmt->bindParam(':tel', $_REQUEST['telefono']);
   $stmt->bindParam(':mail', $_REQUEST['mail']);
   $stmt->bindParam(':fax', $_REQUEST['fax']);
   $stmt->bindParam(':web', $_REQUEST['web']);
   $stmt->bindParam(':descr', $_REQUEST['descripcion']);
   $stmt->execute();
   $mensaje = "La información se ha enviado con éxito.";
   $mensaje2 = "Por favor, compruebe su correo para poder validar la información.";
   }
   $paginasalida = 1;
}

/***** MODIFICAR *****/

/***** ELIMINAR *****/
if(isset($_REQUEST['btnEliminar'])){
    try{
        $eliminar = $_REQUEST['reg_ce_codCentro'];
        $consulta = "DELETE FROM centros_educativos WHERE cod_centro IN ($eliminar);";
        $datos = $conexion->prepare($consulta);
        if($datos->execute()){
            $mensaje = "El registro se ha eliminado correctamente.";
            $mensaje2 = "Muchas gracias por utilizar nuestro servicio.";
        }
        $registro = $datos->fetch(PDO:: FETCH_ASSOC);
    }catch(PDOException $e){
        $mensaje = "Error: ".$e->getMessage();
    }
}


/************************************************************/
/********************       ESTUDIANTES   *******************/
/************************************************************/
/***** BUSCAR *****/
if(isset($_POST['cargarDatos'])){ 
    try{
        $usuario = $_SESSION['user'];
        $consulta = "SELECT * FROM estudiantes WHERE user IN ($usuario);";
        $datos = $conexion->prepare($consulta);
        $datos->execute();
        $registro = $datos->fetch(PDO:: FETCH_ASSOC);
    }catch(PDOException $e){
        $mensaje = "Error: ".$e->getMessage();
    }
    header('Location: ../Mi-Perfil_Estudiante.php');
}
if(isset($_POST['btnBuscar'])){ 
    try{
        // Buscar por id
        $usuario = $_POST['id'];
        $consulta = "SELECT * FROM estudiantes WHERE dni IN ($usuario);";
        //Buscar por nombre
        $usuario = $_POST['nombre'];
        $consulta = "SELECT * FROM estudiantes WHERE nombre LIKE '%$usuario%';";

        $datos = $conexion->prepare($consulta);
        $datos->execute();
        $registro = $datos->fetch(PDO:: FETCH_ASSOC);
    }catch(PDOException $e){
        $mensaje = "Error: ".$e->getMessage();
    }
    header('Location: ../Mi-Perfil_Estudiante.php');
}


/***** INSERTAR *****/

if(isset($_POST['btnInsertarAlumno'])){ 
    //comprobarDni();

    //Quitar espacios en blanco
    $searchString = " ";
    $replaceString = "";
    $usuario = str_replace($searchString, $replaceString, $_REQUEST['usuario']); 
   
    $sql="SELECT COUNT(*) AS 'cantidad' FROM estudiantes WHERE dni='".$_REQUEST['identificador']."';";
    $result=$conn->query($sql);
    $dni=$result->fetch();

    $sql="SELECT COUNT(*) AS 'cantidad' FROM estudiantes WHERE usuario='".$_REQUEST['usuario']."';";
    $result=$conn->query($sql);
    $user=$result->fetch();

    $sql="SELECT COUNT(*) AS 'cantidad' FROM estudiantes WHERE mail='".$_REQUEST['mail']."';";
    $result=$conn->query($sql);
    $mail=$result->fetch();
    // COmprobar empresas
    $sql="SELECT COUNT(*) AS 'cantidad' FROM empresas WHERE mail='".$_REQUEST['mail']."';";
    $result=$conn->query($sql);
    $mailempresa=$result->fetch();

    $sql="SELECT COUNT(*) AS 'cantidad' FROM empresas WHERE usuario='".$_REQUEST['usuario']."';";
    $result=$conn->query($sql);
    $userempresa=$result->fetch();

    if ($dni['cantidad']>0)
        $mensaje = "Ya existe un usuario con ese DNI<br><br>¿No tienes cuenta? <a href='../Registro.php'>Registrarse</a>";
    elseif($user['cantidad']>0)
        $mensaje = "Ya existe un estudiante con ese nombre de usuario, prueba con uno diferente.<br><br>¿No tienes cuenta? <a href='../Registro.php'>Registrarse</a>";
    elseif($mail['cantidad']>0)
        $mensaje = "Ya existe un usuario con ese correo<br><br>¿No tienes cuenta? <a href='../Registro.php'>Registrarse</a>";
    elseif($mailempresa['cantidad']>0)
        $mensaje = "Ya existe un usuario con ese correo<br><br>¿No tienes cuenta? <a href='../Registro.php'>Registrarse</a>";
    elseif($userempresa['cantidad']>0)
        $mensaje = "Ya existe un usuario con ese correo<br><br>¿No tienes cuenta? <a href='../Registro.php'>Registrarse</a>";

    else{
 
    $sql="INSERT INTO estudiantes (centro, usuario, contrasena, dni, nombre, apellidos, fechaNacimiento, localidad,
     municipio, codPostal, direccion, telefono, movil, mail, descripcion) 
    VALUES(:cen, :user, :pass, :dni, :nom, :ape, :fechNac, :loc, :mun, :codPos, :dir, :tel, :mov, :mail, :descr)";

    $stmt = $conn -> prepare($sql);
    $stmt->bindParam(':cen', $_REQUEST['cenEstudios']);
    $stmt->bindParam(':user', $usuario);
    // $stmt->bindParam(':pass', strtolower($_REQUEST['pass']));
    $hash = password_hash($_REQUEST['pass'], PASSWORD_DEFAULT);
    $stmt->bindParam(':pass', $hash);
    $stmt->bindParam(':dni', $_REQUEST['identificador']);
    $stmt->bindParam(':nom', $_REQUEST['nombre']);
    $stmt->bindParam(':ape', $_REQUEST['apellidos']);
    $stmt->bindParam(':fechNac', $_REQUEST['fechNacimiento']);
    $stmt->bindParam(':loc', $_REQUEST['localidad']);
    $stmt->bindParam(':mun', $_REQUEST['municipio']);
    $stmt->bindParam(':codPos', $_REQUEST['codigoPostal']);
    $stmt->bindParam(':dir', $_REQUEST['direccion']);
    $stmt->bindParam(':tel', $_REQUEST['telefono']);
    $stmt->bindParam(':mov', $_REQUEST['movil']);
    $stmt->bindParam(':mail', $_REQUEST['mail']);
    $stmt->bindParam(':descr', $_REQUEST['descripcion']);
    if($stmt->execute()){
        enviarCorreo(strval($_REQUEST['mail']), $_REQUEST['usuario'], $_REQUEST['pass'], $host, $SMTPSecure, $Port, $SMTPDebug, $SMTPAuth, $Username, $Password, $SetFromMail, $SetFromNombre, $AddReplyToMail, $AddReplyToNombre, $Subject, $AddAddressMail, $AddAddressNombre);
    }
    $mensaje = "La información se ha enviado con éxito.";
    $mensaje2 = "Por favor, compruebe su correo para poder validar la información.";
    $mensaje3 = "<a href='../Login.php' id='linkOferta'>Ir a log in</a>";
    }
    $paginasalida = 1;
 }


/***** MODIFICAR *****/
if(isset($_REQUEST['btnModificarEstudiante'])){
    try{
        //Quitar espacios en blanco
        $searchString = " ";
        $replaceString = "";
        $usuario = str_replace($searchString, $replaceString, $_REQUEST['usuario']); 
        $sql="SELECT COUNT(*) AS 'cantidad' FROM estudiantes WHERE dni='".$_REQUEST['identificador']."';";
        $result=$conn->query($sql);
        $dni=$result->fetch();

        $sql="SELECT COUNT(*) AS 'cantidad' FROM estudiantes WHERE usuario='".$_REQUEST['usuario']."';";
        $result=$conn->query($sql);
        $user=$result->fetch();

    $sql="SELECT COUNT(*) AS 'cantidad' FROM estudiantes WHERE mail='".$_REQUEST['mail']."';";
    $result=$conn->query($sql);
    $mail=$result->fetch();
    if ($dni['cantidad']>1)
        $mensaje = "Ya existe un usuario con ese DNI<br>";
    elseif($user['cantidad']>1)
        $mensaje = "Ya existe un estudiante con ese nombre de usuario, prueba con uno diferente.<br>";
    elseif($mail['cantidad']>1){
        $mensaje = "Ya existe un usuario con ese correo<br>";

        }else{
            $consulta = "UPDATE estudiantes 
            SET centro=:cen, usuario=:user, dni=:dni, nombre=:nom, apellidos=:ape, 
            fechaNacimiento=:fechNac, localidad=:loc, municipio=:mun, codPostal=:codPos, direccion=:dir, 
            telefono=:tel, movil=:mov, mail=:mail, descripcion=:descr
            WHERE dni=:dni;";
            
            
            $stmt = $conn->prepare($consulta);
            $stmt->bindParam(':cen', $_REQUEST['cenEstudios']);
            $stmt->bindParam(':user', $usuario);
            // $stmt->bindParam(':pass', strtolower($_REQUEST['pass']));
            // $hash = password_hash($_REQUEST['pass'], PASSWORD_DEFAULT);
            // $stmt->bindParam(':pass', $hash);
            $stmt->bindParam(':dni', $_REQUEST['identificador']);
            $stmt->bindParam(':nom', $_REQUEST['nombre']);
            $stmt->bindParam(':ape', $_REQUEST['apellidos']);
            $stmt->bindParam(':fechNac', $_REQUEST['fechNacimiento']);
            $stmt->bindParam(':loc', $_REQUEST['localidad']);
            $stmt->bindParam(':mun', $_REQUEST['municipio']);
            $stmt->bindParam(':codPos', $_REQUEST['codigoPostal']);
            $stmt->bindParam(':dir', $_REQUEST['direccion']);
            $stmt->bindParam(':tel', $_REQUEST['telefono']);
            $stmt->bindParam(':mov', $_REQUEST['movil']);
            $stmt->bindParam(':mail', $_REQUEST['mail']);
            $stmt->bindParam(':descr', $_REQUEST['descripcion']);
            if($stmt->execute()){
                session_start();
                $user = $_SESSION['user'];
                $usuario = $_SESSION['usuario'];
                $codigoSQL = "SELECT * FROM estudiantes WHERE usuario = :user;";
                $consulta = $conn->prepare($codigoSQL);
                $consulta->bindParam(':user', $_SESSION['user']);
                $consulta->execute();
                $estudiante = $consulta->fetch(PDO::FETCH_ASSOC);
                session_destroy();
                session_start();
                $_SESSION['user'] = $user;
                $_SESSION['usuario'] = $usuario;
                $_SESSION['estudiante'] = $estudiante;
                header("Location:../Mi-Perfil_Estudiante.php");
            }
            $registro = $stmt->fetch(PDO:: FETCH_ASSOC);}
    }catch(PDOException $e){
        echo "Error: ".$e->getMessage();
    }
    $paginasalida = 1;
}

/***** ELIMINAR *****/
if(isset($_REQUEST['btnEliminarEstudiante'])){
    try{
        $eliminar = $_REQUEST['identificador'];
        $consulta = "DELETE FROM estudiantes WHERE dni IN ($eliminar);";
        $datos = $conexion->prepare($consulta);
        if($datos->execute()){
            $mensaje = "El registro se ha eliminado correctamente.";
            $mensaje2 = "Muchas gracias por utilizar nuestro servicio.";
        }
        $registro = $datos->fetch(PDO:: FETCH_ASSOC);
    }catch(PDOException $e){
        $mensaje = "Error: ".$e->getMessage();
    }
    $paginasalida = 1;
}

/************************************************************/
/********************       EMPRESAS   **********************/
/************************************************************/
/***** BUSCAR *****/
/***** INSERTAR *****/

if(isset($_POST['btnInsertarEmpresa'])){ 
    
     //Quitar espacios en blanco
    $searchString = " ";
    $replaceString = "";
    $usuario = str_replace($searchString, $replaceString, $_REQUEST['usuario']); 

    $sql="SELECT COUNT(*) AS 'cantidad' FROM empresas WHERE CIF_NIF LIKE '".$_REQUEST['identificador']."';";
    $result=$conn->query($sql);
    $cif=$result->fetch();

    $sql="SELECT COUNT(*) AS 'cantidad' FROM empresas WHERE usuario='".$_REQUEST['usuario']."';";
    $result=$conn->query($sql);
    $user=$result->fetch();

    $sql="SELECT COUNT(*) AS 'cantidad' FROM empresas WHERE mail='".$_REQUEST['mail']."';";
    $result=$conn->query($sql);
    $mail=$result->fetch();

    // Consultar estudiantes
    $sql="SELECT COUNT(*) AS 'cantidad' FROM estudiantes WHERE usuario='".$_REQUEST['usuario']."';";
    $result=$conn->query($sql);
    $userEstudiantes=$result->fetch();

    $sql="SELECT COUNT(*) AS 'cantidad' FROM estudiantes WHERE mail='".$_REQUEST['mail']."';";
    $result=$conn->query($sql);
    $mailEstudiantes=$result->fetch();

    if ($cif['cantidad']>0)
        $mensaje = "Ya existe una cuenta con ese CIF<br><br>¿No tienes cuenta? <a href='../Registro.php'>Registrarse</a>";
    elseif ($user['cantidad']>0)
        $mensaje = "Ya existe una cuenta con ese nombre usuario<br><br>¿No tienes cuenta? <a href='../Registro.php'>Registrarse</a>";
    elseif ($mail['cantidad']>0)
        $mensaje = "Ya existe una cuenta con ese nombre mail<br><br>¿No tienes cuenta? <a href='../Registro.php'>Registrarse</a>";
    elseif ($userEstudiantes['cantidad']>0)
        $mensaje = "Ya existe una cuenta con ese nombre usuario<br><br>¿No tienes cuenta? <a href='../Registro.php'>Registrarse</a>";
    elseif ($mailEstudiantes['cantidad']>0)
        $mensaje = "Ya existe una cuenta con ese nombre mail<br><br>¿No tienes cuenta? <a href='../Registro.php'>Registrarse</a>";

    else{
 
    $sql="INSERT INTO empresas (CIF_NIF, usuario, nombre, categoria, tipoIndustria, nombreContacto, contrasena,	
                        apellidoContacto, posicionContacto, localidad, municipio, cod_postal, direccion, telefono, 	
                        movil, mail, fax, web, informacion, numEmpleados) 
    VALUES(:CIF_NIF, :usuario, :nombre, :categoria, :tipoIndustria, :nombreContacto, :contrasena, :apellidoContacto, 
            :posicionContacto, :localidad, :municipio, :cod_postal, :direccion, :telefono, :movil, :mail, :fax, :web, 
            :informacion, :numEmpleados)";

    $stmt = $conn -> prepare($sql);
    $stmt->bindParam(':CIF_NIF', $_REQUEST['identificador']);
    $stmt->bindParam(':usuario', $usuario);
    $hash = password_hash($_REQUEST['pass'], PASSWORD_DEFAULT);
    $stmt->bindParam(':contrasena', $hash);
    $stmt->bindParam(':nombre', $_REQUEST['nombreEmpresa']);
    $stmt->bindParam(':categoria', $_REQUEST['categoria']);
    $stmt->bindParam(':tipoIndustria', $_REQUEST['industria']);
    $stmt->bindParam(':nombreContacto', $_REQUEST['nombreContacto']);
    $stmt->bindParam(':apellidoContacto', $_REQUEST['apellidosCOntacto']);
    $stmt->bindParam(':posicionContacto', $_REQUEST['posicion']);
    $stmt->bindParam(':localidad', $_REQUEST['localidad']);
    $stmt->bindParam(':municipio', $_REQUEST['municipio']);
    $stmt->bindParam(':cod_postal', $_REQUEST['codigoPostal']);
    $stmt->bindParam(':direccion', $_REQUEST['direccion']);
    $stmt->bindParam(':telefono', $_REQUEST['telefono']);
    $stmt->bindParam(':movil', $_REQUEST['movil']);
    $stmt->bindParam(':mail', $_REQUEST['mail']);
    $stmt->bindParam(':fax', $_REQUEST['fax']);
    $stmt->bindParam(':web', $_REQUEST['web']);
    $stmt->bindParam(':informacion', $_REQUEST['descripcion']);
    $stmt->bindParam(':numEmpleados', $_REQUEST['numEmpleados']);
    if($stmt->execute()){
        enviarCorreo(strval($_REQUEST['mail']), $_REQUEST['usuario'], $_REQUEST['pass'], $host, $SMTPSecure, $Port, $SMTPDebug, $SMTPAuth, $Username, $Password, $SetFromMail, $SetFromNombre, $AddReplyToMail, $AddReplyToNombre, $Subject, $AddAddressMail, $AddAddressNombre);
    }
    $mensaje = "La información se ha enviado con éxito.";
    $mensaje2 = "Por favor, compruebe su correo para poder validar la información.";
    }
    $paginasalida = 1;
 }


/***** MODIFICAR *****/
if(isset($_REQUEST['btnModificarEmpresa'])){
    try{

    //Quitar espacios en blanco
    $searchString = " ";
    $replaceString = "";
    $usuario = str_replace($searchString, $replaceString, $_REQUEST['usuario']); 

    $sql="SELECT COUNT(*) AS 'cantidad' FROM empresas WHERE CIF_NIF LIKE '".$_REQUEST['identificador']."';";
    $result=$conn->query($sql);
    $cif=$result->fetch();

    $sql="SELECT COUNT(*) AS 'cantidad' FROM empresas WHERE usuario='".$_REQUEST['usuario']."';";
    $result=$conn->query($sql);
    $user=$result->fetch();

    $sql="SELECT COUNT(*) AS 'cantidad' FROM empresas WHERE mail='".$_REQUEST['mail']."';";
    $result=$conn->query($sql);
    $mail=$result->fetch();

    if ($num['cantidad']>1)
        $mensaje = "Ya existe una cuenta con ese CIF<br>";
    elseif ($user['cantidad']>1)
        $mensaje = "Ya existe una cuenta con ese usuario<br>";
    elseif ($mail['cantidad']>1)
        $mensaje = "Ya existe una cuenta con ese mail<br>";
        else{

        
        $consulta = "UPDATE empresas SET CIF_NIF=:CIF_NIF,usuario=:usuario,nombre=:nom,
        categoria=:categoria,tipoIndustria=:tipoIndustria,nombreContacto=:nombreContacto,apellidoContacto=:apellidoContacto,
        posicionContacto=:posicionContacto,localidad=:localidad,municipio=:municipio,cod_postal=:cod_postal,
        direccion=:direccion,telefono=telefono,movil=:movil,mail=:mail,
        web=:web,informacion=:informacion,numEmpleados=:numEmpleados
        WHERE CIF_NIF=:CIF_NIF;";
        
        $stmt = $conn->prepare($consulta);
        $stmt->bindParam(':CIF_NIF', $_REQUEST['id']);
        $stmt->bindParam(':usuario', $usuario);
        $stmt->bindParam(':nom', $_REQUEST['nombre']);
        $stmt->bindParam(':categoria', $_REQUEST['cat']);
        $stmt->bindParam(':tipoIndustria', $_REQUEST['tipInd']);
        $stmt->bindParam(':nombreContacto', $_REQUEST['nomContacto']);
        $stmt->bindParam(':apellidoContacto', $_REQUEST['apeCont']);
        $stmt->bindParam(':posicionContacto', $_REQUEST['posicionContacto']);
        $stmt->bindParam(':localidad', $_REQUEST['localidad']);
        $stmt->bindParam(':municipio', $_REQUEST['mun']);
        $stmt->bindParam(':cod_postal', $_REQUEST['codPost']);
        $stmt->bindParam(':direccion', $_REQUEST['dir']);
        $stmt->bindParam(':telefono', $_REQUEST['telefono']);
        $stmt->bindParam(':movil', $_REQUEST['movil']);
        $stmt->bindParam(':mail', $_REQUEST['mail']);
        $stmt->bindParam(':web', $_REQUEST['web']);
        $stmt->bindParam(':informacion', $_REQUEST['informacion']);
        $stmt->bindParam(':numEmpleados', $_REQUEST['numEmp']);
        if($stmt->execute()){
            session_start();
            $user = $_SESSION['user'];
            $usuario = $_SESSION['usuario'];
            $codigoSQL1 = "SELECT * FROM empresas WHERE usuario = :user;";
            $consulta = $conn->prepare($codigoSQL1);
            $consulta->bindParam(':user', $_SESSION['user']);
            $consulta->execute();
            $empresa = $consulta->fetch(PDO::FETCH_ASSOC);
            session_destroy();
            session_start();
            $_SESSION['user'] = $user;
            $_SESSION['usuario'] = $usuario;
            $_SESSION['empresa'] = $empresa;
            header("Location:../Mi-Perfil_Empresa.php");

        }
        $registro = $stmt->fetch(PDO:: FETCH_ASSOC);
    }
    }catch(PDOException $e){
        echo "Error: ".$e->getMessage();
    }
    $paginasalida = 1;
}
/***** ELIMINAR *****/
if(isset($_REQUEST['btnEliminarEmpresa'])){
    try{
        $eliminar = $_REQUEST['id'];
        $consulta = "DELETE FROM empresas WHERE CIF_NIF IN ($eliminar);";
        $datos = $conn->prepare($consulta);
        if($datos->execute()){
            $mensaje = "El registro se ha eliminado correctamente.";
            $mensaje2 = "Muchas gracias por utilizar nuestro servicio.";
        }
        $registro = $datos->fetch(PDO:: FETCH_ASSOC);
    }catch(PDOException $e){
        $mensaje = "Error: ".$e->getMessage();
    }
}


/************************************************************/
/******************       DEPARTAMENTOS   *******************/
/************************************************************/
/***** BUSCAR *****/

/***** INSERTAR *****/
/***** MODIFICAR *****/
/***** ELIMINAR *****/
if(isset($_REQUEST['btnEliminar'])){
    try{
        $eliminar = $_REQUEST['reg_est_dni'];
        $consulta = "DELETE FROM estudiantes WHERE dni IN ($eliminar);";
        $datos = $conexion->prepare($consulta);
        if($datos->execute()){
            $mensaje = "El registro se ha eliminado correctamente.";
            $mensaje2 = "Muchas gracias por utilizar nuestro servicio.";

        }
        $registro = $datos->fetch(PDO:: FETCH_ASSOC);
    }catch(PDOException $e){
        $mensaje = "Error: ".$e->getMessage();
    }
}



/************************************************************/
/*********************       OFERTAS   **********************/
/************************************************************/
/***** BUSCAR Y MOSTRAR*****/

/***** INSERTAR *****/
// id_oferta	id_estudiante	id_empresa	fecha	duracion	horario	posicion	
// departamento	conocimientoPrevio	conocimientoFinal	habilidad	requisito	
// idioma	descripcion	tipoIndustria	vacante	beneficio	teletrabajo	ultima_actualizacion	
if(isset($_POST['btnenviaroferta'])){ 
    try{
    $sql="INSERT INTO ofertas (id_empresa, posicion, mail, fecha, tipoIndustria, direccion, municipio, habilidad, descripcion) 
            VALUES(:id_empresa, :posicion, :mail, :fecha, :industria, :direccion, :municipio,  :habilidad, :descripcion)";
 
    $stmt = $conn -> prepare($sql);
    $stmt->bindParam(':id_empresa', $_REQUEST['id_empresa']);
    $stmt->bindParam(':posicion', $_REQUEST['posicion']);
    $stmt->bindParam(':mail', $_REQUEST['correo']);
    $stmt->bindParam(':fecha', $_REQUEST['fecha']);
    $stmt->bindParam(':industria', $_REQUEST['industria']);
    $stmt->bindParam(':direccion', $_REQUEST['direccion']);
    $stmt->bindParam(':municipio', $_REQUEST['municipio']);
    $stmt->bindParam(':habilidad', $_REQUEST['habilidades']);
    $stmt->bindParam(':descripcion', $_REQUEST['descripcion']);
    $stmt->execute();

    $mensaje = "Muchas gracias, se ha enviado con éxito.";
    $mensaje2 = "Puede consultar y editar la oferta en su perfil de usuario.";
    $mensaje3 = "<a href='../Mi-perfil_Empresa.php' id='linkOferta'>Ir a mi perfil</a>";
    

    }catch(PDOException $e){
        $mensaje = "Error: ".$e->getMessage();
    }
$paginasalida = 1;
    
 }



/***** MODIFICAR *****/

/***** ELIMINAR *****/
if(isset($_REQUEST['borrarOferta'])){
    try{
        $eliminar = $_REQUEST['id_oferta'];
        $sql = "SELECT COUNT(*) AS 'cont' FROM demandas WHERE id_oferta LIKE '%$eliminar%';";
        $consulta=$conn->query($sql);
        $registro=$consulta->fetch(PDO::FETCH_ASSOC);
        if ($registro['cont']>0){
            $mensaje = "Esta oferta tiene ".$registro['cont']." aplicaciones.";
            $mensaje2 = "No se puede borrar";
            $mensaje3 = "<a href='../Mi-perfil_Empresa.php' id='linkOferta'>Ir a mi perfil</a>";
        }else{
            $consulta = "DELETE FROM ofertas WHERE id_oferta IN ($eliminar);";
            $datos = $conn->prepare($consulta);
            if($datos->execute()){
                $mensaje  = "El registro se ha eliminado correctamente.";
                $mensaje2 = "Muchas gracias por utilizar nuestro servicio.";
                $mensaje3 = "<a href='../Mi-perfil_Empresa.php' id='linkOferta'>Ir a mi perfil</a>";
            }
            $registro = $datos->fetch(PDO:: FETCH_ASSOC);
        }
    }catch(PDOException $e){
        $mensaje = "Error: ".$e->getMessage();
    }
    $paginasalida = 1;
}

/********* Modificar password   **********/
if(isset($_REQUEST['btnModificarPass'])){
    $usuario = $_REQUEST['usuario'];
    $sql = "SELECT COUNT(*) AS 'cont' FROM estudiantes WHERE usuario LIKE '%$usuario%';";
    $consulta=$conn->query($sql);
    $registro=$consulta->fetch(PDO::FETCH_ASSOC);

    if ($registro['cont']>0){
        $consulta = "UPDATE estudiantes SET contrasena=:pass WHERE usuario LIKE '%$usuario%' ;";
        $stmt = $conn->prepare($consulta);
        $hash = password_hash($_REQUEST['pass'], PASSWORD_DEFAULT);
        $stmt->bindParam(':pass', $hash);
        if($stmt->execute()){
            $mensaje = "El registro de estudiante se ha actualizado correctamente.";
            $mensaje3 = "<a href='../Login.php' id='linkOferta'>Ir a log in</a>";

        }
    }else{
        $consulta = "UPDATE empresas SET contrasena=:pass WHERE usuario LIKE '%$usuario%' ;";
        $stmt = $conn->prepare($consulta);
        $hash = password_hash($_REQUEST['pass'], PASSWORD_DEFAULT);
        $stmt->bindParam(':pass', $hash);
        if($stmt->execute()){
            $mensaje = "El registro de empresa se ha actualizado correctamente.";
            $mensaje3 = "<a href='../Login.php' id='linkOferta'>Ir a log in</a>";

        }
    }
    $paginasalida = 1;
}


// Web de salida
if ($paginasalida == 1){
    require "crud_salida.php";
}


