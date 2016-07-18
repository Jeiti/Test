<?php

class PizzaStore
{
    private $name;
    private $factory;

    public function __construct($_name, SimpleFactory $_factory){
        $this->name=$_name;
        $this->factory = $_factory;
    }

    public function orderPizza($_type){
        $pizza = $this->factory->createPizza($_type);
        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();
        return $pizza;
    }
}
//TODO: alt+insert заменить на другое сочетание клавиш