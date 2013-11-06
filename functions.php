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

?>
