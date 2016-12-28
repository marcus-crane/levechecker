<?php 
	$host="localhost"; // Host name
	$user="thingsim_leves"; // Obvious username
	$password="getoutofmydatabaseplease123#"; // Super secure test password
	$db_name="thingsim_leves"; // Database name!

	$con = mysql_connect("$host", "$user", "$password") or die ('Oops, you were not able to connect to the database!');
	mysql_select_db("$db_name");
?>