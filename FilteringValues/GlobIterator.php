<?php

$files = new GlobIterator(dirname(__DIR__) . '/common/images/*.png');

foreach ($files as $file) {
//var_dump($file);
    echo $file->getRealPath() . PHP_EOL;
}
