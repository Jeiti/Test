<?php
header("content-type:text/html; charset=utf-8");

class Person{
    public $name;
    protected $age;
    private $wage;

    public function a(){

    }
}

$misha = new Person();

if($misha instanceof Person){
    echo "Миша человек\n";
}

$cl = new ReflectionClass('Person');
$properties = $cl->getProperties(ReflectionProperty::IS_PRIVATE | ReflectionProperty::IS_PUBLIC);
$methods = $cl->getMethods();



foreach ($methods as $val){
    echo $val->name . "\n";
}
//TODO: получить информацию о всех методах класса
//TODO: написать какие методы являются: приватными, публичными, protected
class Programmer extends Person{

}

$vasya = new Programmer();
if($vasya instanceof Person){
    echo "Вася тоже человек\n";
}

