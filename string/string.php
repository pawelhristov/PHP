<?php
	$a = 'Hello';
	$b = 'world!';
	echo $a + $b.'<br>';

	$a = 'Hello';
	$b = 'world!';
	echo $a . $b.'<br>';

	$a = 'Hello';
	$b = 'world!';
	$c = $a . $b;
	echo $c.'<br>';

	$a = 1;
	$b = 2;
	$c = $a . $b;
	echo $c.'<br>';

	$a = 1;
	$b = 2;
	$c = $a + $b;
	echo $c.'<br>';

	$a = 'abc';
	$b = "\$a have $a";
	echo $b.'<br>';

	$a = 'abc';
	$b = "$a have $a";
	echo $b.'<br>';

	$a = 'abc';
	$b = '\$a have $a';
	echo $b.'<br>';

	$a = 'abc';
	$b = '$a have $a';
	echo $b.'<br>';
?>