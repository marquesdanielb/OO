<?php
declare(strict_types=1);

namespace DMB\Banco\Modelo\Funcionario;

use DMB\Banco\Modelo\Funcionario\Funcionario;

class Desenvolvedor extends Funcionario
{
    public function calculaBonificacao(): float
    {
        return $this->recuperaSalario() * 0.05;
    }

    public function sobeNivel()
    {
        $this->recebeAumento($this->recuperaSalario() *0.75);
    }
}