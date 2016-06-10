<?php

class Person2 extends Manager{
    function __construct()
    {
        echo "This is class Person";
        echo "<br>";
    }
    final function finalFunc(){
        echo "This is text from finalFunc";
    }
}