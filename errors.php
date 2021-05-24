<?php

// DEV
error_reporting(E_ALL);
ini_set('display_errors', 1);
// ini_set('log_errors', 1);
// ini_set('error_log', '/var/log/myapp');

// PROD
// error_reporting(E_ALL);
// ini_set('display_errors', 0);
// ini_set('log_errors', 1);
// ini_set('error_log', '/var/log/myapp');


set_error_handler(function (int $errno, string $errstr, string $errfile, int $errline) {
    // var_dump($errno, $errstr, $errfile, $errline);
    // echo '----' . PHP_EOL;

    switch ($errno) {
        case E_WARNING:
            echo 'Warnning!!!!' . PHP_EOL;
            break;
        case E_NOTICE:
            echo 'Notice!!!!' . PHP_EOL;
            break;
    }

    return true;
});

echo $var; // Warning

echo $arr[12]; // Warning

echo CONSTANT; // Fatal Error
