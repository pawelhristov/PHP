<?php 
$a = '1';
echo $a+2 .'<br>'; // TODO sub whit 2

$a = '1abc';
$b = (int)$a;

var_dump($b);

$a = 'abc1';
$b = (int)$a;

var_dump($b);

$a = '1.25abc';
$b = (float)$a;

var_dump($b);

$a = 1.433;
$b = (string)$a;

var_dump($b);

$a = 2.43;
$b = (int)$a;

var_dump($b);

$a = 4;
$b = (float)$a;

var_dump($b);

$a = 2;
$b = (boolean)$a;

var_dump($b);

$a = -2;
$b = (boolean)$a;

var_dump($b);

$a = 0;
$b = (boolean)$a;

var_dump($b);

$a = '';
$b = (boolean)$a;

var_dump($b);

$a = '1';
$b = (boolean)$a;

var_dump($b);

$a = '0';
$b = (boolean)$a;

var_dump($b);

$a = "abc";
$b = (boolean)$a;

var_dump($b);

$a = 2.33;
$b = (boolean)$a;

var_dump($b);

$a = '2.33';
$b = (boolean)$a;

var_dump($b);

$a;
$b = (boolean)$a;

var_dump($b);
?>