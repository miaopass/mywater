﻿<?php
$str="<?xml version='1.0'?>
<object>
<deviceid>010002</deviceid>
<custid>0001</custid>
</object>";

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,"http://127.0.0.1:8080/hello1.php");

curl_setopt($ch, CURLOPT_POST, true);

curl_setopt($ch, CURLOPT_POSTFIELDS, $str);

$response = curl_exec($ch);
$xml = simplexml_load_string($response);
$custid= $xml->custid;
if($custid=='0001'){
    echo "成功了";
}
?>