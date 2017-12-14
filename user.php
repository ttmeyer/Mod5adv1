<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Tenant Communicator</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.css" rel="stylesheet" type="text/css"/>
<link href="styles/custom.css" rel="stylesheet" type="text/css">
<script src="http://code.jquery.com/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.js" type="text/javascript"></script>
</head>

<body>

<?php

 // connect to server
	include 'open_config.php';

//	session_start();
	$username = (isset($_POST['UserName'])    ? $_POST['UserName']   : '');
	$password = (isset($_POST['Password'])    ? $_POST['Password']   : '');

$query = "SELECT UserName
FROM user
WHERE UserName = '$username' AND Password='$password' LIMIT 1";

$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_assoc($result)) {

		//$file = fopen ("Landlord.html","r")
		//header('location: index.html');

		header("location: http://tenantcommunicator.azurewebsites.net/landlord.html");
		//echo "true";

		}

		} else {
		//$file = fopen ("index.html","r")
		//header("location: Landlord.html");
		header("location: http://tenantcommunicator.azurewebsites.net/index.html");
		}

mysqli_close($conn);

 </body>
 </html>
