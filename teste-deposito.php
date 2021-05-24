<?php

use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$conta = new ContaCorrente(
    new Titular(
        new CPF('123.456.789-10'),
        'Bob Dylan',
        new Endereco('Cidade Teste', 'bairro Teste', 'Rua lá', '37')
    )
);

try {
    $conta->deposita(-500);
} catch (InvalidArgumentException $e) {
    echo 'InvalidArgumentException: ' . PHP_EOL;
    echo 'Valor precisa ser positivo!!' . PHP_EOL;
}

// echo $conta->recuperaSaldo();
