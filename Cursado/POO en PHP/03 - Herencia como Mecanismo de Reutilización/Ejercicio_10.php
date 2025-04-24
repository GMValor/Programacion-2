<?php

class Animal {
    public $nombre;

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    public function moverse() {
        echo "El {$this->nombre} se mueve <br>";
    }
}


class Pez extends Animal {
    public $tipoAgua;

    public function __construct($nombre, $tipoAgua) {
        parent::__construct($nombre);
        $this->tipoAgua = $tipoAgua;
    }

    public function moverse() {
        echo "El {$this->nombre} nada en agua {$this->tipoAgua}. <br>";
    }
}


$pez = new Pez("dorado", "dulce");
$pez->moverse();
?>


