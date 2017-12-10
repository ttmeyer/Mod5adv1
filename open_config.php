<?php
	//Tenant Communicator Azure Config
	$dbhost = 'us-cdbr-azure-central-a.cloudapp.net';
	$dbuser = 'bed4976a6be041';
	$dbpass = '5b564c9e';
	$dbname = 'tenantcommunicator';
	
	// Create connection
	//mysql_select_db($mysql_db_database, $con)or die("Could not select database");
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	// Check connection
	if (!$conn) 
	{
    die("Connection failed: " . mysqli_connect_error());
	}
?>