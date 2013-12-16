<?php
	include "../configure.php";
	
	$con = mysql_connect($server, $username, $password);
    if (!$con) {
    	die('Could not connect: ' . mysql_error());
	}
  mysql_select_db($db);


	/* Each loops represents 1 bus stop on particular route 
	   In this case 9 East
	*/
	echo "For Brawley & Shields Route Id: 141 - 9 East";
  $query1 = "INSERT INTO schedules_weekday (route_id, time) VALUES (1, '2000-01-01 ". "05:40:00"."')";
  mysql_query($query1);

	$query2 = "INSERT INTO schedules_weekday (route_id, time) VALUES (1, '2000-01-01 ". "06:10:00"."')";
	mysql_query($query2);

	$query3 = "INSERT INTO schedules_weekday (route_id, time) VALUES (1, '2000-01-01 ". "06:40:00"."')";
	mysql_query($query3);

	for($j = 7; $j <= 20; $j++) {
		$query2 = "INSERT INTO schedules_weekday (route_id, time) VALUES (1, '2000-01-01 ". $j . ":08:00"."')";
		mysql_query($query2);
		
		if(($j != 18) || ($j != 19) || ($j != 20)) {
			$query3 = "INSERT INTO schedules_weekday (route_id, time) VALUES (1, '2000-01-01 ". $j . ":38:0"."')";
			mysql_query($query3);
		}
	}
	$query6 = "INSERT INTO schedules_weekday (route_id, time) VALUES (1, '2000-01-01 ". "21:00:00"."')";
	mysql_query($query6);

	echo "<hr>";

/*
 ****************************************************************************************************************************
*/
 	echo "For Shaw & Brawley Route Id: 151 - 9 East";
  $query1 = "INSERT INTO schedules_weekday (route_id, time) VALUES (1, '2000-01-01 ". "05:57:00"."')";
  mysql_query($query1);

	$query2 = "INSERT INTO schedules_weekday (route_id, time) VALUES (1, '2000-01-01 ". "06:27:00"."')";
	mysql_query($query2);

	$query3 = "INSERT INTO schedules_weekday (route_id, time) VALUES (1, '2000-01-01 ". "06:57:00"."')";
	mysql_query($query3);

	for($j = 7; $j <= 20; $j++) {
		$query2 = "INSERT INTO schedules_weekday (route_id, time) VALUES (1, '2000-01-01 ". $j . ":28:00"."')";
		mysql_query($query2);
		
		if(($j != 18) || ($j != 19) || ($j != 20)) {
			$query3 = "INSERT INTO schedules_weekday (route_id, time) VALUES (1, '2000-01-01 ". $j . ":58:0"."')";
			mysql_query($query3);
		}
	}
	$query6 = "INSERT INTO schedules_weekday (route_id, time) VALUES (1, '2000-01-01 ". "21:20:00"."')";
	mysql_query($query6);

	echo "<hr>";

/*
 ****************************************************************************************************************************
*/
 	
  echo "For Shaw & West Route Id: 161 - 9 East";
  $query1 = "INSERT INTO schedules_weekday (route_id, time) VALUES (1, '2000-01-01 ". "06:03:00"."')";
  mysql_query($query1);

	$query2 = "INSERT INTO schedules_weekday (route_id, time) VALUES (1, '2000-01-01 ". "06:33:00"."')";
	mysql_query($query2);

	$query3 = "INSERT INTO schedules_weekday (route_id, time) VALUES (1, '2000-01-01 ". "07:03:00"."')";
	mysql_query($query3);

	$query3 = "INSERT INTO schedules_weekday (route_id, time) VALUES (1, '2000-01-01 ". "07:35:00"."')";
	mysql_query($query3);

	for($j = 8; $j <= 20; $j++) {
		if(($j != 19) || ($j != 20)) {
			$query2 = "INSERT INTO schedules_weekday (route_id, time) VALUES (1, '2000-01-01 ". $j . ":05:00"."')";
			mysql_query($query2);
		}
		
		$query3 = "INSERT INTO schedules_weekday (route_id, time) VALUES (1, '2000-01-01 ". $j . ":35:0"."')";
		mysql_query($query3);
	}
	$query6 = "INSERT INTO schedules_weekday (route_id, time) VALUES (1, '2000-01-01 ". "21:27:00"."')";
	mysql_query($query6);

	echo "<hr>";


/*
 ****************************************************************************************************************************
*/

  echo "For Shaw & Black Stone Route Id: 171 - 9 East";
  $query1 = "INSERT INTO schedules_weekday (route_id, time) VALUES (1, '2000-01-01 ". "06:15:00"."')";
  mysql_query($query1);

	$query2 = "INSERT INTO schedules_weekday (route_id, time) VALUES (1, '2000-01-01 ". "06:45:00"."')";
	mysql_query($query2);

	$query3 = "INSERT INTO schedules_weekday (route_id, time) VALUES (1, '2000-01-01 ". "07:15:00"."')";
	mysql_query($query3);

	$query3 = "INSERT INTO schedules_weekday (route_id, time) VALUES (1, '2000-01-01 ". "07:35:00"."')";
	mysql_query($query3);

	for($j = 7; $j <= 20; $j++) {
		if(($j != 7) || ($j != 19) || ($j != 20)) {
			$query2 = "INSERT INTO schedules_weekday (route_id, time) VALUES (1, '2000-01-01 ". $j . ":18:00"."')";
			mysql_query($query2);
		}
		
		$query3 = "INSERT INTO schedules_weekday (route_id, time) VALUES (1, '2000-01-01 ". $j . ":48:0"."')";
		mysql_query($query3);
	}
	$query6 = "INSERT INTO schedules_weekday (route_id, time) VALUES (1, '2000-01-01 ". "21:40:00"."')";
	mysql_query($query6);

	echo "<hr>";


/*
 ****************************************************************************************************************************
*/

	mysql_close($con);
?>