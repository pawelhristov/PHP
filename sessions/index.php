<?php
session_start();

$_SESSION['a'] = 'PAPI BABY';
$_SESSION['count']++;
echo $_SESSION['count'];
if ($_SESSION['count']>5) {
	session_destroy();
}

echo '<br>';
?>

<a href="my.php">Go</a>
