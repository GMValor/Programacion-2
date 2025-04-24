<?php
class CuentaBancaria {
    private $saldo;

    public function __construct($saldoInicial) {
        $this->saldo = $saldoInicial;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function depositar($monto) {
        if ($monto > 0) {
            $this->saldo += $monto;
        }
    }
}

$cuenta = new CuentaBancaria(100);
$cuenta->depositar(500);
echo "Saldo actual: " . $cuenta->getSaldo() . "<br>";
$cuenta->depositar(100);
echo "Saldo actual: " . $cuenta->getSaldo();
?>

