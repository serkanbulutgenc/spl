<?php

$files = new RecursiveDirectoryIterator(dirname(__DIR__) . '/common');
$files->setFlags(FilesystemIterator::SKIP_DOTS);

$files = new RecursiveCallbackFilterIterator($files, function ($current, $key, $iterator) {
    if ($iterator->hasChildren()) {
        return true;
    }
    return $current->getSize() > 1024 * 6;
});

$files = new RecursiveIteratorIterator($files);

foreach ($files as $file) {

    echo $file->getPathname(). " is ". round($file->getSize()/1024,1). " Bytes" . PHP_EOL;
}
