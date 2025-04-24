<?php

class Empleado {
    public $nombre;
    public $salario;

    public function __construct($nombre, $salario) {
        $this->nombre = $nombre;
        $this->salario = $salario;
    }

    public function calcularPago() {
        return $this->salario;
    }
}

class Freelancer extends Empleado {
    public $horas;

    public function __construct($nombre, $salarioPorHora, $horas) {
        parent::__construct($nombre, $salarioPorHora);
        $this->horas = $horas;
    }

    public function calcularPago() {
        return $this->salario * $this->horas;
    }
}


$freelancer = new Freelancer("Lauta", 25000, 4); 
echo "A cobrar: " . $freelancer->calcularPago() . " $"; 
?>

