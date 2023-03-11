<?php

namespace App;

abstract class Field
{
    public function __construct(protected string $name)
    {
        # code...
    }

    abstract public function render(): string;
}
