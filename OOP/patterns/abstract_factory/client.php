<?php

function __autoload($classname){
    require_once ($classname. ".php");
}

$pizzaStore = new PizzaStore("PizzaMia");
$pizza = $pizzaStore->orderPizza("Veggie");
echo $pizza;