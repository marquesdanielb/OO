<?php
declare(strict_types=1);

namespace DMB\Banco\Modelo\Funcionario;

use DMB\Banco\Modelo\Funcionario\Funcionario;

class Diretor extends Funcionario
{
    public function calculaBonificacao(): float
    {
        return $this->recuperaSalario() * 2;
    }

    public function podeAutenticar(string $senha): bool
    {
        if ($senha !== '1234') {
            echo 'Sua senha é inválida';
            return false;
        }
    }
}