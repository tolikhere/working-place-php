<?php

declare(strict_types=1);

namespace App\PaymentGateway\Paddle;

use App\Enums\Status;

class Transaction
{
    private string $status;
    public function __construct()
    {
        $this->setStatus(Status::PENDING);
    }

    /**
     * Set the value of status
     *
     * @return  self
     */
    public function setStatus(Status $status): self
    {
        $this->status = $status->toString();

        return $this;
    }
}
