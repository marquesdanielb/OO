<?php

function funcao1()
{
    echo 'Entrei na função 1' . PHP_EOL;
    try {
        $divisao = (5 / 0);
        $arr = new SplFixedArray(2);
        $arr[3] = 'Valeu';
    } catch (RuntimeException | DivisionByZeroError $e) {
        echo "Aconteceu esse problema aqui: ". $e->getMessage() . PHP_EOL;
    }
    funcao2();
    echo 'Saindo da função 1' . PHP_EOL;
}

function funcao2()
{
    echo 'Entrei na função 2' . PHP_EOL;
    for ($i=1; $i <= 5; $i++) { 
        echo $i . PHP_EOL;
    }
    echo 'Saindo da função 2' . PHP_EOL;
}

echo 'Iniciando o programa principal' . PHP_EOL;
funcao1();
echo 'Finalizando o programa principal' . PHP_EOL;
