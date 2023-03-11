<?php

namespace App;

class Text extends Field
{
    public function render($x = 2): string
    {
        return <<<HTML
<input type="text" name="$this->name">
HTML;
    }
}
