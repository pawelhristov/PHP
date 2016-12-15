<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Friends</title>
</head>
<body>
	<?php
	if ($_SESSION['is_logged']==true) {
		echo '<a href="logout.php">Logout</a> | <a href="add.php">Add</a><br>';
		$friends=file('data.txt');
		echo '<table border=1>
			<tr><td>Name</td><td>Email</td><td>Phone</td></tr>';
		foreach ($friends as $value) 
		{
			$tmp=explode(';', $value);
			foreach ($tmp as $vvalue) 
			{
				$tmp2=explode(':', $vvalue);
				if ($tmp2[0]=='name')
				{
					$name=$tmp2[1];
				}
				elseif ($tmp2[0]=='email')
				{
					$email=$tmp2[1];
				}
				elseif ($tmp2[0]=='mobile')
				{
					$phone=$tmp2[1];
				}
			}
			echo '<tr><td>'.$name.'</td><td>'.$email.'</td><td>'.$phone.'</td></tr>';
		}	

		echo '</table>';
	}
	else {

		if ($_GET['error']==1) {
			echo "wrong user name or password";
		}

	    ?>
		<form method="post" action=login.php>
			Username:<input type="text" name="login"/>
			Password:<input type="password" name="pass"/>
			<input type="submit" value="Login"/>
		</form>
		<?php
	}
	?>
</body>
</html>