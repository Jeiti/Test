<?php
use \Core\PizzaStore;
use \Core\Pizza;
use \Core\SimpleFactory;

function globalAutoload($classname){
    $classname = str_replace("\\","/",$classname);
    $filename = "$classname.php";
    echo $filename;
    if(file_exists($filename)){
        require_once ($filename);
    }
}
spl_autoload_register("globalAutoload");


$pizzaStore = new PizzaStore("PizzaMia", new SimpleFactory());
$pizza = $pizzaStore->orderPizza("Clam");
echo $pizza;