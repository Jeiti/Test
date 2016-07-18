<?php

class Pizza
{
    public function prepare(){
        echo "prepare\n";
    }

    public function bake(){
        echo "bake\n";
    }

    public function cut(){
        echo "cut\n";
    }

    public function box(){
        echo "box\n";
    }

    public function __toString()
    {
        return "Вы заказали пиццу!!! )))\n";
    }
}