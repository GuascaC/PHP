<?php

if($_POST){
    $boton = $_POST['btn'];

    switch($boton){
        case 1:
            echo "Presionaste el Boton 1.";
        break;
        case 2:
            echo "Presionaste el Boton 2.";
        break;
        case 3:
            echo "Presionaste el Boton 3.";
        break;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>switch</title>
</head>
<body>
    <form action="Ejercicio012.php" method="post">
        <input type="submit" value="1" name="btn" ><br>
        <input type="submit" value="2" name="btn"><br>
        <input type="submit" value="3" name="btn"><br>
    </form>
</body>
</html>