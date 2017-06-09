<?php

require_once __DIR__.'/../vendor/autoload.php';

use Yuzu\Effiliation\Client;

$client = new Client('YOURAPITOKEN');


// Retrieve all your programmes
$programmes = $client->getProgrammes(['filter' => \Yuzu\Effiliation\Enum\RegistrationStateTypeEnum::ALL]);
// with filters
$programmes = $client->getProgrammes(['lg' => 'fr', 'filter' => \Yuzu\Effiliation\Enum\RegistrationStateTypeEnum::MINES]);

// Retrieve all transactions
$transactions = $client->getTransactions(['all' => 'yes']);

// Retrieve transactions from a given merchant
$transactions = $client->getTransactions(['id_affilieur' => '123456']);

var_dump($programmes->getBody());
var_dump($transactions->getBody());