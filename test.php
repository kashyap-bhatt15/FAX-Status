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
	echo "start<br>";
	var_dump(get_route_details("62610"));
	echo "<hr>";
	
	$route_details = get_route_details("626105");
	
	var_dump(get_bus_stop_details($route_details['bus_stop_id']));
	echo "<hr>";
	echo (get_bus_stop_details($route_details['bus_stop_id'])['name']);
	echo "<hr>";
	$bus_details = get_bus_details($route_details['bus_id']);
	echo $bus_details['number'];
	echo $bus_details['direction'];
	echo "<hr>";

	// $route_details = get_route_details('404649');
	$route_details = get_route_details('404649');
    

    if(array_key_exists(0, $route_details) && $route_details[0] == '0') {
        $message = "Please enter correct bus stop to get information. Check your bus stop where you at.";
    }
    elseif (array_key_exists(0, $route_details) && $route_details[0] == '-1') {
        $message = "System is not working because of technical reasons. Please check back later.";
    }
    else {
        $stop_name = get_bus_stop_details($route_details['bus_stop_id'])['name'];

        $bus_detail = get_bus_details($route_details['bus_id']);
        $bus_number =  $bus_detail['number'];
        $bus_direction = $bus_detail['direction'];
        $message = "You are at " . $stop_name . " and your next bus will be " . $bus_number . " " . $bus_direction . " and your schedule information system will be up soon.";
    }

    echo $message;
    echo "<hr>";
    var_dump($route_details);
?>

<?php
	mysql_close($con);
?>