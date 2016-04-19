<?php
	$con = mysqli_connect("db.soic.indiana.edu", "caps16_team11", "my+sql=caps16_team11", "caps16_team11");
	
	if(mysqli_connect_errno()){
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
?>