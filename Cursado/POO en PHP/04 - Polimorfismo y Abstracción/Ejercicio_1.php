<?php
// Interfaz Nadador
interface Nadador {
    public function nadar();
}


class Pez implements Nadador {
    public function nadar() {
        echo "El pez nada rápido. <br>";
    }
}


class Persona implements Nadador {
    public function nadar() {
        echo "La persona nada lento. <br>";
    }
}


$nadadores = [new Pez(), new Persona()];


foreach ($nadadores as $nadador) {
    $nadador->nadar();
}
?>
