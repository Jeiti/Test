<?php

/**
 * Class Competence
 * Пример утиной типизации.
 * Если нечто ходит как утка и крякает как утка, то это утка
 */
class Competence {
    public $mood;
    public $name;

    /**
     * Competence constructor.
     * @param $mood
     * @param $name
     */
    public function __construct($mood, $name)
    {
        $this->mood = $mood;
        $this->name = $name;
    }


    public function equal($obj) {
        $cl = new ReflectionClass($obj);
        if ($cl->hasProperty('mood') && $cl->hasProperty('name')) {
            if ($obj->mood == $this->mood && $obj->name == $this->name)
                return true;
        }
        return false;
    }
}

class SomeClass
{
    public $some_thing;
}

class CompetenceLike{
    public $name;
    public $mood;

    /**
     * CompetenceLike constructor.
     * @param $name
     * @param $mood
     */
    public function __construct($name, $mood)
    {
        $this->name = $name;
        $this->mood = $mood;
    }


}

$competence = new Competence('good', 'Programming');
$compy = new Competence('good', 'Programming');
$smth = new SomeClass();
$something_like_competence = new CompetenceLike('Programming', 'good');



if($competence->equal($something_like_competence)){
    echo "Объекты равны";
}
else{
    echo "не равны";
}



if($competence->equal($compy)){
    echo "Объекты равны";
}
else{
    echo "не равны";
}



if($competence->equal($smth)){
    echo "Объекты равны";
}
else{
    echo "не равны";
}