<?php

require_once '../PaymentGateway/Stripe/Transaction.php';
require_once '../PaymentGateway/Paddle/CustomerProfile.php';
require_once '../PaymentGateway/Paddle/Transaction.php';

//use PaymentGateway\Paddle as PD;
use PaymentGateway\Paddle\{Transaction, CustomerProfile};
use PaymentGateway\Stripe\Transaction as StripeTransaction;

$paddleTransaction = new Transaction();
$stripeTransaction = new StripeTransaction();
$paddleCustomerProfile = new CustomerProfile();

var_dump($paddleTransaction, $stripeTransaction, $paddleCustomerProfile);
