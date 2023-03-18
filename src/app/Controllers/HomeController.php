<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Models\Invoice;
use App\Models\SignUp;
use App\Models\User;
use App\View;
use App\App;
use PDO;

/**
 * @mixin PDO
 */

class HomeController
{
    public function index(): View
    {
        $email = 'goon@doe.com';
        $name = 'Goon Doe';
        $createdAt = date('Y-m-d H:m:i');
        $amount = 235.34;

        $userModel    = new User();
        $invoiceModel = new Invoice();

        $invoiceId = (new SignUp($userModel, $invoiceModel))->register(
            [
                'email' => $email,
                'name'  => $name,
                'date'  => $createdAt,
            ],
            [
                'amount' => $amount,
            ]
        );

        return View::make('index', ['invoice' => $invoiceModel->find($invoiceId)]);
    }
}
