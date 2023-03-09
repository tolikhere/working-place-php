<?php

spl_autoload_register(function ($class) {
    $path = __DIR__ . '/../' . lcfirst(str_replace('\\', '/', $class)) . '.php';

    if (file_exists($path)) {
        require $path;
    }
});

use App\PaymentGateway\Paddle\{Transaction, CustomerProfile};
use App\PaymentGateway\Stripe\Transaction as StripeTransaction;

$paddleTransaction = new Transaction();
$stripeTransaction = new StripeTransaction();
$paddleCustomerProfile = new CustomerProfile();

var_dump($paddleTransaction, $stripeTransaction, $paddleCustomerProfile);
