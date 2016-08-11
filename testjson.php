<?php
$json = file_get_contents("http://demo12.om-sv.ru/progtest/arData.txt");//получаем массив
$json = json_decode($json);//раскодируем массив

$arrnames = [];//создаем пустой массив

foreach ($json as $key=>$val){
    foreach ($val as $val1=>$val2){
        foreach ($val2 as $val3=>$val4){
            if($val3=='NAME'){//если ключ == 'NAME'
                $arrnames[] = $val4;//добавляем значение в массив
            }
        }
    }
}

$arrnames[] = asort($arrnames);//сортируем полученный массив в порядке возврастания по значениям
$countsubstr = true;//создаем переменную, которая определяет равны ли первые буквы текущего и следующего слова

echo "<div style='-moz-column-count: 3; column-count: 3; width: 45%;'>";

foreach ($arrnames as $val){

    if($countsubstr==true){//если первая текущая буква не равна следующей первой букве
        echo "<p>";
            echo substr(current($arrnames),0,1);//вывести первую букву
            $countsubstr = false;
        echo "</p>";
        echo "<a href='#'>";
            echo current($arrnames);//следом вывести текущее название
        echo "</a>";
        echo "</br>";
    }

    if(substr(current($arrnames),0,1)==substr(next($arrnames),0,1) & $countsubstr == false){
        //если первая текущая буква равна следующей первой букве
        echo "<a href='#'>";
            echo current($arrnames);//то выводим названия из массива
        echo "</a>";
        echo "</br>";
    }
    else{
        $countsubstr=true;
    }
}

echo "</div>";