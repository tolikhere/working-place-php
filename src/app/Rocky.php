<?php

namespace App;

class Rocky implements DebtCollector
{
    /**
     * @param float $owedAmount
     * @return float
     */
    public function collect(float $owedAmount): float
    {
        return $owedAmount * 0.65;
    }
}
