<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Toaster;
use App\ToasterPro;

$toaster = new ToasterPro();

$toaster->addSlice('bread');
$toaster->addSlice('bread');
$toaster->addSlice('bread');
$toaster->addSlice('bread');
$toaster->addSlice('bread');
$toaster->addSlice('bread');

//$toaster->toastBagel();

foo($toaster);
function foo(Toaster $toasterPro)
{
    $toasterPro->toast();
}
