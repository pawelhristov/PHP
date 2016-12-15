<?php
$a = 12;

if ($a == 12) {
	echo "a equals to true!";
}

	echo "<hr>";

$a = true;

if ($a) {
	echo "a equals to true!";
}

	echo "<hr>";

$a = false;

if ($a) {
	echo "a equals to true!";
}

	echo "<hr>";

$a = 1;

if ($a) {
	echo "a equals to true!";
}

	echo "<hr>";

$a = 0;

if ($a) {
	echo "a equals to true!";
}

	echo "<hr>";	

$a = 0;

if ($a) {
	echo "a equals to true!";
}

else {
	echo "a not equals to true";
}	

	echo "<hr>";

$a = 0;

if ($a == 1) {
	echo "a equals to 1";	
}
else if ($a == 2) {
	echo "a equals to 2";		
}
else {
	echo "a is not 1 or 2";
}	
	
	echo "<hr>";

$t = date("H");

if ($t < "20") {
    echo "Have a good day!";
}		

	echo "<hr>";

$t = date("H");

if ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}

	echo "<hr>";

$t = date("H");

if ($t < "10") {
    echo "Have a good morning!";
} elseif ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}

	echo "<hr>";

$favcolor = "bluee";

switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}
?>