<?php

namespace DMB\Banco\Modelo\Conta;

use DomainException;

class SaldoInsuficienteException extends \DomainException
{
    public function __construct(float $valorSaque, float $saldoAtual)
    {
        $mensagem = "Você tentou sacar $valorSaque, mas não tem saldo para essa operação.\n 
        Salto atual: $saldoAtual";
        parent::__construct($mensagem);
    }
}