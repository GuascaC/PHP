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

class trabajador extends persona{
    public $puesto;
    public function Presentar(){
        echo "Hola soy ".$this->nombre." y soy un ".$this->puesto;

}
}

$objTrabajador = new trabajador();
$objTrabajador->asignarNombre("Oscar Uh");
$objTrabajador->puesto = "Profesor";

$objTrabajador->Presentar();

?>