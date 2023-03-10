<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\PaymentGateway\Paddle\Transaction;

$transaction = new Transaction(50);

$transaction->copyFrom(new Transaction(100));
//$transaction->process();
