<form action="" method="post">
    <label for="">usuario</label>
    <input type="text" name="usuario" id="">
    <label for="">Contraseña</label>
    <input type="password" name="pass" id="">
    <label for="">Nombre</label>
    <input type="text" name="nombre" id="">
    <label for="">Cargo</label>
    <input type="text" name="cargo" id="">
    <input type="submit" value="Registrar" name="insertar" >
</form>
<?php
require "../conexion_bd.php";
session_start();

if(!isset($_SESSION['user']) || $_SESSION['usuario'] != "ADMIN"){
    header("Location:../cerrar_sesion.php");
}
 

if(isset($_POST['insertar'])){
    $sql="INSERT INTO administradores (usuario, contrasena, nombre, cargo) 
        VALUES(:user, :pass, :nom, :car);";
   $stmt = $conn -> prepare($sql);
   $stmt->bindParam(':user', $_REQUEST['usuario']);
   $hash = password_hash($_REQUEST['pass'], PASSWORD_DEFAULT);
   $stmt->bindParam(':pass', $hash);
   $stmt->bindParam(':nom', $_REQUEST['nombre']);
   $stmt->bindParam(':car', $_REQUEST['cargo']);
   $stmt->execute();
}
?>