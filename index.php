<?php
header("content-type: text/html charset=utf-8");
$stroka = "      We learn HTML. HTML is used for sites! HTML is good.";

$pos=-1;
/*
while($pos=strpos(trim($stroka), "HTML", $pos+1)){
    echo $pos . "<br>";
    echo ($stroka=substr_replace(trim($stroka), "PHP", $pos, 4)) . "<br>";
}*/

$str = "192.168:80";
$str_prov = "/^([0-9]{1,3})\.[0-9]{1,3}\:([0-9]{1,5})$/";

/*for($i=0;$i<strlen($str);$i++){
    for($j=0;$j<strlen($str_prov);$j++){
        if($str[$i]==$str_prov[$j]){
            $result=true;
        }
        else{
            $result=false;
        }
    }
}*/



if(preg_match($str_prov, $str, $matches)){
    echo "OK";
    print_r($matches);
}
else{
    echo "FAIL1";
}
