<?php

abstract class Trabajador {
    public  $nombre;

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    abstract public function calcularIngreso();
}

class Fijo extends Trabajador {
    public $salarioMensual;

    public function __construct($nombre, $salarioMensual) {
        parent::__construct($nombre);
        $this->salarioMensual = $salarioMensual;
    }

    public function calcularIngreso() {
        return $this->salarioMensual;
    }
}

class Temporal extends Trabajador {
    private $horasTrabajadas;
    private $pagoPorHora;

    public function __construct($nombre, $horasTrabajadas, $pagoPorHora) {
        parent::__construct($nombre);
        $this->horasTrabajadas = $horasTrabajadas;
        $this->pagoPorHora = $pagoPorHora;
    }

    public function calcularIngreso() {
        return $this->horasTrabajadas * $this->pagoPorHora;
    }
}

$trabajadores = [
    new Fijo("lauta", 2500),
    new Temporal("Kevin", 120, 15),
    new Fijo("Yas", 3200),
    new Temporal("Yo", 80, 20)
];

foreach ($trabajadores as $trabajador) {
    echo "Ingreso de {$trabajador->nombre}: $" . $trabajador->calcularIngreso() . "<br>";
}
?>

