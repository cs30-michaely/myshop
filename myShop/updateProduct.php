<?php


	$name = $_POST["name"];
	$descr = $_POST["descr"];
	$price = $_POST["price"];
	$imgUrl = $_POST['imgUrl'];

	// Create Connection
	$con = mysqli_connect('127.0.0.1','root','','products');
	
	// Test Connection
	 if (!$con) {
      	die("Failed to connect to MySQL: " . mysqli_connect_error());
	 } 

    
     // Search And Update
	   $sql = "UPDATE products SET Description='" . $descr . "', Price='" . $price . "', Img='" . $imgUrl . "' WHERE Name='" . $name . "'";

	   if (mysqli_query($con, $sql)) {
         echo "SUCCESS";
       } else {
         echo "FAILURE";
       }
      

		mysqli_close($con);

?>
