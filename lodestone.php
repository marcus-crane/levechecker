<html>
<head>
	<title>Leve results</title>
	<style>
	#leveholder {
		float: left;
		display: inline-block;
		border: 1px solid black;
		padding: 5px;
		margin-right: 10px;
	}

	a {
		display: block;
		clear: both;
		padding-top: 20px;
	}
	</style>
	
</head>
<body>
	<?php 
	#$host="localhost"; // Host name
	#$user="thingsim_leves"; // Obvious username
	#$password="getoutofmydatabaseplease123#"; // Super secure test password
	#$db_name="thingsim_leves"; // Database name!

	#$con = mysql_connect("$host", "$user", "$password") or die ('Oops, you were not able to connect to the database!');
	#mysql_select_db("$db_name");

	include "api.php";

	$API = new LodestoneAPI();

	$Character = $API->get(array(
		"name" => "Erin Hazelwood",
		"server" => "Phoenix"
	));

	$name = $Character->getName();

	$server = $Character->getServer();

	$job = $Character->getActiveClass();

	$level = $Character->getActiveLevel();

	$city = $Character->getCity();

	$accuracy = $Character->getSlot('head');

	$gc = $Character->getCompanyName();

	$gcrank = $Character->getCompanyRank();

	print "<h1>" . $name . " of " . $server . "</h1>";
	print "<br />";
	print '<img src="'. $Character->getPortrait() .'" />';
	print "<br />";
	print "<br />";
	print "Current job is a Level " . $level . " " . ucwords($job);
	print "<br />";
	print "Hails from the City of " . $city;
	print "<br />";
	print "Is a member of " . $gc . " with the rank of " . $gcrank;

	#$class = $_POST['class'];
	#$level = $_POST['level'];

	#$sql = "SELECT * FROM leves WHERE class = '$class' AND level = '$level'";
	#$levedata = mysql_query($sql);

	#print "<h1>Level " . $level . " " . $class . " leves</h1>";
	#print "<br />";

	
	#while ($info = mysql_fetch_array($levedata)){
	#	print "<div id='leveholder'>";
	#		print "Title: " . $info['title'];
	#		print "<br />";
	#		print "EXP: " . $info['exp'];
	#		print "<br />";
	#		print "Gil: " . $info['gil'];
	#		print "<br />";
	#		print "<br />";
	#		print "Reward: " . $info['reward1qty'] . " " . $info['reward1'];
	#		print "<br />";
	#		if ($info['timelimit'] != '0') {
	#			print "<br />";
	#			print "Time Limit: " . $info['timelimit'] . " minutes";
	#		}
	#		print "<br />";
	#		if ($info['levetype'] != "Evaluation") {
	#			print "Required: " . $info['quantity'] . " x " . $info['itemrequired'];
	#			print "<br />";
	#			print "Leve Type: " . $info['levetype'];
	#			print "<br />";
	#		}
	#		else {
	#			print "Leve Type: " . $info['levetype'];
	#			print "<br />";
	#		}
	#		print "<br />";
	#		print "Deliver to " . $info['deliverynpc'] . " of ";
	#		if ($info['eorzeansuburb'] != '') {
	#			print $info['eorzeansuburb'] . ", ";
	#		}
	#		print "<br />";
	#		print $info['eorzeanarea'];
	#		print "<br />";
	#	print "</div>";
	#}
	
		#if (!$levedata) {
		#	print "<h1>That isn't a valid request, ya goof! Try again!</h1>";
		#}
		#print "<br />";
		#print "<br />";
	
	#print "<br />";
	#print "<br />";	
	#print "<a href='index.php'>Back</a>";

	?>
</body>
</html>