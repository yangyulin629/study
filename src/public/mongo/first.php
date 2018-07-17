<?php

require_once __DIR__ . "/../../vendor/autoload.php";

$client = new MongoDB\Client('mongodb://mongo/');


$insertOneResult = $client->my_database->users->insertOne([
    'username' => 'admin',
    'email' => 'admin@example.com',
    'name' => 'Admin User',
]);

printf("Inserted %d document(s)\n", $insertOneResult->getInsertedCount());

var_dump($insertOneResult->getInsertedId());