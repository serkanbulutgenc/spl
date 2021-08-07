<?php
/*
 * Dot files skipped
 * Pathname used for key
 * Path included in value
 * Configurable
 * Cloning not necessary
 * */

$dir = new FilesystemIterator('common/images', FilesystemIterator::UNIX_PATHS);
$dir->setFlags(FilesystemIterator::KEY_AS_FILENAME);
foreach ($dir as $key => $file) {
    //echo $key .' >> '. $file. PHP_EOL;
    $files[]=$file;
}

echo $files[2]->getFilename();