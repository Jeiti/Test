<?php

class Journal implements IJournal{
    private $observers=[];
    private $observer;

    public function registerObserver(IObserver $_observer){
        $this->observers[]=$_observer;
    }


    public function removeObserver(IObserver $_observer){
        $this->observer=$_observer;
        unset($this->observers[array_search($this->observer,$this->observers)]);
    }


    public function notifyObserver(){
        $arr = new ArrayObject($this->observers);

        for ($i=$arr->getIterator();$i->valid(); $i->next()){
            $i->current()->update();
            echo "</br>";
        }
    }
}