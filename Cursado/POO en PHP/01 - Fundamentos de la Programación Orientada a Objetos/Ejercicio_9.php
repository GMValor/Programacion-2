<?php
class Trabajador {
    public $nombre;
    public $cargo;
    public $salario;

    public function informacion() {
        echo "Nombre: $this->nombre<br>";
        echo "Cargo: $this->cargo<br>";
        echo "Salario: $$this->salario<br>";
    }
}

$trabajador = new Trabajador();
$trabajador->nombre = "Gonzalo Valor";
$trabajador->cargo = "Ingeniero en sistemas";
$trabajador->salario = 3500;

$trabajador->informacion();
?>

