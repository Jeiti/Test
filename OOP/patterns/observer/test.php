<?php
header("Content-type:text/html;charset=utf-8");


function globalAutoload($classname){
    $classname = str_replace("\\","/",$classname);
    $filename = "$classname.php";
    if(file_exists($filename)){
        require_once ($filename);
    }
}
spl_autoload_register("globalAutoload");


$journal = new Journal();
$ob1=new Observer1();
$ob2=new Observer2();
$ob3=new Observer3();
$journal->registerObserver($ob1);
$journal->registerObserver($ob2);
$journal->registerObserver($ob3);
$journal->notifyObserver();
$journal->removeObserver($ob1);
echo "</br>";
$journal->notifyObserver();