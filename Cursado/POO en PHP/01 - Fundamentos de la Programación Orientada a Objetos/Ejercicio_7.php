<?php
class Producto {
    public $nombre;
    public $precio;
    public $stock;

    public function valorInventario() {
        return $this->precio * $this->stock;
    }
}

$producto = new Producto();
$producto->nombre = "Laptop";
$producto->precio = 800;
$producto->stock = 5;

echo"Producto: ". $producto->nombre . " Valor de inventario: $" . $producto->valorInventario();
?>
