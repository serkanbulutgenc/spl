<?php
class FilterAuthor extends FilterIterator {

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
$courses = file_get_contents(dirname(__DIR__).'/common/data/courses.json');
$courses = json_decode($courses);
$courses = new ArrayIterator($courses);
$courses = new FilterAuthor($courses,'Kevin Skoglund');

foreach ($courses as $course) {
    echo $course->title ." with ". $course->author . PHP_EOL;
}