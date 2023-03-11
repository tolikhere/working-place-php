<?php

namespace App;

class Invoice implements \Stringable // may no use Interface but highly recommended
{
    public function __toString(): string
    {
        return 'hello';
    }
}
