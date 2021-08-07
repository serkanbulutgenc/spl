<?php
/*
 * Inckudes dot files
 * Numbered keys
 * Path not included in value
 * No configuratiın options
 * Array requires cloned objects
 * */
$dir = new DirectoryIterator('common/images');

foreach ($dir as $key => $file) {
    //var_dump($file);
    if($file->isFile()):
        //echo $key . ' => '.$file->getPathname().PHP_EOL;
        $files[]= clone $file;
    endif;
}

echo $files[2]->getPathname();
