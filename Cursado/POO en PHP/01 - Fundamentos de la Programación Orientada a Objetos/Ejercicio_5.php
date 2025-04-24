<?php
class Persona {
    public $nombre;
    public $edad;

    public function esAdulto() {
        return $this->edad >= 18;
    }
}

$persona = new Persona();
$persona->nombre = "Oscar";
$persona->edad = 17;

echo $persona->nombre . " es adulto? " . ($persona->esAdulto() ? "True" : "False");
?>

