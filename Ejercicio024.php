<?php

class persona{

    public $nombre;
    private $edad;
    protected $altura;

    public function asignarNombre($nuevoNombre){

    $this->nombre = $nuevoNombre;
    }

    public function imprimirNombre(){

    echo "Hola, Soy ".$this->nombre;
}
    public function mostrarEdad(){
        $this->edad=28;
        return $this->edad;
    }
}

$objAlumno = new persona();
$objAlumno->asignarNombre("Oscar");

$objAlumno2 = new persona();
$objAlumno2->asignarNombre("Pedro");
$objAlumno2->imprimirNombre();

/*echo $objAlumno->nombre;
echo $objAlumno->mostrarEdad();


echo $objAlumno2->nombre;*/

?>