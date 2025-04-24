<?php
abstract class Animal {
  abstract public function alimentarse();
}
class Leon extends Animal {
    public function alimentarse() {
        echo "El león come carne.<br>";
 }
}

class Pajaro extends Animal {
    public function alimentarse() {
        echo "El pájaro come semillas.<br>";
 }
}

$animales = [ new Leon(),new Pajaro()];
foreach ($animales as $animal) {
  $animal->alimentarse();
}
?>



