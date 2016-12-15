<?php
$a[0]='a';
$a[1]='b';
$a[2]='c';
$a[4]='d';
$a['abv'] = 'abv';

// echo "<pre>".print_r($a,true)."</pre>";
echo count($a); // размер на масива
echo '<br>';
if (is_array($a)) { // проверяваме дали дадена променлива е масив
      	echo "is array";
      }      

// ksort($a); сортиране по ключ - Масива бива подреден по стойност на ключове НЕ СЕ ГУБИ ВРЪЗКАТА МЕЖДУ ТЯХ!!!
// krsort($a); масива бива подреден обратно по стойност на ключове НЕ СЕ ГУБИ ВРЪЗКАТА МЕЖДУ ТЯХ!!!
// sort($a); сортиране по стойност , но ГУБИМ ВРЪЗКАТА МЕЖДУ КЛЮЧОВЕТЕ!!!
// rsort($a); сортиране по стойност низходящ ред,но ГУБИМ ВРЪЗКАТА МЕЖДУ КЛЮЧОВЕТЕ!!!
// asort($a); сортиран масив които ключовете биват запазени!!!
// arsort($a);  обърнат сортиран масив които ключовете биват запазени!!!
echo "<pre>".print_r($a,true)."</pre>";  

$ar1 = array(55, 101, 140, 4);
$ar2 = array(1, 3, 2, 7);
$ar3 = array(3, 5, 8, 1);
$ar4 = array(3, 5, 8, 33);

array_multisort($ar1, $ar2, $ar3, $ar4);

var_dump($ar1);
echo "<br>";
var_dump($ar2); 
echo "<br>";
var_dump($ar3); 
echo "<br>";
var_dump($ar4); 

echo "<br>";
// Проверяваме дали даден ключ съществува в масив!!! 2 начина за подобно нещо!

if (isset($a['abv'])) { // може да задаваме числа и букви => int and string
	echo "found";
}
else {
	echo "not found";
}

echo "<br>";

if (array_key_exists("abv", $a)) { // може да задаваме числа и букви => int and string
	echo "found";
}
else {
	echo "not found";
}

echo "<br>";
// Проверяваме зададена стойност в даден масив!!!

if (array_search('a', $a)!==false) {
	echo "found";
}
else {
	echo "not found";
}
?>