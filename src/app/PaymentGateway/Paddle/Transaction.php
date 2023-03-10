<?php

declare(strict_types=1);

namespace App\PaymentGateway\Paddle;

class Transaction
{
    private static int $count = 0; // With static you cannot get access through
                                   //  an arrow notation(obj->prop) to properties of classes
    public function __construct(
        public float $amount,
        public string $description
    ) {
        self::$count++;
    }

    public function process()
    {
        array_map(static function () {
            $this->amount = 35; // user static in classes for callbackfunctions to prevent
        }, [1]);                // access to properties of classes
        echo 'Processing paddle transaction...';
    }

    /**
     * Get the value of count
     */
    public static function getCount(): int
    {
        return self::$count;
    }
}
