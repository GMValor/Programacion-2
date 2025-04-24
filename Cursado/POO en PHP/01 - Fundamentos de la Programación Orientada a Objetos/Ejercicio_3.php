<?php
class Estudiante {
    public $nombre;
    public $edad;
    public $matricula;

    public function mostrarDatos() {
        echo "Nombre: $this->nombre<br>";
        echo "Edad: $this->edad<br>";
        echo "Matrícula: $this->matricula<br>";
    }
}

$estudiante = new Estudiante();
$estudiante->nombre = "Gonzalo Valor";
$estudiante->edad = 20;
$estudiante->matricula = "UNR-2023-12345";

$estudiante->mostrarDatos();
?>
