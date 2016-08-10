<?php

class Main{
    public $elem;

    public function getMethod(Iinterface $_elem){
        $this->elem = $_elem;
        $this->elem->load();
    }

}

interface Iinterface{
    public function load();
}

class RealizeIinterface1 implements Iinterface{
    public function load()
    {
       echo "load from RealizeIinterface1";
    }
}

class RealizeIinterface2 implements Iinterface{
    public function load()
    {
        echo "load from RealizeIinterface2";
    }
}

class RealizeIinterface3 implements Iinterface{
    public function load()
    {
        echo "load from RealizeIinterface3";
    }
}

$main = new Main();
$realizeIinterface1= new RealizeIinterface1;
$main->getMethod($realizeIinterface1);