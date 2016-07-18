<?php

function __autoload($classname){
    require_once ($classname. ".php");
}

$pizzaStore = new PizzaStore("PizzaMia", new SimpleFactory());
$pizza = $pizzaStore->orderPizza("Clam");
echo $pizza;