<!-- PHP divides the operators in the following groups:

Arithmetic operators
Assignment operators
Comparison operators
Increment/Decrement operators
Logical operators
String operators
Array operators -->


<?php 
// Start PHP Arithmetic Operators 

$x = 10;
$y = 23;

echo $x + $y.'<br>';

$x = 10;
$y = 23;

echo $x - $y.'<br>';

$x = 10;  
$y = 6;

echo $x * $y.'<br>';

$x = 10;  
$y = 6;

echo $x / $y.'<br>';

$x = 10;  
$y = 6;

echo $x % $y.'<br>';

// End PHP Arithmetic Operators

// Start PHP Assignment Operators
$x = 10;
echo $x.'<br>';

$x = 20;  
$x += 100;

echo $x.'<br>';

$x = 50;
$x -= 30;

echo $x.'<br>';

$x = 10;
$x *= 4;

echo $x.'<br>';

$x = 10;
$x /= 5;

echo $x.'<br>';

$x = 15;
$x %= 4;

echo $x.'<br>';
// End PHP Assignment Operators

// Start PHP Comparison Operators

$x = 100;  
$y = "100";

var_dump($x == $y); // returns true because values are equal

$x = 100;  
$y = "100";

var_dump($x === $y); // returns false because types are not equal

$x = 100;  
$y = "100";

var_dump($x != $y); // returns false because values are equal

$x = 100;  
$y = "100";

var_dump($x <> $y); // returns false because values are equal

$x = 100;  
$y = "100";

var_dump($x !== $y); // returns true because types are not equal

$x = 100;
$y = 50;

var_dump($x > $y); // returns true because $x is greater than $y

$x = 10;
$y = 50;

var_dump($x < $y); // returns true because $x is less than $y

$x = 50;
$y = 50;

var_dump($x >= $y); // returns true because $x is greater than or equal to $y

$x = 60;
$y = 70;

var_dump($x <= $y); // returns true because $x is less than or equal to $y
// End PHP Comparison Operators

// Start PHP Increment / Decrement Operators
$x = 10;
echo ++$x.'<br>';

$x = 10;
echo $x++.'<br>';

$x = 10;
echo --$x.'<br>';

$x = 10;
echo $x--.'<br>';
// End PHP Increment / Decrement Operators

// Start PHP Logical Operators

$a = 3;
$b = 4;

if ($a == 3 && $b == 4) {
	echo "true".'<br>';
}
else {
	echo "false";
}

$a = 3;
$b = 4;
$c = "ab";
if (($a == 3 || $b == 4) && $c == "abc") {
	echo "trueee".'<br>';
}
else {
	echo "false".'<br>';
}

$a = 3;
$b = 4;
$c = "abc";
if ($c == "abc" && ($a == 3 || $b == 4 )) {
	echo "trueee".'<br>';
}
else {
	echo "false".'<br>';
}

$a = 3;
$b = 2;

if ($a == 3 || $b == 4) {
	echo "true".'<br>';
}
else {
	echo "false";
}

$a = 1;
$b = 2;

if ($a == 3 || $b == 4) {
	echo "true";
}
else {
	echo "false".'<br>';
}

$x = 100;
$y = 50; 

if ($x == 100 and $y == 50) {
	echo "Hello world".'<br>';
}

$x = 100;  
$y = 50;

if ($x == 100 or $y == 80) {
    echo "Hello world!".'<br>';
}

$x = 100;  
$y = 50;

if ($x == 100 xor $y == 80) {
    echo "Hello world!!".'<br>';
}

$x = 200;  
$y = 50;

if ($x == 200 && $y == 50) {
    echo "Hello world!".'<br>';
}

$x = 100;  
$y = 50;

if ($x == 100 || $y == 80) {
    echo "Hello world!".'<br>';
}

$x = 100;  

if ($x !== 90) {
    echo "Hello world!".'<br>';
}
// End PHP Logical Operators

// Start PHP String Operators
$txt1 = "Здрасти";
$txt2 = " world!!";
echo $txt1 . $txt2 .'<br>';

$txt1 = "Здравей";
$txt2 = " world!!!";
$txt1 .= $txt2;
echo $txt1 .'<br>' ;
// End PHP String Operators

// Start PHP Array Operators
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

print_r($x + $y); // union of $x and $y

$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

var_dump($x == $y);

$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

var_dump($x === $y);

$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

var_dump($x != $y);

$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

var_dump($x <> $y);

$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

var_dump($x !== $y);
// End PHP Array Operators
?>

