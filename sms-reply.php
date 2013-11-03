<?php
    
    include "configure.php";
    include "functions.php";

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
    $stop_id = get_stop_id_from_stop_code($_POST["Body"]);



    mysql_close($con);
 

    // now reply the sender   
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
    <Message><?php echo $stop_id ?>Hi,thanks for the message! FAX Status will be up soon. Your message was received and recorded. Contact 484-632-5324 for more information</Message>
</Response>

<!--
<?php
/*
<?php
    
    include "configure.php";
    include "functions.php"

    $con = mysql_connect($server, $username, $password);
    if (!$con) {
        die('Could not connect: ' . mysql_error());
    }
    mysql_select_db($db);

    $query = sprintf("INSERT INTO incomings (message, from_number, message_sid, type) VALUES ('%s','%s','%s', 'text')",
    mysql_real_escape_string($_POST["Body"]),
    mysql_real_escape_string($_POST["From"]),
    mysql_real_escape_string($_POST["SmsSid"]));

    $result = mysql_query($query);


    if (!$result) {
        $message  = 'Invalid query: ' . mysql_error() . "\n";
        $message .= 'Whole query: ' . $query;
    }

  
    $stop_code = preg_replace('/\s+/', '', $_POST["Body"]);
    $stop_id = get_stop_id_from_stop_code($stop_code);
    if ($stop_id == -1) {
        $message = "System is not working because of technical reasons. Please check back later.";
    }
    elseif($stop_id = 0) {
        $message = "Please enter correct bus stop to get information. Check your bus stop where you at.";
    }
    else {
        $message = "You are at " . $stop_id . ". Next " . "bus (bus number)" . "will arrive shortly";
    }

    mysql_close($con);
 

    // now reply the sender   
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
    */
?>-->