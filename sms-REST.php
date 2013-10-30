<head>
    Sends SMS
</head>
<?php
    
    require "Services/Twilio.php";
    include "configure.php";

    // Instantiate a new Twilio Rest Client
    $client = new Services_Twilio($AccountSid, $AuthToken);
 
    
    $people = array(
        "+14846325324" => "KPB",
    );
 
    foreach ($people as $number => $name) {
 
        $sms = $client->account->messages->sendMessage(
 
        // 'From' number below is a valid Twilio number 
            "559-478-2871", 
 
            // the number we are sending to - Any phone number
            $number,
 
            // the sms body
            "Hey $name, FAX Status by SMS will be up soon!"
        );
 
        // Display a confirmation message on the screen
        echo "Sent message to $name <br>";
    }