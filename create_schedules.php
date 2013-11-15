<?php
	include "configure.php";
	
	$con = mysql_connect($server, $username, $password);
    if (!$con) {
    	die('Could not connect: ' . mysql_error());
	}
  mysql_select_db($db);


	/* Each loops represents 1 bus stop on particular route 
	   In this case 38 South
	*/
	/* For Blackstone El Paso Route Id: 1 - 38 South */
  $query1 = "INSERT INTO schedules_weekday (route_id, time) VALUES (1, '2000-01-01 ". "05:46:00"."')";
  mysql_query($query1);
	for($j = 6; $j <= 18; $j++) {
		$query2 = "INSERT INTO schedules_weekday (route_id, time) VALUES (1, '2000-01-01 ". $j . ":06:00"."')";
		mysql_query($query2);
		if($j != 18) {
			$query3 = "INSERT INTO schedules_weekday (route_id, time) VALUES (1, '2000-01-01 ". $j . ":26:0"."')";
			mysql_query($query3);
		}
		$query4 = "INSERT INTO schedules_weekday (route_id, time) VALUES (1, '2000-01-01 ". $j . ":46:00"."')";
		mysql_query($query4);
	}
	$query5 = "INSERT INTO schedules_weekday (route_id, time) VALUES (1, '2000-01-01 ". "19:36:00"."')";
	mysql_query($query5);
	$query6 = "INSERT INTO schedules_weekday (route_id, time) VALUES (1, '2000-01-01 ". "20:38:00"."')";
	mysql_query($query6);

	echo "<hr>";

/*
 ****************************************************************************************************************************
*/
 	/* For Herndon Cedar Route Id: 11 - 38 South  */
  $query1 = "INSERT INTO schedules_weekday (route_id, time) VALUES (11, '2000-01-01 ". "05:57:00"."')";
  mysql_query($query1);
	for($j = 6; $j <= 18; $j++) {
		$query2 = "INSERT INTO schedules_weekday (route_id, time) VALUES (11, '2000-01-01 ". $j . ":17:00"."')";
		mysql_query($query2);
		if($j != 18) {
			$query3 = "INSERT INTO schedules_weekday (route_id, time) VALUES (11, '2000-01-01 ". $j . ":37:0"."')";
			mysql_query($query3);
		}
		$query4 = "INSERT INTO schedules_weekday (route_id, time) VALUES (11, '2000-01-01 ". $j . ":57:00"."')";
		mysql_query($query4);
	}
	$query5 = "INSERT INTO schedules_weekday (route_id, time) VALUES (11, '2000-01-01 ". "19:46:00"."')";
	mysql_query($query5);
	$query6 = "INSERT INTO schedules_weekday (route_id, time) VALUES (11, '2000-01-01 ". "20:47:00"."')";
	mysql_query($query6);

	echo "<hr>";

/*
 ****************************************************************************************************************************
*/
 	
 	/* For Cedar Shaw Route Id: 21 - 38 South  */
	for($j = 6; $j <= 18; $j++) {
		$query1 = "INSERT INTO schedules_weekday (route_id, time) VALUES (21, '2000-01-01 ". $j . ":06:00"."')";
		mysql_query($query1);		
		$query2 = "INSERT INTO schedules_weekday (route_id, time) VALUES (21, '2000-01-01 ". $j . ":26:00"."')";
		mysql_query($query2);
		if ($j != 18) {
			$query3 = "INSERT INTO schedules_weekday (route_id, time) VALUES (21, '2000-01-01 ". $j . ":46:00"."')";
			mysql_query($query3);
		}
	}
	$query4 = "INSERT INTO schedules_weekday (route_id, time) VALUES (21, '2000-01-01 ". "19:06:00"."')";
	mysql_query($query4);
	$query5 = "INSERT INTO schedules_weekday (route_id, time) VALUES (21, '2000-01-01 ". "19:54:00"."')";
	mysql_query($query5);
	$query6 = "INSERT INTO schedules_weekday (route_id, time) VALUES (21, '2000-01-01 ". "20:53:00"."')";
	mysql_query($query6);

	echo "<hr>";

/*
 ****************************************************************************************************************************
*/

	/* For Cedar Shields Route Id: 31 - 38 South  */
	for($j = 6; $j <= 18; $j++) {
		$query1 = "INSERT INTO schedules_weekday (route_id, time) VALUES (31, '2000-01-01 ". $j . ":15:00"."')";
		mysql_query($query1);
		$query2 = "INSERT INTO schedules_weekday (route_id, time) VALUES (31, '2000-01-01 ". $j . ":35:00"."')";
		mysql_query($query2);
		if ($j != 18) {
			$query3 = "INSERT INTO schedules_weekday (route_id, time) VALUES (31, '2000-01-01 ". $j . ":55:00"."')";
			mysql_query($query3);
		}
	}
	$query4 = "INSERT INTO schedules_weekday (route_id, time) VALUES (31, '2000-01-01 ". "19:15:00"."')";
	mysql_query($query4);
	$query5 = "INSERT INTO schedules_weekday (route_id, time) VALUES (31, '2000-01-01 ". "20:01:00"."')";
	mysql_query($query5);
	$query6 = "INSERT INTO schedules_weekday (route_id, time) VALUES (31, '2000-01-01 ". "21:00:00"."')";
	mysql_query($query6);

	echo "<hr>";

/*
 ****************************************************************************************************************************
*/

	/* For Cedar Ventura Route Id: 41 - 38 South  */
	for($j = 6; $j <= 18; $j++) {
		if ($j != 6) {
			$query1 = "INSERT INTO schedules_weekday (route_id, time) VALUES (41, '2000-01-01 ". $j . ":10:00"."')";
			mysql_query($query1);
		}
		
		$query2 = "INSERT INTO schedules_weekday (route_id, time) VALUES (41, '2000-01-01 ". $j . ":30:00"."')";
		mysql_query($query2);
			
		$query3 = "INSERT INTO schedules_weekday (route_id, time) VALUES (41, '2000-01-01 ". $j . ":50:00"."')";
		mysql_query($query3);
		
	}
	$query4 = "INSERT INTO schedules_weekday (route_id, time) VALUES (41, '2000-01-01 ". "19:30:00"."')";
	mysql_query($query4);
	$query5 = "INSERT INTO schedules_weekday (route_id, time) VALUES (41, '2000-01-01 ". "20:13:00"."')";
	mysql_query($query5);
	$query6 = "INSERT INTO schedules_weekday (route_id, time) VALUES (41, '2000-01-01 ". "21:10:00"."')";
	mysql_query($query6);

	echo "<hr>";

/*
 ****************************************************************************************************************************
*/

	/* For Cedar Jenson Route Id: 51 - 38 South  */
	for($j = 6; $j <= 18; $j++) {
		if ($j != 6) {
			$query1 = "INSERT INTO schedules_weekday (route_id, time) VALUES (51, '2000-01-01 ". $j . ":18:00"."')";
			mysql_query($query1);
		}
		
		$query2 = "INSERT INTO schedules_weekday (route_id, time) VALUES (51, '2000-01-01 ". $j . ":38:00"."')";
		mysql_query($query2);
		
		$query3 = "INSERT INTO schedules_weekday (route_id, time) VALUES (51, '2000-01-01 ". $j . ":58:00"."')";
		mysql_query($query3);
		
	}
	$query4 = "INSERT INTO schedules_weekday (route_id, time) VALUES (51, '2000-01-01 ". "19:38:00"."')";
	mysql_query($query4);
	$query5 = "INSERT INTO schedules_weekday (route_id, time) VALUES (51, '2000-01-01 ". "20:19:00"."')";
	mysql_query($query5);
	$query6 = "INSERT INTO schedules_weekday (route_id, time) VALUES (51, '2000-01-01 ". "21:15:00"."')";
	mysql_query($query6);
	
	echo "<hr>";

/*
 ****************************************************************************************************************************
*/

	/* For Hinton Center Route Id: 61 - 38 South  */
	$query1 = "INSERT INTO schedules_weekday (route_id, time) VALUES (61, '2000-01-01 ". "06:53:00"."')";
	$result = mysql_query($query1);
	for($j = 7; $j <= 19; $j++) {	
		$query2 = "INSERT INTO schedules_weekday (route_id, time) VALUES (61, '2000-01-01 ". $j . ":13:00"."')";
		mysql_query($query2);
		if ($j != 19) {
			$query3 = "INSERT INTO schedules_weekday (route_id, time) VALUES (61, '2000-01-01 ". $j . ":33:00"."')";
			mysql_query($query3);
		}
			
		$query4 = "INSERT INTO schedules_weekday (route_id, time) VALUES (61, '2000-01-01 ". $j . ":53:00"."')";
		$result = mysql_query($query4);

	}

	$query5 = "INSERT INTO schedules_weekday (route_id, time) VALUES (61, '2000-01-01 ". "20:13:00"."')";
	mysql_query($query5);
	$query6 = "INSERT INTO schedules_weekday (route_id, time) VALUES (61, '2000-01-01 ". "21:10:00"."')";
	mysql_query($query6);

	echo "<hr>";

/*
 ****************************************************************************************************************************
*/

	mysql_close($con);
?>