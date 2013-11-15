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
            $message = "Please enter correct bus stop to get information. Check your bus stop where you at. - Developed by Fresno State Industrial Tech Graduate Student Kashyap.";
        }
        elseif (array_key_exists(0, $route_details) && $route_details[0] == '-1') {
            $message = "System is not working because of technical reasons. Please check back later. - Developed by Fresno State Industrial Tech Graduate Student Kashyap.";
        }
        else {

            $stop_details = get_bus_stop_details($route_details['bus_stop_id']);
            $stop_name = $stop_details['name'];

            $bus_detail = get_bus_details($route_details['bus_id']);
            $bus_number =  $bus_detail['number'];
            $bus_direction = $bus_detail['direction'];

            
            // $incoming_time = '2013-11-15 18:20:46';
            date_default_timezone_set('America/Los_Angeles');
            $format = '%d-%m-%Y %H:%M:%S';
            $incoming_time = strftime($format, strtotime("now"));

            $next_bus_times = get_next_buses($incoming_time,$stop_code, $route_details['id']);

            if($next_bus_times == -1) {
                $message = "System is not working because of technical reasons. Please check back later. - Developed by Fresno State Industrial Tech Graduate Student Kashyap.";
            }
            elseif($next_bus_times == 0) {
                $message = "You are at " . $stop_name . " and your next bus will be " . $bus_number . " " . $bus_direction . " TOMORROW. Last Bus has left." . " "." - Developed by Fresno State Industrial Tech Graduate Student Kashyap.";
            }
            else {
                
                $message = "You are at " . $stop_name . " and your next bus will be " . $bus_number . " " . $bus_direction . " at " . $next_bus_times . ". - Developed by Fresno State Industrial Tech Graduate Student Kashyap.";
            }

        }
    }
    else {
        /* Code required only to test functionality in GET */
        $stop_code = '404649';
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

            
            // $incoming_time = '2013-11-15 18:20:46';
            date_default_timezone_set('America/Los_Angeles');
            $format = '%d-%m-%Y %H:%M:%S';
            $incoming_time = strftime($format, strtotime("now"));

            $next_bus_times = get_next_buses($incoming_time,$stop_code, $route_details['id']);
            
            if($next_bus_times == -1) {
                $message = "System is not working because of technical reasons. Please check back later. - Developed by Fresno State Industrial Tech Graduate Student Kashyap.";
            }
            elseif($next_bus_times == 0) {
                $message = "You are at " . $stop_name . " and your next bus will be " . $bus_number . " " . $bus_direction . " TOMORROW. Last Bus has left." . " "." - Developed by Fresno State Industrial Tech Graduate Student Kashyap.";
            }
            else {
                
                $message = "You are at " . $stop_name . " and your next bus will be " . $bus_number . " " . $bus_direction . " at " . $next_bus_times . ". - Developed by Fresno State Industrial Tech Graduate Student Kashyap.";
            }
        }
        
        // $message .= " In order to receive your bus schedule you need to send the bus code via SMS. - Developed by Fresno State Industrial Tech Graduate Student Kashyap.";
    }
    mysql_close($con);

?>
<Response>
    <Message><?php echo $message; ?><?php // var_dump($route_details); ?></Message>
</Response>