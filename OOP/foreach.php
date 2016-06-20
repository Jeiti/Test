<?php

$arr = new ArrayObject([2,5,7,9,1]);
$mas = new ArrayObject();

for ($i=$arr->getIterator();$i->valid();$i->next()){
    $mas->append($i->current());
}

echo "<pre>";
    print_r($mas);