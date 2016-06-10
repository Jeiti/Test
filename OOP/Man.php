<?php

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
        if(self::$static != "new Static"){
            throw new Exception("This is ERROR from TRY");
        }
        else{
            echo "<br>";
            echo "OK";
            echo "<br>";
        }
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