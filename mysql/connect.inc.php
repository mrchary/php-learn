<?php
	$conn_err = "Error connecting database";

	$mysql_user = "root";
	$mysql_host = "localhost";
	$mysql_pass = "";

	$mysql_db = "a_database";

	if(!@mysql_connect($mysql_host, $mysql_user, $mysql_pass) || !@mysql_select_db($mysql_db)){
		die($conn_err);
	}
	
?>