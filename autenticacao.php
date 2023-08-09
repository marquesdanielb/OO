<?php

require 'autoload.php';

use DMB\Banco\Modelo\Funcionario\{Diretor, Gerente};
use DMB\Banco\Modelo\Conta\Titular;
use DMB\Banco\Modelo\{CPF, Endereco};
use DMB\Banco\Service\Autenticador;

$diretor = new Diretor('Roberval Duarte', new CPF('123.654.987-91'), 10000);

$titular = new Titular(new Endereco('', '', '', ''), 
                                    'Eduardo Dos Santos', 
                                    new CPF('123.654.126-98'));

$autenticador = new Autenticador();
$autenticador->tentaLogin($titular, 'qwerty');