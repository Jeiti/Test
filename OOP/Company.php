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
        $employee->passInterview();
        $this->employees->append($employee);
    }

    public function __toString()
    {
        $str="";

        for($i=$this->employees->getIterator(); $i->valid();$i->next()){//TODO: использование SPL -> ArrayIterator
            $str .= $i->current();
        }

        return $str;
    }

}