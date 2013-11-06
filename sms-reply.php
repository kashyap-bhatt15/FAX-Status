<?php
    
    include "configure.php";
    include "functions.php";

    // Declare response type as XML
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";

    $message = "";
    $con = mysql_connect($server, $username, $password);
    if (!$con) {
        die('Could not connect: ' . mysql_error());
    }
    mysql_select_db($db);

    if($_SERVER['REQUEST_METHOD'] === 'POST')
    {
/*        $message = "";
        $con = mysql_connect($server, $username, $password);
        if (!$con) {
            die('Could not connect: ' . mysql_error());
        }
        mysql_select_db($db);
*/
        $type = "text";

        $query = sprintf("INSERT INTO incomings (message, from_number, message_sid, type) VALUES ('%s','%s','%s', '%s')",
        mysql_real_escape_string($_POST["Body"]),
        mysql_real_escape_string($_POST["From"]),
        mysql_real_escape_string($_POST["SmsSid"]),
        mysql_real_escape_string($type));

        $result = mysql_query($query);


        if (!$result) {
            $message  = 'Invalid query: ' . mysql_error() . "\n";
            $message .= 'Whole query: ' . $query;
        }

        /* Code  for removing spaces and getting Stop code */
        $stop_code = preg_replace('/\s+/', '', $_POST["Body"]);

        $route_details = get_route_details($stop_code);
        if(array_key_exists(0, $route_details) && $route_details[0] == '0') {
            $message = "Please enter correct bus stop to get information. Check your bus stop where you at.";
        }
        elseif (array_key_exists(0, $route_details) && $route_details[0] == '-1') {
            $message = "System is not working because of technical reasons. Please check back later.";
        }
        else {
            $stop_details = get_bus_stop_details($route_details['bus_stop_id']);
            $stop_name = $stop_details['name'];

            $bus_detail = get_bus_details($route_details['bus_id']);
            $bus_number =  $bus_detail['number'];
            $bus_direction = $bus_detail['direction'];
            $message = "You are at " . $stop_name . " and your next bus will be " . $bus_number . " " . $bus_direction . " and your schedule information system will be up soon.";
        }
    }
    else {
        /* Code required only to test functionality in GET
        $route_details = get_route_details('404649');
    
        if(array_key_exists(0, $route_details) && $route_details[0] == '0') {
            $message = "Please enter correct bus stop to get information. Check your bus stop where you at.";
        }
        elseif (array_key_exists(0, $route_details) && $route_details[0] == '-1') {
            $message = "System is not working because of technical reasons. Please check back later.";
        }
        else {
            $stop_details = get_bus_stop_details($route_details['bus_stop_id']);
            $stop_name = $stop_details['name'];

            $bus_detail = get_bus_details($route_details['bus_id']);
            $bus_number =  $bus_detail['number'];
            $bus_direction = $bus_detail['direction'];
            $message = "You are at " . $stop_name . " and your next bus will be " . $bus_number . " " . $bus_direction . " and your schedule information system will be up soon.";
        }
        */
        $message .= " In order to receive your bus schedule you need to send the bus code via SMS.";
    }
    mysql_close($con);

?>
<Response>
    <Message><?php echo $message; ?><?php // var_dump($route_details); ?></Message>
</Response>