<?php
 
    include "configure.php";

    $con = mysql_connect($server, $username, $password);
    if (!$con) {
        die('Could not connect: ' . mysql_error());
    }
    mysql_select_db($db);

    $query = sprintf("INSERT INTO incomings (message, from_number, message_sid, type) VALUES ('%s','%s','%s', 'voice')",
    mysql_real_escape_string($_REQUEST["Body"]),
    mysql_real_escape_string($_REQUEST["From"]),
    mysql_real_escape_string($_REQUEST["CallSid"]));

    $result = mysql_query($query);


    if (!$result) {
        $message  = 'Invalid query: ' . mysql_error() . "\n";
        $message .= 'Whole query: ' . $query;
    }

    mysql_close($con);
 

    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
    <Say>Hello and Welcome to Fresno Transport Status system.</Say>
    <Gather numDigits="6" action="bus-code-handle.php" method="POST">
        <Say>Please enter the 6 digit bus stop to get next scheduled bus information.</Say>
    </Gather>
</Response>