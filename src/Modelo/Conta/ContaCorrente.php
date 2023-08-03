<?php
declare(strict_types=1);

namespace DMB\Banco\Modelo\Conta;

use DMB\Banco\Modelo\Conta\Conta;

class ContaCorrente extends Conta
{
    protected function percentualTarifa(): float
    {
        return 0.05;
    }
}
