<?php
header("content-type: text/html; charset=utf-8");
require_once ("config.php");
abstract class Person {
    protected $age;
    private $fio;//-это инкапсуляция, т.е. доступ к свойству извне закрыт, для этого необходимо использовать getter, у которого внутри как правило return
    //так же она(инкапсуляция) нужна для обработки введенных некорректных данных
    static private $count=0;//статическое св-во, оно вызывается только через ClassName::св-во//Todo: почитать дополнительно NEW
    public function __construct($_fio){
        $this->fio=ucfirst($_fio);//$this->fio - это мы устанавливает приватному(любому) свойству полученные данные конструктором
        $this->age=5;//значения по умолчанию нужно устанавливать в конструкторе
        self::$count++;//подсчет количества объявленных объектов//TODO: NEW
    }
    static function getCount(){
        return self::$count;
    }
    public function getFio() {//getter - нужна для получения приватного свойства и передачи его наружу
        return $this->fio;
    }
    public function setAge($_age) {//setter - нужна для контролируемой установки значений приватным свойствам
        if($_age>0) {
            $this->age=$_age;
        }
        else{
            throw new Exception("Age <= 0");
        }
    }
    public function getAge() {
        return $this->age;
    }
    public function __toString() {
        return "Меня зовут - $this->fio, мне - $this->age";
    }
    abstract public function think();//создание абстрактного метода//TODO: NEW

}
/*$a=new Person("vasya");//-это мы передаем строку в конструктор
echo $a->getFio();//получаем результат из getFio в котором возвращается значение приватного св-ва private $fio;
$a->setAge(15);
echo $a->getAge();

echo $a;//выводит результат __toString;*/
echo "<br>";
echo "<br>";
echo "<br>";
class Programmer extends Person implements Employable,Freelanceble{//implements Employable-это реализация интерфейса Employable//TODO:NEW
    use Professional;//механизм как бы наследования класса Professional(TRAIT)//todo:почитать про это еще NEW
    public $langs=[];
    public function __construct($_fio, $_langs) {
        parent::__construct($_fio);//передаем в класс родителя в приватное св-во $fio + это пример наследования
        $this->langs=$_langs;
        $this->age=19;
        $this->profession="программистъ";
    }
    public function __toString() {
        return parent::__toString() . " я $this->profession и знаю следующие языки программирования: " . implode(", ",$this->langs) . ";";
    }
    public function addLang($_lang) {
        array_push($this->langs,$_lang);
    }
    public function removeLang($_deletedLang)//метод-удалить язык по названию
    {
        if(in_array($_deletedLang, $this->langs))//если существует такое значение в массиве
        {
            $_deletedLangPosition = array_search($_deletedLang, $this->langs);//находим этот элемент и возвращаем его индекс
            unset($this->langs[$_deletedLangPosition]);//удаляем элемент массива
            sort($this->langs);
        }
        else
        {
            echo "<br>".$this->getFio()." не знает такого языка программирования!!!"."<br>";
        }
    }
    public function setAge($_age)//-это пример полиморфизма (множественное поведение), т.е. можем переопределять поведение в дочерних
        // классах (в Programmer)
        //выполнение функции происходить может по другому чем у родителя
    {
        if($_age>18) {//TODO:ДЗ - создать исключение ProgrammerException, унаследовать от PersonException и выбрасывать его, если возраст <=18
            $this->age=$_age;
        }
        else{
            throw new Exception("Age <= 18");
        }
    }
    public function think(){
        echo "думает как программист";
    }
    public function passInterview(){
        echo "прошел собеседование на программиста";
    }
    public function remoteJob(){
        echo "тружусь удаленно программистом";
    }
}

$misha=new Programmer("misha", ["php","c#","ruby"]);//Вызывается метод __construct с параметрами
echo $misha->getFio();//-это пример наследования
echo "<br>";
/*$misha->setAge(15);*/
echo $misha;//Вызывается метод __toString
$misha->addLang("python");
echo "<br>";
$misha->removeLang("c#");
echo "<br>";
print_r($misha->langs);
echo "<br>";
echo "<br>";
echo "<br>";
class WebDesigner extends Person implements Employable//shift+F6 - рефакторинг//TODO: почитать про рефакторинг NEW
{use Professional;

    public $graphProgramms=[];
    public function __construct($_fio, $_graphProgramms)
     {
         parent::__construct($_fio);
         $this->graphProgramms=$_graphProgramms;
     }
    public function getGraphProgramms()
    {
        return $this->graphProgramms;
    }
    public function think(){//обязательно вызов абстрактного методо//TODO: NEW
        echo "думает как дизайнер";
    }
    public function passInterview(){
        echo "прошел собеседование на веб-дизайнера";
    }
    public function __toString()
    {
        return parent::__toString();
    }
}

$vasya=new WebDesigner("vasily",["photoshop","coreldraw","3dMax"]);
echo $vasya->getFio();
echo "<br>";
print_r($vasya->getGraphProgramms());
echo "<br>";
echo "<br>";
echo "<br>";
class WebProgrammer extends Programmer
{
    public function deploy()
    {
        echo "развёртываю";
    }
}

$petya = new WebProgrammer("petya",["html","css","js"]);
echo Person::getCount();

try{
    $misha->setAge(-1);
}
catch(Exception $e){
    echo "<br>Exception message: ".$e->getMessage();
}