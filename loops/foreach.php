<?php
	$colors = array("red", "green", "blue", "yellow"); 

	foreach ($colors as $value) {
	    echo $value .'<br>';
	}

	$ar[0] = 'a';
	$ar[1] = 'b';
	$ar[2] = 'c';
	$ar[5] = 'd';
	$ar[6] = array('t','m');

	// for ($i=0; $i < count($ar); $i++) { 
	// 	echo $ar[$i].'<br>';
	// }

	// foreach ($ar as $key => $value) {

	// 	if ($key == 5) {
	// 		break;
	// 	}

	// 	echo $key.'='.$value.'<br>';
	// }

	foreach ($ar as $key => $value) {

		if (is_array($value)) {
			foreach ($value as $kkey => $vvalue) {
				echo $kkey.'='.$vvalue.'<br>';
			}
		}
		else {
			echo $key.'='.$value.'<br>';
		}	
	}
?>

