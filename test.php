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
	var_dump(get_route_details("626105"));
	echo "<hr>";
	
	$route_details = get_route_details("626105");
	
	var_dump(get_bus_stop_details($route_details['bus_stop_id']));
	echo "<hr>";
	echo (get_bus_stop_details($route_details['bus_stop_id'])['name']);
	echo "<hr>";
	$bus_details = get_bus_details($route_details['bus_id']);
	echo $bus_details['number'];
	echo $bus_details['direction'];
?>

<?php
	mysql_close($con);
?>