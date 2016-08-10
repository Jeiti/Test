<?php
abstract class Kefir{//продукты фабрики - AbstractProductA
    public $name = "Kefir";
}
abstract class Milk{//продукты фабрики - AbstractProductB
    public $name = "Milk";
}

interface MilkFactory{//абстрактная фабрика (молочная)-AbstractFactory
    public function createKefir();
    public function createMilk();
}

class GubinoMilkFactory implements MilkFactory{//реализация абстрактной фабрики - ConcreteFactory1
    public function createKefir(){
        $kefir = new GubinoKefir();
        $kefir->name="GubinoKefir";
        return $kefir;
    }
    public function createMilk(){
        $milk = new GubinoMilk();
        $milk->name="GubinoMilk";
        return $milk;
    }
}

class GubinoKefir extends Kefir{//реализация конкретного продукта (они не знают к какой фабрике они относятся) - ProductA1

}
class GubinoMilk extends Milk{//реализация конкретного продукта (они не знают к какой фабрике они относятся) - ProductB1

}
//все до 32 строчки - это BackEnd (Framework)
//все что class Client и ниже - это FrontEnd (Прикладная часть)

class UfaMilkFactory implements MilkFactory{
    public function createKefir(){
        $kefir = new UfaKefir();
        $kefir->name = "UfaKefir";
        return $kefir;
    }
    public function createMilk(){
        $milk = new UfaMilk();
        $milk->name="UfaMilk";
        return $milk;
    }
}
class UfaKefir extends Kefir{

}
class UfaMilk extends Milk{

}
class Client{//это класс который использует абстрактную фабрику, а именно используется ДЕЛЕГИРОВАНИЕ
// через метод __construct, (который принимает абстракную фабрику) или любой другой  метод,
// по практике вызываются методы создания всех продуктов (реализации)
    protected $factory;
    public function __construct(MilkFactory $_factory){
        $this->factory = $_factory;
        echo "I drink " . $this->factory->createKefir()->name . "\n";
        echo "I like " . $this->factory->createMilk()->name;
    }
}

$client = new Client(new UfaMilkFactory());
//Клиент есть везде
//В каждом шаблоне есть клиент, в который никто никогда не заходит и ничего не менят, ->
//-> изменения происходят в части вызова клиета

//TODO: Реализован шаблон абстрактная фабрика с комментариями