<?php
interface Calculable {
    public function calcularPerimetro();
}

class Cuadrado implements Calculable {
    public $lado;
    
    public function __construct($lado) {
        $this->lado = $lado;
    }

    public function calcularPerimetro() {
        return 4 * $this->lado;
  }
}

class Circulo implements Calculable {
    public $radio;

    public function __construct($radio) {
        $this->radio = $radio;
    }

    public function calcularPerimetro() {
        return 2 * pi() * $this->radio;
  }
}

$figuras = [ new Cuadrado(4),new Circulo(7),];

foreach ($figuras as $figura) {
    echo "Perímetro: " . $figura->calcularPerimetro() . "<br>";
}
?>

