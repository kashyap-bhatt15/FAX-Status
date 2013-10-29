<?php
 
    // make an array of senders we know, indexed by phone number - Optional
    $people = array(
        "+14846320000" => "KPB",
    );
 
    // if the sender is known, then greet them by name
    if(!$name = $people[$_REQUEST['From']]) {
        $name = "";
    }
 
    // now greet the sender
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
    <Message>Hi,thanks for the message! FAX Status will be up soon.</Message>
</Response>