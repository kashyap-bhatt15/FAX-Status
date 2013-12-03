<?php
	include "../configure.php";
	
	$con = mysql_connect($server, $username, $password);
    if (!$con) {
    	die('Could not connect: ' . mysql_error());
	}
  mysql_select_db($db);


	/* Each loops represents 1 bus stop on particular route 
	   In this case 38 South
	*/
	echo "For Blackstone El Paso Route Id: 1 - 38 South";
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
 	echo "For Herndon Cedar Route Id: 11 - 38 South";
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
 	
 	echo "For Cedar Shaw Route Id: 21 - 38 South";
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

	echo "For Cedar Shields Route Id: 31 - 38 South";
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

	echo "For Cedar Ventura Route Id: 41 - 38 South";
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

	echo "For Cedar Jenson Route Id: 51 - 38 South";
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

	echo "For Hinton Center Route Id: 61 - 38 South";
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

	$query5 = "INSERT INTO schedules_weekday (route_id, time) VALUES (61, '2000-01-01 ". "20:30:00"."')";
	mysql_query($query5);
	$query6 = "INSERT INTO schedules_weekday (route_id, time) VALUES (61, '2000-01-01 ". "21:27:00"."')";
	mysql_query($query6);

	echo "<hr>";

/*
 ****************************************************************************************************************************
*/
/*
---------------------------------------------------------------------------------------------------------------------------------------------------
*/
/* Each loops represents 1 bus stop on particular route 
	   In this case 38 North
	*/
	echo "For Shelter B Route Id: 71 - 38 North";
  $query1 = "INSERT INTO schedules_weekday (route_id, time) VALUES (71, '2000-01-01 ". "05:45:00"."')";
  mysql_query($query1);
	for($j = 6; $j <= 17; $j++) {
		$query2 = "INSERT INTO schedules_weekday (route_id, time) VALUES (71, '2000-01-01 ". $j . ":15:00"."')";
		mysql_query($query2);
		
		$query3 = "INSERT INTO schedules_weekday (route_id, time) VALUES (71, '2000-01-01 ". $j . ":35:0"."')";
		mysql_query($query3);
		
		$query4 = "INSERT INTO schedules_weekday (route_id, time) VALUES (71, '2000-01-01 ". $j . ":55:00"."')";
		mysql_query($query4);
	}
	$query5 = "INSERT INTO schedules_weekday (route_id, time) VALUES (71, '2000-01-01 ". "18:15:00"."')";
	mysql_query($query5);
	$query6 = "INSERT INTO schedules_weekday (route_id, time) VALUES (71, '2000-01-01 ". "19:15:00"."')";
	mysql_query($query6);
	$query7 = "INSERT INTO schedules_weekday (route_id, time) VALUES (71, '2000-01-01 ". "20:15:00"."')";
	mysql_query($query7);
	$query8 = "INSERT INTO schedules_weekday (route_id, time) VALUES (71, '2000-01-01 ". "20:45:00"."')";
	mysql_query($query8);

	echo "<hr>";

/*
 ****************************************************************************************************************************
*/

  echo "For Hinton Center Route Id: 81 - 38 North";
  $query1 = "INSERT INTO schedules_weekday (route_id, time) VALUES (81, '2000-01-01 ". "05:56:00"."')";
  mysql_query($query1);
	for($j = 6; $j <= 18; $j++) {
		if ($j != 6) {
			$query2 = "INSERT INTO schedules_weekday (route_id, time) VALUES (81, '2000-01-01 ". $j . ":06:00"."')";
			mysql_query($query2);
		}
		
		$query3 = "INSERT INTO schedules_weekday (route_id, time) VALUES (81, '2000-01-01 ". $j . ":26:0"."')";
		mysql_query($query3);
		
		if($j != 18) {
			$query4 = "INSERT INTO schedules_weekday (route_id, time) VALUES (81, '2000-01-01 ". $j . ":46:00"."')";
			mysql_query($query4);
		}
	}
	$query5 = "INSERT INTO schedules_weekday (route_id, time) VALUES (81, '2000-01-01 ". "19:26:00"."')";
	mysql_query($query5);
	$query6 = "INSERT INTO schedules_weekday (route_id, time) VALUES (81, '2000-01-01 ". "20:26:00"."')";
	mysql_query($query6);
	$query7 = "INSERT INTO schedules_weekday (route_id, time) VALUES (81, '2000-01-01 ". "20:54:00"."')";
	mysql_query($query7);

	echo "<hr>";

/*
 ****************************************************************************************************************************
*/
	echo "For Cedar Jenson Route Id: 91 - 38 North";
  $query1 = "INSERT INTO schedules_weekday (route_id, time) VALUES (91, '2000-01-01 ". "06:10:00"."')";
  mysql_query($query1);
  $query1 = "INSERT INTO schedules_weekday (route_id, time) VALUES (91, '2000-01-01 ". "06:40:00"."')";
  mysql_query($query1);
	for($j = 7; $j <= 18; $j++) {
		$query2 = "INSERT INTO schedules_weekday (route_id, time) VALUES (91, '2000-01-01 ". $j . ":00:00"."')";
		mysql_query($query2);
		
		$query3 = "INSERT INTO schedules_weekday (route_id, time) VALUES (91, '2000-01-01 ". $j . ":20:0"."')";
		mysql_query($query3);
		
		
		$query4 = "INSERT INTO schedules_weekday (route_id, time) VALUES (91, '2000-01-01 ". $j . ":40:00"."')";
		mysql_query($query4);
	}
	$query5 = "INSERT INTO schedules_weekday (route_id, time) VALUES (91, '2000-01-01 ". "19:40:00"."')";
	mysql_query($query5);
	$query6 = "INSERT INTO schedules_weekday (route_id, time) VALUES (91, '2000-01-01 ". "20:49:00"."')";
	mysql_query($query6);
	$query7 = "INSERT INTO schedules_weekday (route_id, time) VALUES (91, '2000-01-01 ". "21:04:00"."')";
	mysql_query($query7);

	echo "<hr>";

/*
 ****************************************************************************************************************************
*/

	echo "For Cedar Ventura Route Id: 101 - 38 North";
  $query1 = "INSERT INTO schedules_weekday (route_id, time) VALUES (101, '2000-01-01 ". "06:20:00"."')";
  mysql_query($query1);
  $query1 = "INSERT INTO schedules_weekday (route_id, time) VALUES (101, '2000-01-01 ". "06:50:00"."')";
  mysql_query($query1);
	for($j = 7; $j <= 18; $j++) {
		$query2 = "INSERT INTO schedules_weekday (route_id, time) VALUES (101, '2000-01-01 ". $j . ":10:00"."')";
		mysql_query($query2);
		
		$query3 = "INSERT INTO schedules_weekday (route_id, time) VALUES (101, '2000-01-01 ". $j . ":30:0"."')";
		mysql_query($query3);
		
		$query4 = "INSERT INTO schedules_weekday (route_id, time) VALUES (101, '2000-01-01 ". $j . ":50:00"."')";
		mysql_query($query4);
	}
	$query5 = "INSERT INTO schedules_weekday (route_id, time) VALUES (101, '2000-01-01 ". "19:50:00"."')";
	mysql_query($query5);
	$query6 = "INSERT INTO schedules_weekday (route_id, time) VALUES (101, '2000-01-01 ". "20:50:00"."')";
	mysql_query($query6);
	$query7 = "INSERT INTO schedules_weekday (route_id, time) VALUES (101, '2000-01-01 ". "21:12:00"."')";
	mysql_query($query7);

	echo "<hr>";

/*
 ****************************************************************************************************************************
*/

	echo "For Cedar Shields Route Id: 111 - 38 North";
  $query1 = "INSERT INTO schedules_weekday (route_id, time) VALUES (111, '2000-01-01 ". "06:35:00"."')";
  mysql_query($query1);
  
	for($j = 7; $j <= 18; $j++) {
		$query2 = "INSERT INTO schedules_weekday (route_id, time) VALUES (111, '2000-01-01 ". $j . ":05:00"."')";
		mysql_query($query2);
		
		$query3 = "INSERT INTO schedules_weekday (route_id, time) VALUES (111, '2000-01-01 ". $j . ":25:0"."')";
		mysql_query($query3);
		
		$query4 = "INSERT INTO schedules_weekday (route_id, time) VALUES (111, '2000-01-01 ". $j . ":45:00"."')";
		mysql_query($query4);
	}
	$query5 = "INSERT INTO schedules_weekday (route_id, time) VALUES (111, '2000-01-01 ". "19:05:00"."')";
	mysql_query($query5);
	$query6 = "INSERT INTO schedules_weekday (route_id, time) VALUES (111, '2000-01-01 ". "20:05:00"."')";
	mysql_query($query6);
	$query7 = "INSERT INTO schedules_weekday (route_id, time) VALUES (111, '2000-01-01 ". "21:05:00"."')";
	mysql_query($query7);
	$query8 = "INSERT INTO schedules_weekday (route_id, time) VALUES (111, '2000-01-01 ". "21:24:00"."')";
	mysql_query($query8);

	echo "<hr>";

/*
 ****************************************************************************************************************************
*/

	echo "For Cedar Shaw Route Id: 121 - 38 North";
  $query1 = "INSERT INTO schedules_weekday (route_id, time) VALUES (121, '2000-01-01 ". "06:45:00"."')";
  mysql_query($query1);
  
	for($j = 7; $j <= 18; $j++) {
		$query2 = "INSERT INTO schedules_weekday (route_id, time) VALUES (121, '2000-01-01 ". $j . ":15:00"."')";
		mysql_query($query2);
		
		$query3 = "INSERT INTO schedules_weekday (route_id, time) VALUES (121, '2000-01-01 ". $j . ":35:0"."')";
		mysql_query($query3);
		
		$query4 = "INSERT INTO schedules_weekday (route_id, time) VALUES (121, '2000-01-01 ". $j . ":55:00"."')";
		mysql_query($query4);
	}
	$query5 = "INSERT INTO schedules_weekday (route_id, time) VALUES (121, '2000-01-01 ". "19:15:00"."')";
	mysql_query($query5);
	$query6 = "INSERT INTO schedules_weekday (route_id, time) VALUES (121, '2000-01-01 ". "20:15:00"."')";
	mysql_query($query6);
	$query7 = "INSERT INTO schedules_weekday (route_id, time) VALUES (121, '2000-01-01 ". "21:15:00"."')";
	mysql_query($query7);
	$query8 = "INSERT INTO schedules_weekday (route_id, time) VALUES (121, '2000-01-01 ". "21:32:00"."')";
	mysql_query($query8);

	echo "<hr>";

/*
 ****************************************************************************************************************************
*/
	echo "For Herndon Cedar Route Id: 131 - 38 North";
  $query1 = "INSERT INTO schedules_weekday (route_id, time) VALUES (131, '2000-01-01 ". "06:55:00"."')";
  mysql_query($query1);
  
	for($j = 7; $j <= 19; $j++) {
		if($j != 7) {
			$query2 = "INSERT INTO schedules_weekday (route_id, time) VALUES (131, '2000-01-01 ". $j . ":03:00"."')";
			mysql_query($query2);
		}
		
		$query3 = "INSERT INTO schedules_weekday (route_id, time) VALUES (131, '2000-01-01 ". $j . ":23:0"."')";
		mysql_query($query3);
		
		if($j != 19) {
			$query4 = "INSERT INTO schedules_weekday (route_id, time) VALUES (131, '2000-01-01 ". $j . ":43:00"."')";
			mysql_query($query4);
		}
	}
	$query5 = "INSERT INTO schedules_weekday (route_id, time) VALUES (131, '2000-01-01 ". "20:23:00"."')";
	mysql_query($query5);
	$query6 = "INSERT INTO schedules_weekday (route_id, time) VALUES (131, '2000-01-01 ". "21:22:00"."')";
	mysql_query($query6);
	$query7 = "INSERT INTO schedules_weekday (route_id, time) VALUES (131, '2000-01-01 ". "21:38:00"."')";
	mysql_query($query7);

	echo "<hr>";

/*
 ****************************************************************************************************************************
*/

	mysql_close($con);
?>