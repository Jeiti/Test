<?php

class FreelanceCompany
{
    public $sotrudniki;
    public function __construct()
    {
        $this->sotrudniki = new ArrayObject([]);
    }
    public function ustroitNaRabotu(Employable $_sotrudnik){
        $_sotrudnik->passInterview();
        $this->sotrudniki->append($_sotrudnik);
    }
    public function __toString()
    {
        $str="";
        for($i=$this->sotrudniki->getIterator(); $i->valid(); $i->next()){
            $str = $str . $i->current();
            echo "<br>";
            echo "<br>";
        }
        return $str;
    }

}

