<?php

class UnorderedListBuilder extends RecursiveIteratorIterator{
    public function beginIteration()
    {
        echo "<ul>\n";
    }
    public function endIteration()
    {
        echo "</ul>\n";
    }
    public function beginChildren()
    {
        echo "<ul>\n";
    }
    public function endChildren()
    {
        echo "</ul></li>\n";
    }
}
$products = array(
    'Cameras' => array('DLSR', 'smartphone', 'compacts'),
    'Lenses' => array('telephoto', 'wide angle', 'fisheye'),
    'Accessories' => array('tripod', 'camera bag', 'Filters' => array(
        'polarizing', 'UV', 'neutral densitiy'
    )),
);

$products = new RecursiveArrayIterator($products);
$products = new UnorderedListBuilder($products, RecursiveIteratorIterator::SELF_FIRST);
foreach ($products as $category =>$item) {
    if($products->hasChildren()){
        echo "<li>".$category. PHP_EOL;
    }else{
        echo "<li>".$item."</li>". PHP_EOL;
    }
}
