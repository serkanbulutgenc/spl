<?php

$courses = simplexml_load_file(dirname(__DIR__).'/common/data/courses.xml', 'SimpleXMLIterator');

$courses = new LimitIterator($courses, 0,10);

foreach ($courses as $course) {
    echo $courses->getPosition()+1  ." $course->title with $course->author (duration: $course->duration)" .PHP_EOL;
}