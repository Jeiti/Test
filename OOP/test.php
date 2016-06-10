<?php
header("Content-type:text/html; charset=utf-8");
ini_set("error_reporting",E_ALL);
ini_set("display_errors",1);
ini_set("display_startup_errors",1);
//Полиморфизм
require_once ("config.php");

function Proba(Man $obj){
    echo "This is text from function Proba";
}
function returnClassFunctions(Man $e){
    return "This text from function proverkaClass";
}

try{
    $a=new Man("Prosto text");
}
catch (Exception $a){//$a instanceOf Man
    echo "<br>";
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
