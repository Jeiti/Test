<?php

interface IJournal{
    public function registerObserver(IObserver $_observer);
    public function removeObserver(IObserver $_observer);
    public function notifyObserver();
}