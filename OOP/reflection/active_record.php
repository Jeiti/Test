<?php

header("content-type:text/html; charset=utf-8");
/**
 * Пример реализации модели из шаблона ActiveRecord
 */

class MySQLDB {
    private $link;
    public function __construct()
    {
        $this->link = mysqli_connect('localhost', 'root', '123', 'insuarance');
    }

    public function __destruct()
    {
        mysqli_close($this->link);
    }

    public function getFields($tableName) {
        $res = mysqli_query($this->link, "select * from $tableName");
        $fieldNames = [];
        while($field = mysqli_fetch_field($res))
            array_push($fieldNames, $field->name);
        return $fieldNames;
    }

    public function query($tableName, $where) {
        $query = "select * from $tableName";
        if (strlen($where))
            $query .= " where $where";
        $res = mysqli_query($this->link, $query);
        if (!$res)
            echo mysqli_error($this->link);
        return $res;
    }
}

class Model {
    protected static $tableName = 'nothing';

    public static function find($id) {
        $db = new MySQLDB();
        $fields = $db->getFields(static::$tableName);
        $result = $db->query(static::$tableName, "id=$id");
        $row = mysqli_fetch_object($result);
        $cl = new ReflectionClass(get_called_class());
        $obj = $cl->newInstance();
        foreach($fields as $field) {
            $obj->{$field} = $row->{$field};
            echo "row = ".$row->{$field}."<br>";
        }
        return $obj;
    }
}

class News extends Model{
    protected static $tableName = 'news';
}

$news = News::find(9);
echo $news->title;

//TODO: разобраться в коде выше и внедрить в проект для Model
//TODO: найти еще 1 пример практического применения reflection