<?php
set_error_handler('handlerException');

function handlerException($num, $message, $file, $line){
    throw new CustomException($message, $num, $file, $line);
}
echo 5/0;

class CustomException extends  Exception{
    public function __construct($message, $code, $file, $line, Exception $previous=null)
    {
        parent::__construct($message, $code, $previous);
        $this->file = $file;
        $this->line = $line;

    }
}