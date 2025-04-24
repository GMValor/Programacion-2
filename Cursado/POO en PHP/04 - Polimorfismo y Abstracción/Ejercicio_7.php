<?php

interface Comunicable {
    public function enviarMensaje($mensaje);
}

class Correo implements Comunicable {
    public function enviarMensaje($mensaje) {
        echo "Enviando correo: $mensaje<br>";
    }
}

class Texto implements Comunicable {
    public function enviarMensaje($mensaje) {
        echo "Enviando mensaje de texto: $mensaje<br>";
    }
}

$comunicaciones = [new Correo(),new Texto()];

foreach ($comunicaciones as $comunicacion) {
$comunicacion->enviarMensaje("Hola Mundo");
}
?>
