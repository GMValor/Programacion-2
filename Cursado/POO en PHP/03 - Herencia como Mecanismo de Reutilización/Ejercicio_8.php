<?php
// Clase base Vehiculo
class Vehiculo {
    protected $velocidad;

    public function __construct() {
        $this->velocidad = 0;
    }

    public function acelerar() {
        $this->velocidad += 5;
    }

    public function getVelocidad() {
        return $this->velocidad;
    }
}

// Subclase Camion
class Camion extends Vehiculo {
    public function acelerar() {
        $this->velocidad += 10;
    }
}

// Prueba
$miCamion = new Camion();
$miCamion->acelerar();
echo "Velocidad actual del camión: " . $miCamion->getVelocidad() . "<br>";
$miCamion->acelerar();
echo "Velocidad actual del camión: " . $miCamion->getVelocidad() . "<br>";
?>

