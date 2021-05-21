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
