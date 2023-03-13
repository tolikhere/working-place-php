<?php

declare(strict_types=1);

namespace App\Classes;

class Home
{
    public function index(): string
    {
        setcookie(
            'userName',
            'Tolik',
            time() + (24 * 60 * 60)
        );
        return 'Home';
    }
}
