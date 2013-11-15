<html>
<head>
<title>
	FAX Status - SMS and Voice based application for Fresno area public transport
</title>
</head>

<body>
<h1>
	FAX Status 
</h1>
<b><u>Received text/call</b></u>
<?php
    include "configure.php";

    $con = mysql_connect($server, $username, $password);
    if (!$con) {
    	die('Could not connect: ' . mysql_error());
	}
    mysql_select_db($db);
		//SELECT CONVERT_TZ('2013-11-13 21:42:53','-00:00','-08:00')
    $query = sprintf("SELECT message, from_number, type, created_at, CONVERT_TZ(created_at,'-00:00','-08:00') as incoming_time FROM incomings ");
		// echo $query;
    $result = mysql_query($query);


	if (!$result) {
	    $message  = 'Invalid query: ' . mysql_error() . "\n";
	    $message .= 'Whole query: ' . $query;
	    die($message);
	}
	?>
	<table>
	<tr><th>Message Content</th><th>From Number</th><th>Type</th><th>Time in Server Zone</th><th>Time in PST</th></tr>
	<?php

	while ($row = mysql_fetch_assoc($result)) {
		echo "<tr>";
	    echo "<td>" . $row['message'] . "</td>";
	    echo "<td>" . $row['from_number'] . "</td>";
	    echo "<td>" . $row['type'] . "</td>";
	    echo "<td>" . $row['created_at'] . "</td>";
	    echo "<td>" . $row['incoming_time'] . "</td>";
	    echo "</tr>";
	}


	mysql_close($con);
	?>
	</table>
</body>
</html>
<?php

?>