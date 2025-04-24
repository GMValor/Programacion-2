<?php
class Coche {
    public $marca;
    public $modelo;
    public $color;

    public function detalles() {
        echo "Coche: $this->marca<br>";
        echo "Modelo: $this->modelo<br>";
        echo "Color: $this->color<br>";
    }
}

$miCoche = new Coche();
$miCoche->marca = "Renault";
$miCoche->modelo = "Kwid";
$miCoche->color = "Gris";

$miCoche->detalles();
?>

