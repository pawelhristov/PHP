<?php
	function area($radius) {
		echo pi()*($radius*$radius).'<br>';
	}

	area(2);
	
	function areas($radius,$pi) {
		echo $pi*($radius*$radius).'<br>';
	}

	areas(4,3.14);

	function areass($radius,$pi=4.12) {
		echo $pi*($radius*$radius).'<br>';
	}

	areass(4);

	function areasss($radius,$pi=4.12) {
		echo $pi*($radius*$radius).'<br>';
	}

	areasss(4,10);
	
	// $b = 3;
	// $a = areA($b);

	// echo $a;
	// function areA($radius,$pi=3.14) {
	// 	return $pi*($radius*$radius);
	// }

	function writeMsg() {
    echo "Hello world!";
}

	writeMsg(); // call the function

	function familyName($fname) {
    echo "$fname Refsnes.<br>";
}

	familyName("Jani");
	familyName("Hege");
	familyName("Stale");
	familyName("Kai Jim");
	familyName("Borge");

	function familyNamee($fname, $year) {
    echo "$fname Refsnes. Born in $year <br>";
}

	familyNamee("Hege", "1975");
	familyNamee("Stale", "1978");
	familyNamee("Kai Jim", "1983");

	function setHeight($minheight = 50) {
    echo "The height is : $minheight <br>";
}

	setHeight(350);
	setHeight(); // will use the default value of 50
	setHeight(135);
	setHeight(80);

	function sum($x, $y) {
    $z = $x + $y;
    return $z;
}

	echo "5 + 10 = " . sum(5, 10) . "<br>";
	echo "7 + 13 = " . sum(7, 13) . "<br>";
	echo "2 + 4 = " . sum(2, 4);
?>