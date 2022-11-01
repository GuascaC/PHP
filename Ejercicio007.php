<?php
if($_POST){
    $valorA=$_POST['valorA'];
    $valorB=$_POST['valorB'];

    $Suma=$valorA+$valorB;
    $Rest=$valorA-$valorB;
    $Mult=$valorA*$valorB;
    $Div=$valorA/$valorB;
    echo "Suma:"."<br>".$Suma;
    echo "Resta:"."<br>".$Rest;
    echo "Multiplicacion:"."<br>".$Mult;
    echo "Division:"."<br>".$Div;
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
    <form action="Ejercicio007.php" method="post">
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