<?php
    
    include "configure.php";

    $con = mysql_connect($server, $username, $password);
    if (!$con) {
        die('Could not connect: ' . mysql_error());
    }
    mysql_select_db($db);

    $query = sprintf("INSERT INTO incoming (message, from_number, message_sid, type) VALUES ('%s','%s','%s', 'text')",
    mysql_real_escape_string($_POST["Body"]),
    mysql_real_escape_string($_POST["From"]),
    mysql_real_escape_string($_POST["SmsSid"]));

    $result = mysql_query($query);


    if (!$result) {
        $message  = 'Invalid query: ' . mysql_error() . "\n";
        $message .= 'Whole query: ' . $query;
    }

    mysql_close($con);
 

    // now reply the sender   
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
    <Message>Hi,thanks for the message! FAX Status will be up soon. Your message was received and recorded. Contact 484-632-5324 for more information</Message>
</Response>