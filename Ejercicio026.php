<?php
class persona{
public $nombre;
    private $edad;
    protected $altura;

    function __construct($nuevoNombre){
        $this->nombre=$nuevoNombre;

    }

    public function asignarNombre($nuevoNombre){

        $this->nombre=$nuevoNombre;
    }
        public function imprimirNombre(){

        echo "Hola, Soy ".$this->nombre;
    }
    public function mostrarEdad(){
        $this->edad=28;
        return $this->edad;
        
    }
}

$objAlumno = new persona("Oscar Uh");
//$objAlumno->asignarNombre("Oscar");
$objAlumno->imprimirNombre();

?>