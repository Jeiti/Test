<?php
namespace Core;
class SimpleFactory
{
    public function createPizza($_type){
        $pizza = NULL;

        if($_type == "Clam"){
            $pizza = new ClamPizza();
        }
        elseif($_type == "Mozarella"){
            $pizza = new MozarellaPizza();
        }
        elseif($_type == "Veggie"){
            $pizza = new VeggiePizza();
        }
        return $pizza;
    }
}