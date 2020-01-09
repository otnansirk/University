<?php

$auth = [
    'username' => 'krisnanto',
    'password' => 'krisnanto',
    'db' => 'restaurant',
];

try {
    
$manager = new MongoDB\Driver\Manager(
    'mongodb+srv://krisnanto:krisnanto@cluster0-stbqi.mongodb.net/quote?retryWrites=true&w=majority'
    // 'mongodb://localhost:27017'
);
    
$filter = [];
$options = [];

$query = new MongoDB\Driver\Query($filter, $options);
$cursor = $manager->executeQuery('quotes.quotes', $query);
var_dump($cursor);
} catch (\Throwable $th) {
    echo $th->getMessage();
}












