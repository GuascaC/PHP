<?php

session_start();

$_SESSION["user"]="develoteca";
$_SESSION["estatus"]="logueado";

echo "Sesion iniciada".":<br/>";

echo "Usuario:".$_SESSION["user"]."<br/>"."estatus:".$_SESSION["estatus"];

?>