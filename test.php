<h2>To Do Things: </h2>
<ol>
	<li>Create a Report and submit for progress so far.</li>
	<li>Do it for 38 North and Route 9 Both Directions</li>
	<li>Differentiate between Weekday and Weekend Schedules.</li>
	<li>If there is no bus left for the day then return them with First 3 bus times of next day.</li>
	<li>Find other scenarios/errors in add it to this list.</li>
</ol>
<hr>
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

	$stop_code = '404649';
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
    echo "<hr>";
    $incoming_time = '2013-11-15 18:20:46';
    echo $time = date("H:i",strtotime($incoming_time));
    echo "<hr>";
    echo $day = date("l",strtotime($incoming_time));
    $next_bus_times = get_next_buses($incoming_time,$stop_code, $route_details['id']);
    

    echo "<hr>";
    echo $next_bus_times;

    echo "<hr>";
    echo strtotime("now"), "\n";
    print_r(gettimeofday());
    echo "<hr>";
    if (($timestamp = strtotime("now")) === false) {
    	echo "The string is bogus";
		} else {
    	echo "now() == " . date('l dS \o\f F Y h:i:s A', $timestamp);
		}
    echo "<hr>";
    date_default_timezone_set('America/Los_Angeles');
		$format = '%d-%m-%Y %H:%M:%S';
		$strf = strftime($format, strtotime("now"));
		echo $strf;


?>

<?php
	mysql_close($con);
?>