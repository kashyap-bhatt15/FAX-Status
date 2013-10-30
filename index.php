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

    $con = mysqli_connect($server, $username, $password, $db);
            
    echo $db;
    // mysql_select_db($db);
    if (mysqli_connect_errno($con)) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	else {
		echo "Connected";
	}
	echo "<hr>";
	//$result = mysqli_query($con,"SELECT * FROM users");

	/*while($row = mysqli_fetch_array($result))
	{
		echo $row['id'] . " " . $row['username'];
		echo "<br>";
	}*/

	mysqli_close($con);

?>
After php tag
</body>
</html>
<?php

?>