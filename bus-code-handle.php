<?php
 
    // if the caller pressed anything but 1 send them back
    /*if($_REQUEST['Digits'] != '1') {
        header("Location: hello-monkey.php");
        die;
    }*/
     
    // the user pressed 1, connect the call to 310-555-1212 
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
    <Say>Schdule information system is not up yet. Please check back later. FAX status is developed by Kashyap.</Say>
</Response>