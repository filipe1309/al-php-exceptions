<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', '/var/log/myapp');

// PROD
// error_reporting(E_ALL);
// ini_set('display_errors', 0);
// ini_set('log_errors', 1);
// ini_set('error_log', '/var/log/myapp');

echo $var; // Warning

echo $arr[12]; // Warning

echo CONSTANT; // Fatal Error
