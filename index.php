<?php
declare(strict_types=1);

require_once 'autoload.php';

use DMB\Banco\Modelo\Conta\Conta;
use DMB\Banco\Modelo\Conta\Titular;
use DMB\Banco\Modelo\CPF;
use DMB\Banco\Modelo\Endereco;

$endereco = new Endereco('Rio de Janeiro', 'Irajá', 'Alucard', '72D');
$cpf1 = new CPF('123.456.789-01');
$cpf2 = new CPF('123.456.789-02');

$titular1 = new Titular($endereco, 'Daniel Marques Barbosa', $cpf1);
$titular2 = new Titular($endereco, 'Edson Arantes do Nascimento', $cpf1);

$conta1 = new Conta($titular1, 2000);
$conta2 = new Conta($titular2, 1500);

$conta1->transferir($conta2, 250);
$conta2->sacar(500);


echo Conta::recuperaNumeroDeContas() . PHP_EOL;
var_dump($conta1);
var_dump($conta2);