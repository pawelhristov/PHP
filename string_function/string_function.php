<?php
$a = 'papi';
echo strlen($a); // Намиране дължина на стринг

echo "<br>";

$v = ' pavel '; // Trim (премахване на интервалите,премахване на празнине пространства,отпред и отзад,НО НЕ И ПОСРЕДАТА!!!)
echo strlen($v).'<br>';
$c = trim($v);
echo strlen($c);

echo '<br>';

$b = 'My name is Pavel';
echo str_replace('Pavel','Hristo', $b);  //Заменяне на зададен текст с друг!!!

echo '<br>';

$name = 'My name is Papi'; // Проверяваме дали даден текст се съдържа в друг текст!!!
if (strpos($name, 'Papi')) {
	echo "found";
}

echo '<br>';

$a = 'My name is Pavel';
echo strtoupper($a); // Прехвърляне на всички букви на ГЛАВНИ!!!

echo '<br>';

$a = 'My name is Pavel';
echo strtolower($a); // Прехвърляне на всички букви на МАЛКИ!!!

echo '<br>';

$a = 'My name is pavel';
echo ucwords($a).'<br>'; // Прехвърляне след интервал всички букви на ГЛАВНИ!!!
echo ucfirst($a); // Прехвърляне на първата буквa на ГЛАВНА!!!

echo '<br>';

$ar[] = 'My';
$ar[] = 'Name';
$ar[] = 'Is';
$ar[] = 'Pavelcho';    // прехвърляне на масив във стринг

echo implode('_', $ar); // Първи начин

echo '<br>';

foreach ($ar as  $value) { // Втори Начин
	echo $value.' ';
}

?>