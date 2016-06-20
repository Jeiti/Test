<?php
require_once ("config.php");

function fields() {
    for($i=0; $i<10; $i++) {
        yield [$i,$i+1];
        echo "ok\n";
    }
}

$gener = fields();// new Generator
/*echo get_class($gener);*/

function useGenerator(Generator $_generator){
    foreach ($_generator as $item) {
        print_r($item);
    }
}

useGenerator($gener);

//---------------------------------------------------//

function readFileNew($fileName) {
    $f = fopen($fileName, 'r');
    while($line = fgets($f))
        print_r(yield $line);
    fclose($f);
}
$fileGenerator = readFile('test.php');

foreach ($fileGenerator as $str)
    echo $fileGenerator->current()."\n";