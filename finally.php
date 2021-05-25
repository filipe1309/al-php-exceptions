<?php

function a(): int
{
    try {
        echo 'Executing...' . PHP_EOL;
        throw new Exception('Exception here!');
        return 0;
    } catch (Throwable $e) {
        echo 'Catch...' . PHP_EOL;
        return 1;
    } finally {
        echo 'Finally...' . PHP_EOL;
    }
}

echo a();
