<?php
declare(strict_types=1);

namespace DMB\Banco\Service;

use DMB\Banco\Modelo\Autenticavel;

class Autenticador
{
    public function tentaLogin(Autenticavel $autenticavel, string $senha): void
    {
        if ($autenticavel->podeAutenticar($senha)) {
            echo 'Ok. Usuário logado no sistema';
        } else {
            echo 'Ops. Senha incorreta.';
        }
    }
}