<?php


	$name = $_POST["name"];
	echo $name;

	// Create Connection
	$con = mysqli_connect('127.0.0.1','root','','products');
	
	// Test Connection
	 if (!$con) {
      	die("Failed to connect to MySQL: " . mysqli_connect_error());
	 } 

	// Search And Delete
	 $sql = "DELETE FROM products WHERE Name ='" . $name . "'";

	 if (mysqli_query($con, $sql)) {
		echo "DELETED SUCCESSFULLY";
	 }else{
		echo "DELETE UNSUCCESSFUL " . mysqli_error($con);
	}

	 mysqli_close($con);

?>
