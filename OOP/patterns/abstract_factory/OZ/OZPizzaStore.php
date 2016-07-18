<?php
namespace OZ;
use  \Core\PizzaStore;
class OZPizzaStore extends PizzaStore
{
    public function orderPizza($_type){
        $pizza = $this->factory->createPizza($_type);
        $pizza->prepare();
        $pizza->bake();
        $pizza->box();
        return $pizza;
    }
}