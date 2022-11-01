<?php
//Recibir Informacion del HTML (Post)
if ($_POST){
$txtNombre=$_POST['txtNombre'];
echo "Hola ".$txtNombre;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>PHP Ejecuta Html
<form action="Ejercicio002.php" method="post"></form>
    Nombre:
    <input type="text" name="txtNombre" id="">
    <br>
    <input type="submit" value="Enviar">
</form> 
    
</body>
</html>