<?php

namespace App;

class Invoice
{
    private float $amount;

    public function __construct(float $amount)
    {
        $this->amount = $amount;
    }
    public function __get(string $name)
    {
        if (property_exists($this, $name)) {
            return $this->$name;
        }

        return null;
    }

    public function __set(string $name, $value): void
    {
        if (property_exists($this, $name)) {
            $this->$name = $value;
        }
    }
}
