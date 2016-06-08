<?php

header("Content-type:text/html; charset=utf-8");
//Полиморфизм

interface classInterface
{
    public function fromInterface();
}
trait classTrait{
    public function fromTrait(){
        echo "This text from classTrait";
    }
}
final class FinalClass{
    public function funcFromFinalClass(){
        echo "This is text from funcFromFinalClass";
    }
}
class Person2{
    function __construct()
    {
        echo "This is class Person";
        echo "<br>";
    }
    final function finalFunc(){
        echo "This is text from finalFunc";
    }
}
class Man extends Person2 implements classInterface{
    use classTrait;
    public  function fromInterface()
    {
        echo "This text from classInterface";
    }
    private $message="private perem message from class Man";
    function __construct($message)
    {
        echo "This text from class Man from __construct";
        echo "<br>";
        echo $this->message;
        echo "<br>";
        echo $this->message=$message . " - This message from class Man from __construct";
        echo "<br>";
        echo "Function __construct from class Man call ";
        parent::__construct();
        $this->fromInterface();
        echo "<br>";
    }
    function __toString()
    {
        return "This is method __tostring from class Man";
    }
    public static $static="static";
    public static function getStatic(){
        return self::$static = "New static";
    }
}
function Proba(Man $obj){
    echo "This is text from function Proba";
}
function returnClassFunctions(Man $e){
    return "This text from function proverkaClass";
}
try{
    if(Man::$static!="new Static"){
        throw new Exception("This is ERROR from TRY");
    }
    else{
        echo "<br>";
        echo "OK";
        echo "<br>";
    }
}
catch (Exception $a){
    echo "This is Exception <br>";
    echo "Message: " . $a->getMessage() . "<br><br>";
}


/*$man = new Man("This is private message from __construct");
echo $man;
echo "<br>";
$man->fromInterface();
echo "<br>";
$man->fromTrait();
echo "<br>";
$man->finalFunc();
echo "<br>";
echo Man::$static;
echo "<br>";
echo Man::getStatic();
echo "<br>";
Proba(new Man("Yahooo"));
echo "<br>";
$FinalClass = new FinalClass();
$FinalClass->funcFromFinalClass();
echo "<br>";*/
proba(new Man("PFFFFFFFFFFFFFFFFFF"));
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo returnClassFunctions(new Man("Yuuuuuuuuuuuhu"));
