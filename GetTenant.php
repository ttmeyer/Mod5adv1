	<?php
	include 'php/open_config.php';
	
	$nickname = (isset($_post['nickname'])	? $_Post['nickname']	: '');
	$TenantName = (isset($_POST['TenantName'])    ? $_POST['TenantName']   : '');
	$PhoneNo = (isset($_POST['PhoneNo'])    ? $_POST['PhoneNo']   : '');
					
	//testing, no joins
	//$sql = "Select TenantName, PhoneNo FROM Tenant WHERE TenantID = 34;"
			
	$sql = "select tenant.tenantName, tenant.PhoneNo, home.nickname FROM home INNER JOIN tenant On HomeID=home.homeID;"
				 
	while($row = mysqli_fetch_assoc($result)){
	echo ".$row["tenantName"].;
	echo ".$row["PhoneNo"].;
	}
					 
	mysqli_close($conn);
	?>