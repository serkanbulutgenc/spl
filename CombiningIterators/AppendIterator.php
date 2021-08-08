<?php

class AuthorFilter extends FilterIterator
{
    protected $author;

    public function __construct(Iterator $iterator, $author)
    {
        parent::__construct($iterator);
        $this->author = $author;
    }

    public function accept()
    {
        return $this->current()->author == $this->author;
    }
}

$courses = simplexml_load_file(dirname(__DIR__)."/common/data/courses.xml", 'SimpleXMLIterator');
$powers = new AuthorFilter($courses, 'David Powers');
$pecks = new AuthorFilter($courses, 'Jon Peck');
$courses = new AppendIterator();
$courses->append($powers);
$courses->append($pecks);
$previous = '';

foreach ($courses as $course) {
    if($previous != $course->author){
        echo "<h2>Courses by $course->author</h2>".PHP_EOL;
    }
    echo "$course->title". PHP_EOL;
    $previous = (string) $course->author;
}