<?php

class MyException extends DomainException
{
    public function hello()
    {
        echo "Hello";
    }
}

try {
    throw new MyException();
} catch (MyException $e) {
    $e->hello();
}
