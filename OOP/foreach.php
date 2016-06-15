<?php

$arr = new ArrayObject([2,5,7,10]);

for($i=$arr->getIterator(); $i->valid(); $i->next()){
    $a = $i->current();
}

print_r($arr);