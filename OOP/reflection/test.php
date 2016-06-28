<?php
header("content-type:text/html; charset=utf-8");

class Person{
    public $name;
    protected $age;
    private $wage;
}

$misha = new Person();

if($misha instanceof Person){
    echo "Миша человек<br>";
}

$cl = new ReflectionClass('Person');
$properties = $cl->getProperties(ReflectionProperty::IS_PRIVATE | ReflectionProperty::IS_PUBLIC);

foreach ($properties as $val){
    echo $val->name . "<br>";
}
//TODO: получить информацию о всех методах класса
//TODO: написать какие методы являются: приватными, публичными, protected
class Programmer extends Person{

}

$vasya = new Programmer();
if($vasya instanceof Person){
    echo "Вася тоже человек";
}

