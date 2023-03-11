<?php

namespace App;

class Invoice
{
    public function __invoke()
    {
        var_dump('invoked');
    }
}
