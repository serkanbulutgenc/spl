<?php

$days =['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday','Friday', 'Saturday'];
$days= new ArrayIterator($days);
$days = new InfiniteIterator($days);
$days = new LimitIterator($days, 3,10);

foreach ($days as $day) {
    echo $day .PHP_EOL;
}