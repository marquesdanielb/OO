<?php
declare(strict_types=1);

namespace DMB\Banco\Service;

use DMB\Banco\Modelo\Funcionario\Funcionario;

class ControladorDeBonificacoes
{
    private $totalBonificacoes = 0;

    public function adicionaBonificacaoDe(Funcionario $funcionario)
    {
        $this->totalBonificacoes += $funcionario->calculaBonificacao();
    }

    public function recuperaTotalBonificacoes(): float
    {
        return $this->totalBonificacoes;
    }
}