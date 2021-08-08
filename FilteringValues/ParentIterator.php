<?php

$dirs = new RecursiveDirectoryIterator('.', FilesystemIterator::SKIP_DOTS);

$dirs = new ParentIterator($dirs);

$dirs = new RecursiveIteratorIterator($dirs, RecursiveIteratorIterator::SELF_FIRST);

foreach ($dirs as $dir) {
    echo $dir . PHP_EOL;
}

