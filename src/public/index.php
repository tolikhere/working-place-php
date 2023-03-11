<?php

require_once __DIR__ . '/../vendor/autoload.php';

$service = new \App\DebtCollectionService();

$service->collectDebt(new \App\Rocky());
$service->collectDebt(new \App\CollectionAgency());
