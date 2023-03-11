<?php

require_once __DIR__ . '/../vendor/autoload.php';

$fields = [
    new \App\Text('textField'),
    new \App\Checkbox('checkboxField'),
    new \App\Radio('radioField'),
];

foreach ($fields as $field) {
    echo $field->render() . '<br>';
}

echo (new \App\Text('text'))->render();
