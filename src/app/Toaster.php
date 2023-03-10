<?php

declare(strict_types=1);

namespace App;

class Toaster
{
    // property promotion
    public function __construct(
        protected array $slices = [],
        protected int   $size   = 2
    ) {
    }

    public function addSlice(string $slice): void
    {
        if (count($this->slices) < $this->size) {
            $this->slices[] = $slice;
        }
    }

    public function toast()
    {
        foreach ($this->slices as $i => $slice) {
            echo ($i + 1) . ': Toasting ' . $slice . PHP_EOL;
        }
    }
}
