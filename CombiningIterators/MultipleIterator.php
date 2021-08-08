<?php

$boys = new ArrayIterator(['Ian', 'Mark', 'David']);
$girls = new ArrayIterator(['Jennifer', 'Alice', 'Susan']);
$unisex = new ArrayIterator(['Jody', 'Alex']);

$append = new AppendIterator();
$append->append($boys);
$append->append($girls);
$append->append($unisex);

echo "<h2> Append Iterator </h2>".PHP_EOL;
foreach ( $append as $name) {
    echo $name .PHP_EOL;
}

$multiple = new MultipleIterator(MultipleIterator::MIT_KEYS_ASSOC);
$multiple->attachIterator($boys, 'boys');
$multiple->attachIterator($girls, 'girls');
$multiple->attachIterator($unisex, 'unisex');

echo "<h2> Multiple Iterator </h2>".PHP_EOL;
foreach ( $multiple as $name) {
    print_r( $name );
}