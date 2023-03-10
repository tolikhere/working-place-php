<?php

declare(strict_types=1);

namespace App;

class ToasterPro extends Toaster
{
    public function __construct()
    {
        // call parent's methods if you need them this way
        parent::__construct();
        $this->size = 4;
    }

    // The signature of a child must the as parent
    // And better name parameters the same as parent
    public function addSlice(string $slice): void
    {
        parent::addSlice($slice);
    }

    public function toastBagel()
    {
        foreach ($this->slices as $i => $slice) {
            echo ($i + 1) . ': Toasting ' . $slice . ' with bagels option' . PHP_EOL;
        }
    }
}
