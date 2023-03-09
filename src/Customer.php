<?php

class Customer
{
    private ?PaymentProfile $paymentProfile = null;

    /**
     * Get the value of paymentProfile
     */
    public function getPaymentProfile(): ?PaymentProfile
    {
        return $this->paymentProfile;
    }
}
