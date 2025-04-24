<?php

interface Printable {
    public function imprimir();
}

class Documento implements Printable {
    public function imprimir() {
        echo "Imprimiendo documento.<br>";
    }
}


class Foto implements Printable {
    public function imprimir() {
        echo "Imprimiendo foto.<br>";
    }
}
$itemsParaImprimir = [new Documento(), new Foto()];

foreach ($itemsParaImprimir as $item) {
    $item->imprimir();
}
?>
