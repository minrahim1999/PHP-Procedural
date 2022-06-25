<?php

// echo "Server running" 
declare(strict_types = 1)
;

$root = dirname(__DIR__) . DIRECTORY_SEPARATOR;

define('APP_PATH', $root . 'app' . DIRECTORY_SEPARATOR);
define('FILES_PATH', $root . 'transaction_files' . DIRECTORY_SEPARATOR);
define('VIEWS_PATH', $root . 'views' . DIRECTORY_SEPARATOR);
define('HELPERS_PATH', $root . 'helpers' . DIRECTORY_SEPARATOR);

/* YOUR CODE (Instructions in README.md) */
require APP_PATH . 'App.php';
require HELPERS_PATH . 'Helper.php';


$files = getTransactionFiles(FILES_PATH);

// prettyPrint($files);

$transactions = [];
foreach ($files as $file)
{
    $transactions = array_merge($transactions, getTransactions($file, 'extractTransaction'));
}

$totals = calculateTotals($transactions);

// prettyPrint($transactions);

require VIEWS_PATH . 'transaction.php';

?>