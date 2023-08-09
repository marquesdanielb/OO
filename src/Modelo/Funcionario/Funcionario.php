<?php
declare(strict_types=1);

namespace DMB\Banco\Modelo\Funcionario;

use DMB\Banco\Modelo\{Pessoa, CPF};

abstract class Funcionario extends Pessoa
{
    function __construct(
        protected string $nome,
        private CPF $cpf,
        private float $salario
    ) {
        parent::__construct($nome, $cpf);
    }

    public function alteraNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function recuperaSalario(): float
    {
        return $this->salario;
    }

    public function calculaBonificacao(): float
    {
        return $this->salario * 0.1;
    }

    public function recebeAumento(float $valor): void
    {
        if ($valor < 0) {
            echo 'O valor deverá ser maior que zero';
            return;
        }

        $this->salario += $valor;
    }
}
