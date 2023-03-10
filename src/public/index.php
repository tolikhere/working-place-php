<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\PaymentGateway\Paddle\Transaction;

$transaction = new Transaction();

$transaction->setStatus(Transaction::STATUS_PAID);

var_dump($transaction);
