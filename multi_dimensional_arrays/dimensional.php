<?php
$ar1[]='d';
$ar1[]='e';

$ar[]='a';
$ar[]='b';
$ar[]='c';
$ar[]=$ar1;
$ar[3][2]='r';

echo $ar[3][0];
echo "<pre>".print_r($ar,true)."</pre>";

$array[1][0]='a';
$array[1][1]='b';

echo "<pre>".print_r($array,true)."</pre>";

?>