<?php
declare(strict_types=1);

namespace DMB\Banco\Modelo;

class Funcionario extends Pessoa
{
    function __construct(
        private string $cargo,
        private string $nome,
        private CPF $cpf,
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
}
