<?php
declare(strict_types=1);

require 'autoload.php';

use DMB\Banco\Modelo\{Funcionario, CPF};
use DMB\Banco\Service\ControladorDeBonificacoes;

$func1 = new Funcionario('Dev', 'Daniel', new CPF('123.654.987-07'), 1000);
$func2 = new Funcionario('Arq', 'Suelen', new CPF('122.632.187-77'), 1000);

$bon = new ControladorDeBonificacoes();

$bon->adicionaBonificacaoDe($func1);
$bon->adicionaBonificacaoDe($func2);

print_r($func1);