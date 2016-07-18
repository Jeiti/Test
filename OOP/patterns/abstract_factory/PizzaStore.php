<?php

class PizzaStore
{
    private $name;

    public function __construct($_name){
        $this->name=$_name;
    }

    public function orderPizza($_type){
        $pizza = NULL;

        if($_type == "Greek"){
            $pizza = new GreekPizza();
        }
        elseif($_type == "Mozarella"){
            $pizza = new MozarellaPizza();
        }
        elseif($_type == "Veggie"){
            $pizza = new VeggiePizza();
        }
        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();
        return $pizza;
    }
}
//TODO: alt+insert заменить на другое сочетание клавиш