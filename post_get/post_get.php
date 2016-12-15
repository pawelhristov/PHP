<form action="post_get.php" method="get">
	<input type="text" name="login" />
	<input type="text" name="mail" />	
	<input type="submit" value="Go" />
</form>

<?php 
	echo $_GET['login'].'<br>';
	echo $_GET['mail'];

	echo '<pre>'.print_r($_GET,true).'</pre>';
?>