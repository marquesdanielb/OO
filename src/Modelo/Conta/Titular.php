<?php
declare(strict_types=1);

namespace DMB\Banco\Modelo\Conta;

use DMB\Banco\Modelo\Autenticavel;
use DMB\Banco\Modelo\Pessoa;
use DMB\Banco\Modelo\Endereco;
use DMB\Banco\Modelo\CPF;

class Titular extends Pessoa implements Autenticavel
{
    public function __construct(
        private Endereco $endereco,
        string $nome,
        CPF $cpf
    ) {
        parent::__construct($nome, $cpf);
    }

    public function recuperaEndereco(): Endereco
    {
        return $this->endereco;
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === 'qwerty';
    }
}
