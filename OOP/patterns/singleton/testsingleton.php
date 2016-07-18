<?php
require_once ("Singleton.php");


$first = Singleton::createInstance("Это первый вызов");
$second = Singleton::createInstance($first);



echo $first->getValue();
echo $second->getValue();


/*$second = new Singleton("это второй вызов");
echo $second->getValue();*/

/*$second = $first;*/




if($first === $second){
    echo "Это одиночка";
}
else{
    echo "Что это?";
}