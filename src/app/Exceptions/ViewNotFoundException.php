<?php

namespace App\Exceptions;

class ViewNotFoundException extends \Exception
{
    protected string $message = 'View not found';
}
