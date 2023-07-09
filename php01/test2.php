<?php
$name = "森口";
$age = 25;
echo $name;

//"私は" + name + "です" ←JSの場合
echo "私は" . $name . "です";
//echo "私は $name です";

$message = "年齢は";  //JS: message = "年齢は"
$message .= $age;    //     message += age
$message .= "です";  //     message += "です"
echo $message;


?>