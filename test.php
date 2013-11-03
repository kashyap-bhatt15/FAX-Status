<?php
    include "configure.php";

	$con = mysql_connect($server, $username, $password);
    if (!$con) {
    	die('Could not connect: ' . mysql_error());
	}
    mysql_select_db($db);
?>

<?php
	include "configure.php";
	include "functions.php";

	echo get_stop_id_from_stop_code("404649");
	echo "<hr>";
	echo get_route_id_from_stop_code("404649");
	echo "<hr>";
?>

<?php
	mysql_close($con);
?>