<?php
require "../php/conexion_bd.php";

//CENTROS EDUCATIVOS
$centros = "INSERT INTO `centros_educativos`(`cod_centro`, `nombre`, `localidad`, `municipio`, 
            `cod_postal`, `direccion`, `telefono`, `mail`, `fax`, `web`, `descripcion`) 
            VALUES ('28022724','IES Ciudad Escolar','Madrid','Madrid','28049',
            'Carr. Vía de Servicio Km.12,800','917341244',
            'ies.ciudadescolar.madrid@educa.madrid.org','917352541',
            'https://www.educa2.madrid.org/web/centro.ies.ciudadescolar.madrid/inicio',
            'Centro educativo de estudianza secundaria y grados medios/superiores');";

$ejecutarConsulta = $conn -> prepare($centros);
$ejecutarConsulta->execute();

//ESTUDIOS
$estudios = "INSERT INTO `estudios`(  `nombre`, `duracionPracticas`, `DuraciónTotal`, `duracionLectivas`, `anosLectivos`, `fechaIncioPracticas`) 
                VALUES ('DAW','370','900','530','2','2021/09/01');";

$ejecutarConsulta = $conn -> prepare($estudios);
$ejecutarConsulta->execute();


//EMPRESAS
$empresas = "INSERT INTO `empresas`(`CIF_NIF`, `usuario`, `contrasena`, `nombre`, `categoria`, `tipoIndustria`, `nombreContacto`, `apellidoContacto`, `posicionContacto`, `localidad`, `municipio`, `cod_postal`, `direccion`, `telefono`, `movil`, `mail`, `web`, `informacion`, `numEmpleados`, `confirmado`, `ultima_actualizacion`) 
            VALUES ('123456Y','Empresa', :pass,'Empresa Prueba','Informática','IT','Contacto','Prueba','CEO','Alcobendas','Alcobendas','28100','Camilo Jose Cela, 13','912223344','666777888','practifp@gmail.com','https://www.google.com','Empresa especializada en búsquedas online','12000','s','[value-23]');";

$ejecutarConsulta = $conn -> prepare($empresas);
$hash = password_hash("Empresa", PASSWORD_DEFAULT);
$ejecutarConsulta->bindParam(':pass', $hash);
$ejecutarConsulta->execute();

$empresas2 = "INSERT INTO `empresas`(`CIF_NIF`, `usuario`, `contrasena`, `nombre`, `categoria`, `tipoIndustria`, `nombreContacto`, `apellidoContacto`, `posicionContacto`, `localidad`, `municipio`, `cod_postal`, `direccion`, `telefono`, `movil`, `mail`, `web`, `informacion`, `numEmpleados`, `confirmado`, `ultima_actualizacion`) 
            VALUES ('123456A','Bohana', :pass,'Bohana Consulting','COnsultoria SAP','SAP','Jorge','López','CEO','Tres Cantos','Tres Cantos','28150','Calle industria, 29','912223344','666777888','practifp@gmail.com','https://www.google.com','Consultoria SAP especializada en BI','5','s','[value-23]');";

$ejecutarConsulta = $conn -> prepare($empresas2);
$hash = password_hash("Bohana", PASSWORD_DEFAULT);
$ejecutarConsulta->bindParam(':pass', $hash);
$ejecutarConsulta->execute();

//ESTUDIANTES
$estudiantes = "INSERT INTO `estudiantes`(`id_estudio`, `centro`, `usuario`, `contrasena`, `dni`, `nombre`, `apellidos`, `fechaNacimiento`, `localidad`, `municipio`, `codPostal`, `direccion`, `telefono`, `movil`, `mail`, `confirmado`, `descripcion`) 
                VALUES ('1','1','Estudiante', :pass,'12345678D','Alumno','Prueba','1990/01/01','Madrid','Madrid','28029','AVD. EL ferrol','913334455','666555444','practifp@gmail.com','s','Registro de prueba estudiante');";

$ejecutarConsulta = $conn -> prepare($estudiantes);
$hash = password_hash("Estudiante", PASSWORD_DEFAULT);
$ejecutarConsulta->bindParam(':pass', $hash);
$ejecutarConsulta->execute();

$estudiantes2 = "INSERT INTO `estudiantes`(`id_estudio`, `centro`, `usuario`, `contrasena`, `dni`, `nombre`, `apellidos`, `fechaNacimiento`, `localidad`, `municipio`, `codPostal`, `direccion`, `telefono`, `movil`, `mail`, `confirmado`, `descripcion`) 
                VALUES ('1','1','guille', :pass,'12345678A','Guillermo','Garcia Diez','1986/01/01','Alcobendas','Alcobendas','28100','Calle Palestina','913334455','666555444','guillermoasergarcia.daw@ciudadescolarfp.es','s','Consultor SAP');";

$ejecutarConsulta = $conn -> prepare($estudiantes2);
$hash = password_hash("guille", PASSWORD_DEFAULT);
$ejecutarConsulta->bindParam(':pass', $hash);
$ejecutarConsulta->execute();

//OFERTAS
$oferta1 = "INSERT INTO `ofertas`(`id_empresa`, `fecha`, `direccion`, `municipio`, `posicion`, `departamento`, `habilidad`, `descripcion`, `tipoIndustria`, `mail`) 
            VALUES ('1','2022/03/17','Calle Industria','Alcobendas','Desarrollador Front','Desarrollo','HTML, CSS y JS','Desarrollador front end','Desarrollo de paginas web','practifp@gmail.com');";

$ejecutarConsulta = $conn -> prepare($oferta1);
$ejecutarConsulta->execute();

$oferta2 = "INSERT INTO `ofertas`(`id_empresa`, `fecha`, `direccion`, `municipio`, `posicion`, `departamento`, `habilidad`, `descripcion`, `tipoIndustria`, `mail`) 
            VALUES ('1','2022/03/21','Avd. Inicio','Madrid','Programador .NET','Desarrollo Back','Programación, JAVA y C++','Programador BackEnd','Desarrollo de Software','practifp@gmail.com');";

$ejecutarConsulta = $conn -> prepare($oferta2);
$ejecutarConsulta->execute();

$oferta3 = "INSERT INTO `ofertas`(`id_empresa`, `fecha`, `direccion`, `municipio`, `posicion`, `departamento`, `habilidad`, `descripcion`, `tipoIndustria`, `mail`) 
            VALUES ('2','2022/09/13','Avd. Lopez de Hoyos','Tres Cantos','Consultor SAP','BI','Ninguna','COnsultor SAP en el modulo BW','Consultoria','practifp@gmail.com');";

$ejecutarConsulta = $conn -> prepare($oferta3);
$ejecutarConsulta->execute();

//ADMINISTRADORES
$administradores = "INSERT INTO `administradores` (`usuario`, `contrasena`, `nombre`, `cargo`) 
VALUES('Admin', :pass, 'PractiFP', 'CEO');";

$ejecutarConsulta = $conn -> prepare($administradores);
$hash = password_hash("Admin", PASSWORD_DEFAULT);
$ejecutarConsulta->bindParam(':pass', $hash);
$ejecutarConsulta->execute();



echo "Datos insertador correctamente";
echo "<br><a href='../index.php'>Ir a index.php</a>";
?>