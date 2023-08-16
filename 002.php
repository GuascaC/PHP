<?php

$students = array ("Carlos", "Mariana", "Miranda", "Jose", "Victor", "Santiago", "Damian", "Cristian", "Daniela", "Laura");
$datesD = array (20, 17, 15, 9, 30, 11, 9, 26, 5, 6);
$datesM = array (8, 8, 9, 10, 1, 11, 11, 11, 5, 6);
$datesY = array (2022, 2020, 2021, 2019, 2000, 2001, 2001, 2004, 2005, 2006);
$todayD = 16;
$todayM = 8;
$todayY = 2023;
$c;

for ($c=0; $c<10;$c++){
    echo $students[$c]." tiene ";

    if ($todayM-$datesM[$c] == 11){}else{}
    if( $todayY-$datesY[$c] <= 0){
    }else{
    if( $datesY[$c]-$todayY == 1){
    echo $todayY-$datesY[$c]." año, ";
    }else{
        echo $todayY-$datesY[$c]." años, ";
    }}

    if( $datesY[$c]-$todayY <= 0){
        $todayM = 19;
        if( $todayM-$datesM[$c] <= 0){
        }else{
            echo $todayM-$datesM[$c];
            echo " Meses, ";
        }
    }else{
    if( $todayM-$datesM[$c] <= 0){
    }else{
        echo $todayM-$datesM[$c];
        echo " Meses, ";
    }}


    if( $datesM[$c]-$todayM <= 0){
        $todayD = 40;
        if( $datesD[$c]-$todayD >= 0){
            echo "<br>";
        }else{
            echo $todayD-$datesD[$c];
            echo " Días <br>";
        }
    }else{
        echo $todayD-$todayD;
        echo " Días <br>";
    }    

    if($todayY-$datesY[$c] >=18){
        echo "Y es mayor de edad <br>";
    }

}

?>