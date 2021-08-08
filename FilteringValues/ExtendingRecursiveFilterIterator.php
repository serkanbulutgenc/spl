<?php

class FilterByExtensions extends RecursiveFilterIterator
{
    protected $extensions;

    public function __construct(RecursiveIterator $iterator, $extensions)
    {
        parent::__construct($iterator);

        $this->extensions = is_array($extensions) ? $extensions: (array) $extensions;
    }

    public function accept()
    {
        if ($this->hasChildren()) {
            return true;
        }
        return $this->current()->isFile() &&
            in_array(strtolower($this->current()->getExtension()),$this->extensions);
    }

    public function getChildren()
    {
        return new self($this->getInnerIterator()->getChildren(), $this->extensions);
    }
}

$files = new RecursiveDirectoryIterator('.');

$files->setFlags(FilesystemIterator::UNIX_PATHS);

$files = new FilterByExtensions($files, ['jpg', 'png']);

$files = new RecursiveIteratorIterator($files);

foreach ($files as $file) {
    echo $file->getPathname() .PHP_EOL;
}
