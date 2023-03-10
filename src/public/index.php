<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\PaymentGateway\Paddle\Transaction;

$transaction = new Transaction(50);

$reflectionProperty = new ReflectionProperty(Transaction::class, 'amount');

$reflectionProperty->setAccessible(true);

$reflectionProperty->setValue($transaction, 125);

var_dump($reflectionProperty->getValue($transaction));

$transaction->process();
