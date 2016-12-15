<?php
// $i = 2;
// echo $i.'<br>';
// sum($i);
// echo $i.'<br>';

// function sum($i)
// {
// 	$i*=$i;
// 	echo $i.'<br>';
// }

$i = 2;

function sum() {
	global $i;

	echo $i.'<br>';
	$i++;
}

sum();
echo $i;

$x = 5; // global scope
 
function myTest() {
    // using x inside this function will generate an error
    echo "<p>Variable x inside function is: $x</p>";
} 
myTest();

echo "<p>Variable x outside function is: $x</p>";

?>