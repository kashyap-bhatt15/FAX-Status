<?php

/*
	All the functions used through out the project lies here.
*/

/* Find bus stop details from stop code and return return stop id */
function get_stop_id_from_stop_code($stop_code) {
	
	$query = sprintf("SELECT id FROM bus_stops WHERE code = '%s'",
    mysql_real_escape_string($stop_code));

    $result = mysql_query($query);

    // echo "<hr>";
    if (!$result) {
        $message  = 'Invalid query: ' . mysql_error() . "\n";
        $message .= 'Whole query: ' . $query;
        return -1;
    }
    elseif (mysql_num_rows($result)==0) {
    	return 0;
    }
    else {
    	$row = mysql_fetch_row($result);
    	return $row[0];
    }
    // echo "<hr>";
}


// Assumption: Each stop has only one bus running.
// TODO: Implement if more than one bus visits the same bus stop
function get_route_id_from_stop_code($stop_code) {

	$query = sprintf("SELECT id FROM routes WHERE bus_stop_code = '%s'",
    mysql_real_escape_string($stop_code));
    
    $result = mysql_query($query);

    // echo "<hr>";
    if (!$result) {
        $message  = 'Invalid query: ' . mysql_error() . "\n";
        $message .= 'Whole query: ' . $query;
        return -1;
    }
    elseif (mysql_num_rows($result)==0) {
    	return 0;
    }
    else {
    	$row = mysql_fetch_row($result);
    	return $row[0];
    }
    // echo "<hr>";
}

function get_route_details($stop_code) {
    $query = sprintf("SELECT id, bus_stop_id, bus_id FROM routes WHERE bus_stop_code = '%s'",
        mysql_real_escape_string($stop_code));

    // echo "<queryPrint>" . $query . "</queryPrint>";

    $result = mysql_query($query);
    // echo $result;

    if (!$result) {
        $message  = 'Invalid query: ' . mysql_error() . "\n";
        $message .= 'Whole query: ' . $query;
        return array("-1");
    }
    elseif (mysql_num_rows($result)==0) {
        return array("0");
    }
    else {
        $row = mysql_fetch_assoc($result);
        return $row;
    }
}

function get_bus_stop_details($id) {
    $query = sprintf("SELECT location, latitude, longitude, name FROM bus_stops WHERE id = %s",
        mysql_real_escape_string($id));
    // echo $query;

    $result = mysql_query($query);

    if (!$result) {
        $message  = 'Invalid query: ' . mysql_error() . "\n";
        $message .= 'Whole query: ' . $query;
        return array("-1");
    }
    elseif (mysql_num_rows($result)==0) {
        return array("0");
    }
    else {
        $row = mysql_fetch_assoc($result);
        return $row;
    }
}

function get_bus_details($id) {
    $query = sprintf("SELECT number, direction FROM buses WHERE id = %s",
        mysql_real_escape_string($id));

    $result = mysql_query($query);

    if (!$result) {
        $message  = 'Invalid query: ' . mysql_error() . "\n";
        $message .= 'Whole query: ' . $query;
        return array("-1");
    }
    elseif (mysql_num_rows($result)==0) {
        return array("0");
    }
    else {
        $row = mysql_fetch_assoc($result);
        return $row;
    }

}

/* This function will return the next buses based on time and stop code. */
function get_next_buses($incoming_time, $stop_code, $route_id) {
    // echo "In get_next_buses Function<hr>";
    $time = date("H:i",strtotime($incoming_time));
    $query_time = "2000-01-01 " . $time . ":00";
    
    $query = sprintf("SELECT time, route_id FROM schedules_weekday WHERE route_id = %s AND (TIMEDIFF (time, '%s' ) ) > 0 ORDER BY (TIMEDIFF (time, '%s') ) ASC LIMIT 3",
        mysql_real_escape_string($route_id),
        mysql_real_escape_string($query_time),
        mysql_real_escape_string($query_time));

    //echo $query;

    $result = mysql_query($query);
    if (!$result) {
        $message  = 'Invalid query: ' . mysql_error() . "\n";
        $message .= 'Whole query: ' . $query;
        return (-1);
    }
    elseif (mysql_num_rows($result)==0) {
        return 0;
    }
    else {
        $message_times = array();
        while ($row = mysql_fetch_assoc($result)) {
            array_push($message_times, date("H:i",strtotime($row['time'])));
        }
        $bus_times = implode(", ", $message_times);

        return $bus_times;
    }


}

?>
