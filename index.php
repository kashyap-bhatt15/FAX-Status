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


	//$result = mysqli_query($con,"SELECT * FROM users");

	/*while($row = mysqli_fetch_array($result))
	{
		echo $row['id'] . " " . $row['username'];
		echo "<br>";
	}*/

	mysql_close($con);

?>
After php tag
</body>
</html>
<?php

?>