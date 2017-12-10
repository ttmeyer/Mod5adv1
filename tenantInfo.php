	<?php
	include 'php/open_config.php';
	//include 'php/php/opendb.php';
					
	$Account = (isset($_POST['Account'])    ? $_POST['Account']   : '');
	$Amount = (isset($_POST['Amount'])    ? $_POST['Amount']   : '');
	$Notes = (isset($_POST['Notes'])    ? $_POST['Notes']   : '');

	$sql = "INSERT INTO expenses (Account, Amount, Notes)
	VALUES (Account, Amount, Notes)";

	if ($conn->query($sql) === TRUE) {
	echo "New record created successfully";
	} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	mysqli_close($conn);
	?>