<?php

$courses = simplexml_load_file(dirname(__DIR__) . '/common/data/courses.xml', 'SimpleXMLIterator');
$courses = new CallbackFilterIterator($courses, fn ($current, $key, $iterator)=> strtolower($current->level) == 'beginner' );

foreach ($courses as $course) {
    echo "$course->title with $course->author (duration: $course->duration)" . PHP_EOL;
}
