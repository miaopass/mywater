<?php

$attr = file_get_contents('php://input');
$xml = simplexml_load_string($attr);
echo $xml->accout;
echo "中文Hello World!";
?>



