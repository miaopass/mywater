<?php
$file_in = file_get_contents("php://input");
$xml = simplexml_load_string($file_in);

$password= $xml->deviceid;
if($password =='010002'){
$str="<?xml version='1.0'encoding='UTF-8'?>
<object>
<custid>0001</custid>
</object>";
echo $str;
}

?>