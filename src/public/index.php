<?php

require_once __DIR__ . '/../vendor/autoload.php';

$invoice = new App\Invoice();

$invoice->process(35, 3);

//App\Invoice::process(1, 2, 3);
