<?php
$fruit[1]='banan';
$fruit[2]='orange';

var_dump($fruit);

$fruits[]='banan';
$fruits[]='orange';

var_dump($fruits);

$car[1]='Opel';
$car[1]='BWM';

echo $car[1].'<br>';

$cars['Astra']='Opel';
$cars[1]='Cadett';

echo $cars['Astra'].'<br>';

for ($i=0; $i < 5; $i++) { 
	$ar[$i]=$i;
}

var_dump($ar);

for ($i=0; $i < 5; $i++) { 
	$ar[$i]=$i;
}

print_r($ar);

for ($i=0; $i < 5; $i++) { 
	$ar[$i]=$i;
}

echo '<pre>'.print_r($ar,true).'</pre>';

$arrayName = array('limon ','banana');

echo '<pre>'.print_r($arrayName,true).'</pre>';

$arrayName = array('yellow'=>'limon ','banana');

echo '<pre>'.print_r($arrayName,true).'</pre>';
?>