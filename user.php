<!DOCTYPE html>
<body>

<?php

// connect to server
	include 'open_config.php';

//	session_start();
	$username = (isset($_POST['UserName'])    ? $_POST['UserName']   : '');
	$password = (isset($_POST['Password'])    ? $_POST['Password']   : '');

//	$username = $_POST['UserName'];
	//$password = md5($_POST['Password']);
//$mysql_db_hostname = "localhost";
//$mysql_db_user = "root";
//$mysql_db_password = "";
//$mysql_db_database = "test";
//$con = mysql_connect($mysql_db_hostname, $mysql_db_user, $mysql_db_password)
//or die("Could not connect database");
//mysql_select_db($mysql_db_database, $con)or die("Could not select database");

$query = "SELECT UserName
FROM user
WHERE UserName = '$username' AND Password='$password' LIMIT 1";

$result = mysqli_query($conn, $query);
//$num_row = mysql_num_rows($result);
//$row=mysql_fetch_array($result);
 if (mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_assoc($result)) {

		//echo "true";
		echo "Welcome " . $row["UserName"]. "!<br>";
//$_SESSION['UserName']=$row['UserName'];
			}
			 } else {
			echo "false";
		}

mysqli_close($conn);


 ?>

 </body>
 </html>
