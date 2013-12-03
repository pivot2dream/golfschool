<?php

$username = "name";
$password = "password";
$hostname = "localhost";	
$database = "database";

mysql_connect($hostname, $username, $password) or die(mysql_error());
mysql_select_db($database) or die(mysql_error()); 

?>