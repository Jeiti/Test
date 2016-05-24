<?php
header("Content-type:text/html; charset=utf-8");

/*
$stroka = "      We learn HTML. HTML is used for sites! HTML is good.";

$pos=-1;

while($pos=strpos(trim($stroka), "HTML", $pos+1)) {
    echo $pos . "<br>";
    echo ($stroka = substr_replace(trim($stroka), "PHP", $pos, 4)) . "<br>";
}
    $str = "192.168:80";
    $str_prov = "/^([0-9]{1,3})\.[0-9]{1,3}\:([0-9]{1,5})$/";

    for ($i = 0; $i < strlen($str); $i++) {
        for ($j = 0; $j < strlen($str_prov); $j++) {
            if ($str[$i] == $str_prov[$j]) {
                $result = true;
            } else {
                $result = false;
            }
        }
    }
    if (preg_match($str_prov, $str, $matches)) {
        echo "OK";
        print_r($matches);
    } else {
        echo "FAIL1";
    }

//4 задание

    $str = "Иванов. Использование компетентностного подхода. ftp://competence.ru/comp.odt\n
        Петров. Развитие личностных компетенций. ftp://skills.ru/ftp/pc.odt\n
        Сидоров. Как компетентностный подход помогает при изучении веб-технологий. ftp://competence-ftp-approach.ru/web.odt";
    echo $str;
    echo "<br>";
    echo "<br>";
//$pattern = "/[А-ЯЁа-яё]+/"; ----- так выдает ромбы со знаками вопроса, а так работает --->
    $pattern = "/ftp:/";
    preg_match_all($pattern, $str, $matches);
    print_r(preg_replace($pattern, "html:", $str));
    echo "<br>";
    echo "<br>";
    echo "<br>";
*/

//-------------------------------------------------------------------------------------------------
/*    $str = file_get_contents("info.txt");
    echo "Строка из файла";
    echo "<br>";
    print_r($str);

    $pattern = "/([\w-_]+\@\w+\.(?:com|ru|net))/";
    preg_match_all($pattern, $str, $matches);
    echo "<br>";
    echo "<br>";
    echo "<br>";
    print_r($matches);
    echo "<br>";
    echo "<br>";
    $pattern1 = "/[абвгдеёжзийклмнопрстуфхцчшщъыьэюяАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯ ]+(?:\n|\ )/";
    preg_match_all($pattern1, $str, $matches1);
    echo "<br>";
    print_r($matches1);
    echo "<br>";
    echo "<br>";
    $pattern2 = "/[0-9]{1}\([0-9]{3}\)[0-9]{2}\-[0-9]{2}\-[0-9]{3}/";
    preg_match_all($pattern2, $str, $matches2);
    echo "<br>";
    print_r($matches2);

    echo "<br>";

    for ($i = 0; $i < 2; $i++) {
        /*?/*>
        <p class="blue" style="background-color: aqua"><?php echo $matches[0][$i] . "<br>"; ?></p>
        <?php

    }
//---------------------------------------------------------------------------------------------------
*/

?>

