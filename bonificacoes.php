<?php
declare(strict_types=1);

require 'autoload.php';

use DMB\Banco\Modelo\Funcionario\Gerente;
use DMB\Banco\Modelo\Funcionario\Diretor;
use DMB\Banco\Modelo\Funcionario\Desenvolvedor;
use DMB\Banco\Modelo\CPF;
use DMB\Banco\Service\ControladorDeBonificacoes;

$func1 = new Desenvolvedor('Desenvolvedor', 'Daniel', new CPF('123.765.345-98'), 2000);
$func2 = new Diretor('Diretor', 'Luiz Fernando', new CPF('162.225.246-38'), 5000);
$func3 = new Gerente('Gerente', 'Hugo Sanchez', new CPF('123.221.287-76'), 3000);

$func1->sobeNivel();
$func1->recebeAumento(500);

$bon = new ControladorDeBonificacoes();

$bon->adicionaBonificacaoDe($func1);
$bon->adicionaBonificacaoDe($func2);
$bon->adicionaBonificacaoDe($func3);

print_r($bon->recuperaTotalBonificacoes());