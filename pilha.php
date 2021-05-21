<?php

function funcao1()
{
    echo 'Entrei na função 1' . PHP_EOL;

    // $fixedArray = new SplFixedArray(2);
    // $fixedArray[3] = 'value'; // RuntimeException

    $divByZero = intdiv(5, 0); // DivisionByZeroError

    funcao2();
    echo 'Saindo da função 1' . PHP_EOL;
}

function funcao2()
{
    echo 'Entrei na função 2' . PHP_EOL;
    for ($i = 1; $i <= 5; $i++) {
        echo $i . PHP_EOL;
    }
    //var_dump(debug_backtrace());
    echo 'Saindo da função 2' . PHP_EOL;
}

echo 'Iniciando o programa principal' . PHP_EOL;
funcao1();
echo 'Finalizando o programa principal' . PHP_EOL;
