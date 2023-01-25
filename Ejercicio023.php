<?php

class persona{

    public $nombre;

    public function asignarNombre($nuevoNombre){

    $this->nombre = $nuevoNombre;
    }

    public function imprimirNombre(){

    echo "Hola, Soy ".$this->nombre;
}
}

$objAlumno = new persona();
$objAlumno->asignarNombre("Oscar");

$objAlumno2 = new persona();
$objAlumno2->asignarNombre("Pedro");
$objAlumno2->imprimirNombre();

echo $objAlumno->nombre;

echo $objAlumno2->nombre;

?>