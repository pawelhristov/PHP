<?php
define("MY_NAME", "Pavel Hristov");
echo MY_NAME.'<br>';

define("GREETING", "Welcome to Bulgaria!");
echo GREETING.'<br>';

define("GREETING", "Welcome to Lovech!", true);
echo greeting.'<br>';

define("GREETINGG", "Welcome to W3Schools.com!");

function myTest() {
    echo GREETINGG;
}
 
myTest();


define("MY_NAMES", "Papi");

function myCount() {
	echo MY_NAMES;
}

myCount();
?>