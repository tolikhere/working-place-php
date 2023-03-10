<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\PaymentGateway\Paddle\Transaction;
use App\DB;


$transaction = new Transaction(50, 'Transaction 1');

$db = DB::getInstance([]);
$db = DB::getInstance([]);
$db = DB::getInstance([]);
$db = DB::getInstance([]);

var_dump($transaction::getCount());
var_dump($transaction->getCount());

var_dump(Transaction::getCount());
