<?php
    require "conexion_bd.php";
    //CREAMOS UNA NUEVA SESION
    
    if(isset($_POST['btnEnviar'])){
        session_start();
        
        //VARIABLE SUPERGLOBAL CON EL CODIGO DEL EMPLEADO
        $_SESSION['user'] = $_POST['log_usuario'];
        $_SESSION['pass'] = $_POST['log_pass'];

        //CREAMOS LAS COOKIES
        if (isset($_POST["check"])){
            setcookie ("user", $_POST['log_usuario'], time () + 600);
            setcookie ("pass", $_POST['log_pass'], time () + 600);
        }
        
        //CONSULTA COMPROBAR ESTUDIANTE
        $codigoSQL = "SELECT * FROM estudiantes WHERE usuario = :user;";
        $consulta = $conn->prepare($codigoSQL);
        $consulta->bindParam(':user', $_SESSION['user']);
        $consulta->execute();
        $estudiante = $consulta->fetch(PDO::FETCH_ASSOC);

        //CONSULTA COMPROBAR EMPRESA
        $codigoSQL1 = "SELECT * FROM empresas WHERE usuario = :user;";
        $consulta = $conn->prepare($codigoSQL1);
        $consulta->bindParam(':user', $_SESSION['user']);
        $consulta->execute();
        $empresa = $consulta->fetch(PDO::FETCH_ASSOC);

        //CONSULTA COMPROBAR ADMIN
        $codigoSQL2 = "SELECT * FROM administradores WHERE usuario = :user;";
        $consulta = $conn->prepare($codigoSQL2);
        $consulta->bindParam(':user', $_SESSION['user']);
        $consulta->execute();
        $admin = $consulta->fetch(PDO::FETCH_ASSOC);
        
        $_SESSION['usuario'] = "";
        //HAY QUE COMPROBAR POR QUE NO SE PUEDE VERIFICA LA CONTRASEÑA
        if(!empty($estudiante) && password_verify($_SESSION['pass'], $estudiante['contrasena']) && $estudiante['confirmado'] == "s"){
            $_SESSION['usuario'] = "ESTUDIANTE";
            $_SESSION['estudiante'] = $estudiante;
            if (isset($_POST["check"])){
                setcookie ("estudiante", "ESTUDIANTE", time () + 600);
                setcookie("estudiante_nombre", $estudiante['nombre'], time () + 600);
                setcookie("estudiante_apellidos", $estudiante['apellidos'], time () + 600);
                setcookie("estudiante_contrasena", $estudiante['contrasena'], time () + 600);
                setcookie("estudiante_dni", $estudiante['dni'], time () + 600);
                setcookie("estudiante_fechaNac", $estudiante['fechaNacimiento'], time () + 600);
                setcookie("estudiante_localidad", $estudiante['localidad'], time () + 600);
                setcookie("estudiante_municipio", $estudiante['municipio'], time () + 600);
                setcookie("estudiante_codPostal", $estudiante['codPostal'], time () + 600);
                setcookie("estudiante_direccion", $estudiante['direccion'], time () + 600);
                setcookie("estudiante_telefono", $estudiante['telefono'], time () + 600);
                setcookie("estudiante_movil", $estudiante['movil'], time () + 600);
                setcookie("estudiante_mail", $estudiante['mail'], time () + 600);
                setcookie("estudiante_descripcion", $estudiante['descripcion'], time () + 600);
            }
            header("Location:../index.php");
        } elseif (!empty($empresa) && password_verify($_SESSION['pass'], $empresa['contrasena']) && $empresa['confirmado'] == "s"){
            $_SESSION['usuario'] = "EMPRESA";
            $_SESSION['empresa'] = $empresa;
            if (isset($_POST["check"])){
                setcookie ("empresa", "EMPRESA", time () + 600);
                setcookie("empresa_nombre", $empresa['nombre'], time () + 600);
                setcookie("empresa_nombreContacto", $empresa['nombreContacto'], time () + 600);
                setcookie("empresa_apellidoContacto", $empresa['apellidoContacto'], time () + 600);
                setcookie("empresa_posicionCOntacto", $empresa['posicionContacto'], time () + 600);
                setcookie("empresa_contrasena", $empresa['contrasena'], time () + 600);
                setcookie("empresa_cif", $empresa['CIF_NIF'], time () + 600);
                setcookie("empresa_tipoIndutria", $empresa['tipoIndustria'], time () + 600);
                setcookie("empresa_categoria", $empresa['categoria'], time () + 600);
                setcookie("empresa_localidad", $empresa['localidad'], time () + 600);
                setcookie("empresa_municipio", $empresa['municipio'], time () + 600);
                setcookie("empresa_codPostal", $empresa['cod_postal'], time () + 600);
                setcookie("empresa_direccion", $empresa['direccion'], time () + 600);
                setcookie("empresa_telefono", $empresa['telefono'], time () + 600);
                setcookie("empresa_movil", $empresa['movil'], time () + 600);
                setcookie("empresa_mail", $empresa['mail'], time () + 600);
                setcookie("empresa_numEmpleados", $empresa['numEmpleados'], time () + 600);
                setcookie("empresa_web", $empresa['web'], time () + 600);
                setcookie("empresa_informacion", $empresa['informacion'], time () + 600);
            }
            header("Location:../index.php");
        // } elseif (empty($admin) == 0 && $_SESSION['pass'] == $admin['contrasena']){
        } elseif (!empty($admin) && password_verify($_SESSION['pass'], $admin['contrasena'])){
        // } elseif (!empty($admin)){
            $_SESSION['usuario'] = "ADMIN";
            if (isset($_POST["check"])){
                setcookie ("admin", "ADMIN", time () + 600);
            }
            header("Location:../index.php");
        } elseif ($estudiante['confirmado'] == "n"){
            session_destroy();
            header("Location: sinValidar.php");
        } elseif ($empresa['confirmado'] == "n"){
            session_destroy();
            header("Location: sinValidar.php");
        } else {
            session_destroy();
            header("Location: fallo_login.php");

        }   
    }
?>