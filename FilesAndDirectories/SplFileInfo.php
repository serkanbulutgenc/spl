<?php

/*
 *  SplFileinfo object gives many information about the file.
 * */

$files = new FilesystemIterator('common/images', FilesystemIterator::UNIX_PATHS);

foreach ($files as $file) {
    if($file->getExtension() == 'jpg'):
        echo $file->getFilename().' is '. $file->getSize(). ' bytes '. PHP_EOL;
    endif;
}
