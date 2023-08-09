<?php
declare(strict_types=1);

namespace DMB\Banco\Modelo\Funcionario;

use DMB\Banco\Modelo\Autenticavel;
use DMB\Banco\Modelo\Funcionario\Funcionario;

class Gerente extends Funcionario implements Autenticavel
{
    public function calculaBonificacao(): float
    {
        return $this->recuperaSalario();
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === '4321';
    }
}