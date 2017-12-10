<?php
	
	include 'open_config.php';
	
					
	$specialist = (isset($_POST['specialist'])    ? $_POST['specialist']   : '');
	$contact = (isset($_POST['Contact'])    ? $_POST['Contact']   : '');
	$ContactPhone = (isset($_POST['ContactPhone'])    ? $_POST['ContactPhone']   : '');

	$sql = "SELECT * FROM 'specialists' where specialist = specialist";

			if ($conn->query($sql) === TRUE) {
    		echo "New record created successfully";
			} else {
    		echo "Error: " . $sql . "<br>" . $conn->error;
			}
			mysqli_close($conn);

?>