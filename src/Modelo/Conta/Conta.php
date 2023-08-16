<?php
declare(strict_types=1);

namespace DMB\Banco\Modelo\Conta;

use DMB\Banco\Modelo\Conta\SaldoInsuficienteException;
use DMB\Banco\Modelo\CPF;
use InvalidArgumentException;

abstract class Conta
{
    private static $numeroDeContas = 0;

    public function __construct(
        private Titular $titular,
        private float $saldo = 0
    ) {
        self::$numeroDeContas++;
    }

    public function sacar(float $valorASacar) : void 
    {
        $valorTaxado = $valorASacar * $this->percentualTarifa();
        $valorSaque = $valorASacar + $valorTaxado;

        if ($this->saldo < $valorSaque) {
            throw new SaldoInsuficienteException($valorSaque, $this->saldo);
            
        }

        $this->saldo -= $valorSaque;
    }

    public function depositar(float $depositar) : void 
    {
        if ($depositar < 0) {
            throw new InvalidArgumentException('O valor de depósito deverá ser maior que zero.');
        }
        
        $this->saldo += $depositar;
    }

    public function transferir(Conta $contaTransfer, float $valorTransfer): void
    {
        if ($this->saldo < $valorTransfer) {
            echo "Você não tem fundos para transferir";
            return;
        }
        
        $this->sacar($valorTransfer);
        $contaTransfer->depositar($valorTransfer);
    }

    public function recuperaSaldo(): int
    {
        return $this->saldo;
    }

    public static function recuperaNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }

    public function recuperaTitularNome(): string
    {
        return $this->titular->recuperaNome();
    }
    
    public function recuperaTitularCpf(): CPF
    {
        return $this->titular->recuperaCpf();
    }

    abstract protected function percentualTarifa();
}
