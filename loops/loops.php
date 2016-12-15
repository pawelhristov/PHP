<table border="1">
<?php
	for ($i = 0; $i < 10; $i++) { 
		echo $i."<br>";
	}

	for ($i = 0; $i <= 10; $i++) { 
		echo $i."<br>";
	}

	for ($i = 15; $i >= 10; $i--) { 
		echo $i.'<br>';
	}

	for ($i = 20; $i > 10; $i--) { 
		echo $i.'<br>';
	}

	for ($x=0; $x <= 10; $x++) { 
		echo "The number is: $x <br>";
	}

	for ($i = 0; $i <= 10; $i++) { 
		echo "<tr><td>".$i."</tr></td>";
	}
?>
</table>