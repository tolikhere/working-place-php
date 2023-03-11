<?php

namespace App;

interface DebtCollector extends AnotherInterface, DifferentInterface
{
    public const MY_CONSTANT = 1;
    public function __construct();
    public function collect(float $owedAmount): float;
}
