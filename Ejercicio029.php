<?php

$server="localhost:3307";
$user="root";
$pass="";

try{

    $con=new PDO("mysql:host=$server;dbname=album", $user,$pass );
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql="SELECT * FROM `fotos`";

    $sentencia=$con->prepare($sql);
    $sentencia->execute();

    $resultado=$sentencia->fetchAll();

    //print_r($resultado);

    foreach ($resultado as $foto){
    echo($foto['nam']."<br/>");
    }
    
    //echo "conexion Establecida";
    
}catch(PDOException $error){

    echo"Conexion erronea".$error;

}

?>