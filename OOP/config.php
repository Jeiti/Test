<?php

function __autoload($_classname){
    require_once ("$_classname.php");
    echo "<br> autoloading: $_classname<br>";
}