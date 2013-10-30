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
<b><u> List of SMS received</b></u>
<?php
    include "configure.php";

    $con = mysql_connect($server, $username, $password);
    if (!$con) {
    	die('Could not connect: ' . mysql_error());
	}
    mysql_select_db($db);

    $query = sprintf("SELECT message, from_number FROM incoming ");
    /*
    WHERE firstname='%s' AND lastname='%s'",
    mysql_real_escape_string($firstname),
    mysql_real_escape_string($lastname));
	*/
    $result = mysql_query($query);


	if (!$result) {
	    $message  = 'Invalid query: ' . mysql_error() . "\n";
	    $message .= 'Whole query: ' . $query;
	    die($message);
	}
	?>
	<table>
	<tr><th>Message Content</th><th>From Number</th></tr>
	<?php

	while ($row = mysql_fetch_assoc($result)) {
		echo "<tr>";
	    echo "<td>" . $row['message'] . "</td>";
	    echo "<td>" . $row['from_number'] . "</td>";
	    echo "</tr>";
	}


	mysql_close($con);
	?>
	</table>
</body>
</html>
<?php

?>