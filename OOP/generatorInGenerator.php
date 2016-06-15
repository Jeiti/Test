<?php
function filter(callable $func = null, $arr) {
    if (null === $func)
        $func = 'boolvar';
    foreach($arr as $item)
        if ($func($item))
            yield $item;
}


function enumerate($arr) {
    $i=0;
    foreach($arr as $val)
        yield [$i++, $val];
}


$ages = [39, 20, 10, 25, 40];


$gener = enumerate(
    filter(function($arg) { return ($arg % 2) === 0; }, $ages)
);
foreach ($gener as $item)
    print_r($gener->current());