<?php
$csvFile = new SplFileObject('common/data/cars_tab.csv');
//$csvFile = new SplFileObject('common/data/cars.csv');
$csvFile->setFlags(SplFileObject::READ_CSV);
$csvFile->setCsvControl("\t");
foreach ($csvFile as $line) {
    $cars[]= $line;
}

print_r($cars);