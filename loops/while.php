<?php
	while ($a!=5) {
		$a = rand(1, 10);
		echo $a.'<br>';
	}

	$x = 1; 

	do {
	    echo "The number is: $x <br>";
	    $x++;
	} while ($x <= 5);


	$a=5;

	do {
		$a = rand(1, 10);
		echo $a."<br>";
	}while ($a != 5);

	$x = 6;

	do {
	    echo "The number is: $x <br>";
	    $x++;
	} while ($x <= 5);