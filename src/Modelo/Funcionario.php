<?php
declare(strict_types=1);

namespace DMB\Banco\Modelo;

class Funcionario extends Pessoa
{
    function __construct(
        private string $cargo,
        protected string $nome,
        private CPF $cpf,
        private float $salario
    ) {
        parent::__construct($nome, $cpf);
    }

    public function recuperaCargo(): string
    {
        return $this->cargo;
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
}
