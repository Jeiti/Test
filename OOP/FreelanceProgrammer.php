<?php
require_once ("Programmer.php");

class FreelanceProgrammer extends Person implements Employable, UdalennoRabotaushiy
{
    public $langs = [];
    public function __construct($_fio, $_langs, $_age)
    {
        parent::__construct($_fio);
        $this->langs=$_langs;
        $this->age=$_age;
    }
    public function passInterview()
    {
        echo " прошел собеседование на freelance программиста ";
    }
    public function udalennoRabotaet()
    {
        echo " могу работать удаленно ";
    }
    public function think()
    {
        echo "думаю о удаленной работе";
    }
    public function __toString()
    {
        return parent::__toString() . " я знаю " . implode(", ", $this->langs);
    }
}