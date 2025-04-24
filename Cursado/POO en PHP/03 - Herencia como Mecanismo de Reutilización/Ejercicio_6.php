<?php
class Cuenta {
    public $saldo;

    public function __construct($saldoinicial){
        $this->saldo = $saldoinicial;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function depositar($monto) {
        if ($monto > 0) {
            $this->saldo += $monto;
        }
    }

    public function retirar($monto) {
        if ($monto > 0) {
            $this->saldo -= $monto; // 
        }
    }
}

class CuentaPremium extends Cuenta {
    public $bonificacion;

    public function __construct($saldo, $bonificacion){
        parent::__construct($saldo);
        $this->bonificacion = $bonificacion;
    }

    public function aplicarBonificacion(){
        if ($this->bonificacion > 0){
            $this->saldo += $this->saldo * ($this->bonificacion / 100);
        }
    }
}

$Roberto = new CuentaPremium(1200, 30);
$Roberto->aplicarBonificacion();
echo "Saldo final: " . $Roberto->getSaldo(); 
?>


