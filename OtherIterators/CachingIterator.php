<?php

$courses = simplexml_load_file(dirname(__DIR__).'/common/data/courses.xml', 'SimpleXMLIterator');

foreach ($courses as $course) {
    echo "<h2>$course->title </h2>".PHP_EOL;
    echo "<p>$course->description</p>".PHP_EOL;
    $software = $course->software->children();
    $num_software =  $software->count();
    echo "<p>Sofware Covered: ";
    if($num_software == 1){
        echo "$software</p>". PHP_EOL;
    }elseif ($num_software == 2){
        echo "$software[0] and $software[1]</p>". PHP_EOL;
    }elseif ($num_software > 2){
        $software = new CachingIterator($software);
        foreach ($software as $type) {
            if($software->hasNext()){
                echo "$type, ";
            }else{
                echo "and $type </p>";
            }
        }
    }
}

