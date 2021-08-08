<?php

$products = array(
    'Cameras' => array('DLSR', 'smartphone', 'compacts'),
    'Lenses' => array('telephoto', 'wide angle', 'fisheye'),
    'Accessories' => array('tripod', 'camera bag', 'Filters' => array(
        'polarizing', 'UV', 'neutral densitiy'
    )),
);

$products = new RecursiveArrayIterator($products);
$products = new RecursiveIteratorIterator($products, RecursiveIteratorIterator::SELF_FIRST);
foreach ($products as $category =>$product) {
    $level = $products->getDepth();
    if($products->hasChildren()){
        echo "<h$level>".$category."</h$level>". PHP_EOL;
    }else{
        echo $product. PHP_EOL;
    }
}
