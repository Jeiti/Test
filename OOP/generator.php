<?php
require_once ("config.php");
function fields() {
    for($i=0; $i<10; $i++) {
        yield $i;
    }
}

$gener = fields();
echo get_class($gener);

function useGenerator(Generator $_generator){
    foreach ($_generator as $item) {
        echo $item;
    }
}

useGenerator($gener);

//---------------------------------------------------//

function readFileNew($fileName) {
    $f = fopen($fileName, 'r');
    while($line = fgets($f))
        yield $line;
    fclose($f);
}
$fileGenerator = readFile('test.php');

foreach ($fileGenerator as $str)
    echo $str->current()."\n";