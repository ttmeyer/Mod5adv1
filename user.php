<!DOCTYPE html>
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

		echo "true";
		
		}
		
		} else {
		echo "false";
		}



//mysqli_close($conn);
 ?>

 </body>
 </html>
