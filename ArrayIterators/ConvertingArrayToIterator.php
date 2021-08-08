<?php

$languages = array('Javascript', 'C', 'PHP', 'C++', 'Python', 'Java');

$languages = new ArrayIterator($languages);

$languages->asort();
//$languages = new LimitIterator($languages, 2,3);

//$languages = $languages->getArrayCopy();

//$languages = iterator_to_array($languages);

//$languages = array_reverse($languages);

foreach ($languages as $language) {
    echo $language. PHP_EOL;
}
