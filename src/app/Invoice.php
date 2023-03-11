<?php

namespace App;

class Invoice
{
    protected function process(float $amount, string $description)
    {
        var_dump('process');
    }

    public function __call(string $name, array $arguments)
    {
        if (method_exists($this, $name)) {
            //$this->$name(...$arguments);
            call_user_func_array([$this, $name], $arguments);
        }
    }

    public static function __callStatic(string $name, array $arguments)
    {
        var_dump("static", $name, $arguments);
    }
}
