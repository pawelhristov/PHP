<?php
$fruits=array('banana','limon','portokal');
var_dump($fruits);
echo $fruits[1].'<br>';

$animals=array(1=>'tigar',2=>'bear',5=>'snake');
var_dump($animals);
echo $animals[5].'<br>';	

$guns=array(2=>'baretta','uzi',3=>'sniper');
var_dump($guns);
echo $guns[3].'<br>';

$guns=array('blue'=>'baretta','uzi',3=>'sniper');
var_dump($guns);
echo $guns['blue'].'<br>';	

$guns=array('blue'=>'baretta','uzi',3=>'sniper');
$guns['blue']='barettas';
echo $guns['blue'].'<br>';	

$guns=array('blue'=>'baretta','uzi',3=>'sniper');
unset($guns['blue']); // премахване от масива с функцията UNSET!!! 
var_dump($guns);

echo "<br>";

$guns=array('blue'=>'baretta','uzi',3=>'sniper');
echo count($guns).'<br>';	
	
$cars=array('BMW','OPEL','AUDI');
for ($i=0; $i < count($cars); $i++) { 
	echo $cars[$i].'<br>';
}

$car='320';
$cars=array('NISSAN','LADA','KIA',$car);
for ($i=0; $i < count($cars); $i++) { 
	echo $cars[$i].'<br>';
}

$car='320';
$cars=array('NISSAN','LADA','KIA');
echo '<table border="1">';
for ($i=0; $i < count($cars); $i++) { 
	echo '<tr><td>'.$cars[$i].'</td></tr>';
}
echo '</table>';



$cars = array("Volvo", "BMW", "Toyota"); 
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".".'<br>';

$cars = array("Volvo", "BMW", "Toyota");
echo count($cars).'<br>';

$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
    echo $cars[$x];
    echo "<br>";
}

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";

echo "<br>";

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
?>