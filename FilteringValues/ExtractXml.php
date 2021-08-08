<?php

$courses = simplexml_load_file(dirname(__DIR__).'/common/data/courses.xml','SimpleXMLIterator');
//$courses = new SimpleXMLIterator($courses);
//var_dump($courses);
foreach ($courses as $course) {
    $matches = new RegexIterator($course->author , '/joh?n peck/i');
    foreach ($matches as $match) {
        echo $course->title . ' with ' .$match  . ' (Duration : '.
            $course->duration . ')'.PHP_EOL;
    }
    //echo $course->title.PHP_EOL;
}
