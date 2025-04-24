<?php
class Libro {
    public $titulo;
    public $autor;
}

$libro = new Libro();
$libro->titulo = "El señor de los anillos";
$libro->autor = "J. R. R. Tolkien";

echo "Título: $libro->titulo<br>";
echo "Autor: $libro->autor<br>";
?>
