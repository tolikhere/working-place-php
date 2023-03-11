<?php

namespace App;

class Invoice
{
    private float  $amount;
    private int    $id = 1;
    private string $accountNumber = '012343252315';

    public function __debugInfo(): ?array
    {
        return [
            'id'            => $this->id,
            'accountNumber' => '****' . substr($this->accountNumber, -4),
        ];
    }
}
