<?php

session_start();
session_destroy();

if ( isset($_SESSION["usuario"])){
    echo "Usuario:".$_SESSION["user"]."<br/>"."estatus:".$_SESSION["estatus"];
}else{
    echo"No hay datos";
}

?>