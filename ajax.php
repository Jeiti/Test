<?php
header('Content-type:application/json');
//echo "test" . $_POST["id"] . date("y.m.d H:i:s");
if($_GET['id']){
    $a=$_GET['id']*5;
}
$comments = [['author'=>'Misha', 'content' => 'Hello'],['author'=>'Masha', 'content' => 'Goodbye'],['author'=>'xz','content'=>$a]];
echo json_encode($comments);

