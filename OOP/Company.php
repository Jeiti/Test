<?php

require_once ("Programmer.php");

/**
 * Created by PhpStorm.
 * User: evgen
 * Date: 29.05.16
 * Time: 8:48
 */
class Company
{
    public $employees;
    public  function __construct()
    {
        $this->employees = new ArrayObject([]);//TODO: использование SPL -> ArrayObject
    }

    public function employ(Employable $employee){//TODO: использование ранее объявленного интерфейса, почитать про type-hint
        /*    public function passInterview(){
             echo "прошел собеседование на программиста";
        }*/
        $employee->passInterview();
        $this->employees->append($employee);//добавится объект класса (целиком) который реализует интерфейс Employable
    }

    public function __toString()
    {
        $str="";

        for($i=$this->employees->getIterator(); $i->valid();$i->next()){//TODO: использование SPL -> ArrayIterator
            $str .= $i->current();
            echo "<br>";
            $i->current()->passInterview();
            echo " toString <br>";
        }

        return $str;
    }
}