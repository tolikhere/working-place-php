<?php

namespace App\Enums;

enum Status
{
    case PAID;
    case PENDING;
    case DECLINED;

    public function toString(): string
    {
        return match ($this) {
            Status::PAID => 'Paid',
            Status::PENDING => 'Pending',
            Status::DECLINED => 'Declined'
        };
    }
}
