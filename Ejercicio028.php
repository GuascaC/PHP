<?php

$server="localhost:3307";
$user="root";
$pass="";

try{

    $con=new PDO("mysql:host=$server;dbname=album", $user,$pass );
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
    $sql="INSERT INTO `fotos` (`id`, `nam`, `ruta`) VALUES (NULL, 'Jugando con la Programacion', 'foto.jpg')";

    $con->exec($sql);
    
    echo "conexion Establecida";

}catch(PDOException $error){

    echo"Conexion erronea".$error;

}

?>