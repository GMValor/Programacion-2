<?php
class Usuario {
    private $edad;

    public function __construct($edad) {
        if ($edad > 0) {
            $this->edad = $edad;
        }
    }

    public function getEdad() {
        return $this->edad;
    }

    public function setEdad($nuevaEdad) {
        if ($nuevaEdad > 0) {
            $this->edad = $nuevaEdad;
        }
    }
}

$usuario = new Usuario(25);
$usuario->setEdad(30);
echo "Edad del usuario: " . $usuario->getEdad();
?>

