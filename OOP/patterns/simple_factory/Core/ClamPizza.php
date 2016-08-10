<?php
namespace Core;
use \Core\Pizza;
class ClamPizza extends Pizza
{
    public function __construct(){
        $this->type = "Clam";
    }
}