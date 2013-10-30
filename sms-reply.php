<?php
    
    include "configure.php";

    $con = mysql_connect($server, $username, $password);
    if (!$con) {
        die('Could not connect: ' . mysql_error());
    }
    echo 'Connected successfully';
    mysql_select_db($db);

    /* 
        INSERT INTO table_name (column1,column2,column3,...)
        VALUES (value1,value2,value3,...);
    */

    $query = sprintf("INSERT INTO incoming (message, from, message_sid, created_at)
    VALUES ('%s','%s','%s', '%s')",
    mysql_real_escape_string($_POST["Body"]),
    mysql_real_escape_string($_POST["From"]),
    mysql_real_escape_string($_POST["SmsSid"]),
    mysql_real_escape_string(date(DATE_RFC2822);));

    $result = mysql_query($query);


    if (!$result) {
        $message  = 'Invalid query: ' . mysql_error() . "\n";
        $message .= 'Whole query: ' . $query;
    }

    mysql_close($con);
 
    //echo 'Hello ' . htmlspecialchars($_POST["Body"]) . '!';

    // now reply the sender
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
    <Message>Hi,thanks for the message! FAX Status will be up soon. Your message was <?php echo $_POST["Body"] ?></Message>
</Response>