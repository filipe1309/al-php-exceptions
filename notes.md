# DevOnTheRun Notes

> notes taken during the course

<!-- https://gitignore.io -->

## Class 1

https://cursos.alura.com.br/course/php-xdebug-profiling

```php
var_dump(debug_backtrace());

try {
    funcao2();
} catch (RuntimeException $e) {
    echo 'f1() fix f2(): RuntimeException error' . PHP_EOL;
} catch (DivisionByZeroError $e) {
    echo 'f1() fix f2(): DivisionByZeroError error' . PHP_EOL;
}
```

## Class 3

If no one get the exception, it will be a fatal error

```php
function funcao2()
{
    echo 'Entrei na função 2' . PHP_EOL;

    $divByZero = intdiv(5, 0); // DivisionByZeroError

    $fixedArray = new SplFixedArray(2);
    $fixedArray[3] = 'value'; // RuntimeException

    for ($i = 1; $i <= 5; $i++) {
        echo $i . PHP_EOL;
    }
    echo 'Saindo da função 2' . PHP_EOL;
}

```

```php

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

```
