<?php
declare(strict_types=1);

namespace DMB\Banco\Modelo\Funcionario;

use DMB\Banco\Modelo\Funcionario\Funcionario;

class Gerente extends Funcionario
{
    public function calculaBonificacao(): float
    {
        return $this->recuperaSalario();
    }
}