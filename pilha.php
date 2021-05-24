<?php

function funcao1()
{
    echo 'Entrei na função 1' . PHP_EOL;

    try {
        funcao2();
    } catch (RuntimeException | DivisionByZeroError $e) {
        echo '----ERROR----' . PHP_EOL;
        echo '----f1() fix f2(): RuntimeException | DivisionByZeroError error' . PHP_EOL;
        echo '----' . $e->getMessage() . PHP_EOL;
        echo '----' . $e->getLine() . PHP_EOL;
        echo '----' . PHP_EOL . $e->getTraceAsString() . PHP_EOL;
        echo '----' . PHP_EOL;

        throw new RuntimeException('Excetion treated, but, throwing exception anyway =)', 1, $e);
    }

    echo 'Saindo da função 1' . PHP_EOL;
}

function funcao2()
{
    echo 'Entrei na função 2' . PHP_EOL;

    throw new RuntimeException();

    echo 'Saindo da função 2' . PHP_EOL;
}

echo 'Iniciando o programa principal' . PHP_EOL;
funcao1();
echo 'Finalizando o programa principal' . PHP_EOL;
