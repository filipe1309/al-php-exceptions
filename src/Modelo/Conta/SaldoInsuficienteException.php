<?php

namespace Alura\Banco\Modelo\Conta;

use DomainException;

class SaldoInsuficienteException extends DomainException
{
    public function __construct(float $value, float $balance)
    {
        $message = "Você tentou sacar $value, mas tem apenas $balance.";
        parent::__construct($message);
    }
}
