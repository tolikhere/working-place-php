<?php

namespace App;

class CollectionAgency implements DebtCollector
{
    public function __construct()
    {
    }

    /**
     * @param float $owedAmount
     * @return float
     */
    public function collect(float $owedAmount): float {
    }
}
