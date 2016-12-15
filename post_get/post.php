<form action="post.php" method="post">
	<input type="text" name="login" />
	<input type="text" name="mail" />	
	<input type="submit" value="Go" />
</form>

<?php 
	echo '<pre>'.print_r($_POST,true).'</pre>';

?>