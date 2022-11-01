<?php
if($_POST){
    $valorA=$_POST['valorA'];
    $valorB=$_POST['valorB'];

    if($valorA != $valorB){
        echo "Valor A es Diferente a Valor B";
    }else{
        echo "El Valor A es Igual al Valor B";
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Artimetricos</title>
</head>
<body>
    <form action="Ejercicio011.php" method="post">
    Valor A:
    <input type="text" name="ValorA">
    <br>
    Valor B:
    <input type="text" name="ValorB">
    <br>
    <input type="submit" value="Calcular">
    </form>
    
</body>
</html>