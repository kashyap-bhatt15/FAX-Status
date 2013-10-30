<?php
    
    include "configure.php";

    $con = mysql_connect($server, $username, $password);
    if (!$con) {
        die('Could not connect: ' . mysql_error());
    }
    echo 'Connected successfully';
    mysql_select_db($db);

    $_POST["Body"] = "message body";
    $_POST["From"] = "1212123434";
    $_POST["SmsSid"] = "231212121344355654654654";
    $query = sprintf("INSERT INTO incoming (message, from_number, message_sid) VALUES ('%s','%s','%s')",
    mysql_real_escape_string($_POST["Body"]),
    mysql_real_escape_string($_POST["From"]),
    mysql_real_escape_string($_POST["SmsSid"]));

//    echo $query;
//    echo "<hr>";
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
<?php
//    echo "end";
?>