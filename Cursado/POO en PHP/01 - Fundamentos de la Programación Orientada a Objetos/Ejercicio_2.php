<?php
class Rectangulo {
    public $largo;
    public $ancho;

    public function calcularArea() {
        return $this->largo * $this->ancho;
    }
}

$rect = new Rectangulo();
$rect->largo = 5;
$rect->ancho = 3;

echo "Área del rectángulo: " . $rect->calcularArea();
?>
