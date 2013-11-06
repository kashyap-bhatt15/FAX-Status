<?php
    
    include "configure.php";
    include "functions.php";

    if($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        $message = "";
        $con = mysql_connect($server, $username, $password);
        if (!$con) {
            die('Could not connect: ' . mysql_error());
        }
        mysql_select_db($db);
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
        if($route_details[0] == '0') {
            $message = "Please enter correct bus stop to get information. Check your bus stop where you at.";
        }
        elseif ($route_details[0] == '-1') {
            $message = "System is not working because of technical reasons. Please check back later.";
        }
        else {
            $stop_name = get_bus_stop_details($route_details['bus_stop_id'])['name'];

            $bus_detail = get_bus_details($route_details['bus_id']);
            $bus_number =  $bus_detail['number'];
            $bus_direction = $bus_detail['direction'];
            $message = "You are at " . $stop_name . " and your next bus will be " . $bus_number . " " . $bus_direction;
        }

        /* $stop_id = get_stop_id_from_stop_code($stop_code);
        
        if ($stop_id == -1) {
            $message = "System is not working because of technical reasons. Please check back later.";
        }
        elseif($stop_id == 0) {
            $message = "Please enter correct bus stop to get information. Check your bus stop where you at.";
        }
        else {
            $message = "You are at " . $stop_id . ". Next " . "bus (bus number)" . "will arrive shortly";
        }
        */

        mysql_close($con);
    }
    else {
        $message = "In order to receive your bus schedule you need to send the bus code.";
    }

    // now reply the sender   
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
    <Message><?php echo $message; ?></Message>
</Response>