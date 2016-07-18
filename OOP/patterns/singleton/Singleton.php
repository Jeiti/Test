<?php

class Singleton
{
    private $value;
    protected $file;
    private static $instance=NULL;

    public function getValue(){
        return $this->value;
    }


    private function __construct($message){
        $this->value = $message;
        $this->file = fopen("testsingleton.php", "r");
    }
    public static function createInstance($message){
        if(is_null(self::$instance)){
            self::$instance = new self($message);
        }
        return self::$instance;
    }


    public function __destruct()
    {
        fclose($this->file);
    }
    private function __clone()
    {
        echo "АААА меня клонируют\n";
        $this->file = fopen("testsingleton.php", "r");
    }
}