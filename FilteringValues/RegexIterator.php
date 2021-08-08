<?php

$files =  new RecursiveDirectoryIterator(dirname(__DIR__), FilesystemIterator::UNIX_PATHS);
$files = new RecursiveIteratorIterator($files);
$files = new RegexIterator($files,'/\.(?:jpg|png)$/i');

foreach ($files as $file) {
    echo $file->getFilename().PHP_EOL;
}
