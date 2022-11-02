<?php

$frutas=array("F"=>"Fresa","M"=>"Manzana","P"=>"Pera");

print_r($frutas);

echo$frutas["M"]."<br>";

foreach($frutas as $i => $valor){

    echo "El Valor es:".$valor. ",Indice: ".$i."<br>";

}

?>