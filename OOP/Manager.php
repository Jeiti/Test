<?php
require_once ("Programmer.php");
class Manager extends Person implements Employable
{
    public function passInterview(){
        echo "прошел собеседование на менеджера";
    }
    public function think()
    {
        echo "думает как менеджер";
    }

    public function __toString(){
        return parent::__toString();
    }
}