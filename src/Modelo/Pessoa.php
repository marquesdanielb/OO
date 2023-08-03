<?php
declare(strict_types=1);

namespace DMB\Banco\Modelo;

class Pessoa
{
    function __construct(
        protected string $nome,
        private CPF $cpf
    ) {
        $this->validaNome($nome);
    }

    public function recuperaCpf(): CPF
    {
        return $this->cpf;
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    protected function validaNome(string $nome): void
    {
        if(strlen($nome) < 5){
            echo "O nome precisa ter mais de 5 caracteres";
            exit;
        }
    }
}
