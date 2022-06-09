<?php
$servername="localhost";
$username="root";
$password="";
$bd="practifp";
$sql="";


try{
    $conn=new PDO("mysql:host=$servername; port= 3306; dbname=$bd;", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "<p style='color:gray'>Login correcto</p>";
    }
    catch(PDOException $e){
    echo "Connection failed: ".$e->getMessage();
}

?>