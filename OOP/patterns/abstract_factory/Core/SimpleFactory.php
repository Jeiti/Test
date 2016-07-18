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
//TODO: Прочесть книгу из списка - последнюю,
//TODO: а так же применить фабричный метод
//TODO: применить абстрактную фабрику
