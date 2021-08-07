<?php
/*
 * Extends SplFileObject class
 * */

$docs = new FilesystemIterator('common/documents', FilesystemIterator::UNIX_PATHS);

foreach ($docs as $doc) {
    if($doc->getExtension() == 'txt'){
        $textfile = $doc->openFile('r+');
        $textfile->setFlags(SplFileObject::SKIP_EMPTY|SplFileObject::READ_AHEAD|SplFileObject::DROP_NEW_LINE);
        //echo '<h2>' .$textfile->getFilename().'</h2>';
        echo '=== ' .$textfile->getFilename().' ==='. PHP_EOL;

        foreach ($textfile as $line) {
            echo $line;
        }

        $textfile->seek(3);
        echo PHP_EOL;
        echo 'This is fourth line '. $textfile->current() .PHP_EOL;

        while (!$textfile->eof()){
            $textfile->next();
        }
        $date = date('d m Y');
        $textfile->fwrite("\r\n\r\n This line is added dynamically $date ");
    }
}
