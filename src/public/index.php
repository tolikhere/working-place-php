<?php

require_once '../PaymentProfile.php';
require_once '../Customer.php';
require_once '../Transaction.php';

$transaction = new Transaction(70, 'Transaction 1');

echo $transaction->getCustomer()?->getPaymentProfile()?->id ?? 'foo';
