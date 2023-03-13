<?php

use App\Classes\Invoice;

require_once __DIR__ . '/../vendor/autoload.php';

// echo '<pre>';
// print_r($_SERVER);
// echo '</pre>';

$router = new App\Router();

$router
    ->get('/', [App\Classes\Home::class, 'index'])
    ->get('/invoices', [App\Classes\Invoice::class, 'index'])
    ->get('/invoices/create', [App\Classes\Invoice::class, 'create'])
    ->post('/invoices/create', [App\Classes\Invoice::class, 'store']);

echo $router->resolve($_SERVER['REQUEST_URI'], strtolower($_SERVER['REQUEST_METHOD']));
