<?php
header("content-type: text/html; charset=utf-8");
class Person {
    private $fio;//-это инкапсуляция, т.е. доступ к свойству извне закрыт, для этого необходимо использовать getter, у которого внутри как правило return
    //так же она(инкапсуляция) нужна для обработки введенных некорректных данных
    protected $age;
    public function __construct($_fio){
        $this->fio=ucfirst($_fio);//$this->fio - это мы устанавливает приватному(любому) свойству полученные данные конструктором
        $this->age=5;//значения по умолчанию нужно устанавливать в конструкторе
    }
    public function getFio() {//getter - нужна для получения приватного свойства и передачи его наружу
        return $this->fio;
    }
    public function setAge($_age) {//setter - нужна для контролируемой установки значений приватным свойствам
        if($_age>0) {
            $this->age=$_age;//доступ к private $age и установка этому свойству $_age переданное из вызова $a->setAge(15);
        }
    }
    public function getAge() {
        return $this->age;
    }
    public function __toString() {
        return "Меня зовут - $this->fio, мне - $this->age";
    }
}
$a=new Person("vasya");//-это мы передаем строку в конструктор
echo $a->getFio();//получаем результат из getFio в котором возвращается значение приватного св-ва private $fio;
$a->setAge(15);
echo $a->getAge();
echo $a;//выводит результат __toString;
echo "<br>";
echo "<br>";
echo "<br>";
class Programmer extends Person {
    public $langs=[];

    public function __construct($_fio, $_langs) {
        parent::__construct($_fio);//передаем в класс родителя в приватное св-во $fio + это пример наследования
        $this->langs=$_langs;
        $this->age=19;
    }

    public function __toString()//todo: вывести все языки программирования которые он знает
    {
        return parent::__toString() . " я программист и знаю следующие языки программирования: " . implode(", ",$this->langs) . ";";
    }

    //todo: добавить методы - удалить последний язык программирорвания и удалить язык программирования по индексу
    public function addLang($_lang) {
        array_push($this->langs,$_lang);
    }

    public function removeLang($_deletedLang)//метод-удалить язык по названию
    {
        if(in_array($_deletedLang, $this->langs))//если существует такое значение в массиве
        {
            $_deletedLangPosition = array_search($_deletedLang, $this->langs);//находим этот элемент и возвращаем его индекс
            unset($this->langs[$_deletedLangPosition]);//удаляем элемент массива
        }
        else
        {
            echo "<br>".$this->getFio()." не знает такого языка программирования!!!"."<br>";
        }
    }

    public function setAge($_age)//-это пример полиморфизма (множественное поведение), т.е. можем переопределять поведение в дочерних классах (в Programmer)
        //выполнение функции происходить может по другому чем у родителя
    {
        if($_age>18) {
            $this->age=$_age;
        }
    }
}

$misha=new Programmer("misha", ["php","c#","ruby"]);//Вызывается метод __construct с параметрами
echo $misha->getFio();//-это пример наследования
echo "<br>";
$misha->setAge(23);
echo $misha;//Вызывается метод __toString
$misha->addLang("python");
echo "<br>";
$misha->removeLang("jjp");
echo "<br>";
print_r($misha->langs);
echo "<br>";
echo "<br>";
echo "<br>";
//todo: реализовать класс веб-дизайнер, наследовать от человека, определить какие графические редакторы знает (в виде массива)
class webDesigner extends Person
{
    public $graphProgramms=[];

     public function __construct($_fio, $_graphProgramms)
     {
         parent::__construct($_fio);
         $this->graphProgramms=$_graphProgramms;
     }

    public function getFio()
    {
        return parent::getFio();
    }
    public function getGraphProgramms()
    {
        return $this->graphProgramms;
    }
}

$vasya=new webDesigner("vasily",["photoshop","coreldraw","3dMax"]);
echo $vasya->getFio();
echo "<br>";
print_r($vasya->getGraphProgramms());
echo "<br>";
echo "<br>";
echo "<br>";
//todo: реализовать класс веб-программист, и унаследовать его от программиста, добавить метод deploy-т.е. развертывание
class webProgrammer extends Programmer
{
    public function deploy()
    {

    }
}