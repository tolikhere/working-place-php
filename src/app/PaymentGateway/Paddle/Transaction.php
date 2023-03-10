<?php

declare(strict_types=1);

namespace App\PaymentGateway\Paddle;

class Transaction
{
    private float $amount;

    public function __construct(float $amount)
    {
        $this->amount = $amount;
    }

    public function process()
    {
        echo  'Processing $' . $this->getAmount() . ' transaction';
    }

    /**
     * Get the value of amount
     *
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * Set the value of amount
     *
     * @return  void
     */
    public function setAmount($amount): void
    {
            $this->amount = $amount;
    }
}
