<html>
<head>
<title>
	FAX Status - SMS based application for Fresno area public transport
</title>
</head>

<body>
<h1>
	FAX Status 
</h1>
Before php tag
<?php echo "Before inside php tag";?>
<?php
    include "configure.php";

    $con = mysql_connect($server, $username, $password);
    if (!$con) {
    	die('Could not connect: ' . mysql_error());
	}
	echo 'Connected successfully';
    mysql_select_db($db);

    $query = sprintf("SELECT firstname, lastname, address, age FROM friends 
    WHERE firstname='%s' AND lastname='%s'",
    mysql_real_escape_string($firstname),
    mysql_real_escape_string($lastname));

    $result = mysql_query($query);


	if (!$result) {
	    $message  = 'Invalid query: ' . mysql_error() . "\n";
	    $message .= 'Whole query: ' . $query;
	    die($message);
	}

	while ($row = mysql_fetch_assoc($result)) {
	    echo $row['firstname'];
	    echo $row['lastname'];
	    echo $row['address'];
	    echo $row['age'];
	}


	mysql_close($con);

?>
After php tag
</body>
</html>
<?php

?>