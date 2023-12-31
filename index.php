<?php
declare(strict_types=1);

require_once 'autoload.php';

use DMB\Banco\Modelo\Conta\{ContaCorrente, ContaPoupanca, SaldoInsuficienteException, Titular};
use DMB\Banco\Modelo\{CPF, Endereco};

$endereco = new Endereco('Rio de Janeiro', 'Irajá', 'Alucard', '72D');
$cpf1 = new CPF('123456789-01');
$cpf2 = new CPF('123.456.789-02');

$titular1 = new Titular($endereco, 'Daniel Marques Barbosa', $cpf1);
$titular2 = new Titular($endereco, 'Edson Arantes do Nascimento', $cpf1);

$conta1 = new ContaCorrente($titular1, 2000);
$conta2 = new ContaPoupanca($titular2, 1500);

try {
    $conta1->depositar(-10);
} catch (InvalidArgumentException $e) {
    echo $e->getMessage();
}



//echo ContaCorrente::recuperaNumeroDeContas() . PHP_EOL;

//print_r($conta1) . PHP_EOL;
//print_r($conta2) . PHP_EOL;
