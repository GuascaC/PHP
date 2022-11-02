<?php
if($_POST){
    $valorA=$_POST['ValorA'];
    $valorB=$_POST['ValorB'];

    $Suma=$valorA+$valorB;
    $Rest=$valorA-$valorB;
    $Mult=$valorA*$valorB;
    $Div=$valorA/$valorB;
    echo "Suma:".$Suma."<br>";
    echo "Resta:".$Rest."<br>";
    echo "Multiplicacion:".$Mult."<br>";
    echo "Division:".$Div."<br>";

    if($valorA==$valorB){

    echo "El Valor a es igual que B <br>";

    if($valorA==4){
        echo"Los Valores son 4";      
    }

    if($valorA==5){
        echo"Los Valores son 5";      
    }    }
    if(($valorA==$valorB) && ($valorA==4)){
        echo"Los Valores A y B son iguales y son 4";
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
    <form action="Ejercicio010.php" method="post">
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