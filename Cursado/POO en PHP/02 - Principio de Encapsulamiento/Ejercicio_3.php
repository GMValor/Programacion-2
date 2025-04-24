<<?php
class Producto {
    private $precio;

    public function __construct($precio){
        $this->precio = $precio;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function setPrecio($precio) {
        if ($precio > 0) {
            $this->precio += $precio;
        }
    }


    }
$Pancho =new Producto(1200);
echo "El precio es: ". $Pancho->getPrecio()." ";
$Pancho->setPrecio(1000);
echo "El precio es: ". $Pancho->getPrecio()." ";
$Pancho->setPrecio(0);
echo "El precio es: ". $Pancho->getPrecio()." No cambia";
?>