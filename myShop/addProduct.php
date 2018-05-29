<?php
    // Create Connection
    $con = mysqli_connect('127.0.0.1','root','','products');
    
    // Check Connecion
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    
    // Define Inputs
    $Name = $_POST['Name'];
    $Descr = $_POST['Description'];
    $Price = $_POST['Price'];
    $Image = $_POST['Img'];

	// Check if the Item Name Already Exists
      $sql = "SELECT Name FROM products WHERE Name= '" . $Name . "'";
      
      // Check if query result has no rows
      if (mysqli_num_rows(mysqli_query($con, $sql)) != 0) {
        echo "The name " . $Name . " is already in use.";
      } else {
        // Define Query
        $sql = "INSERT INTO products (Name,Description,Price,Img) VALUES ('$Name','$Descr','$Price','$Image')"; 
    
        // Insert Into DB
        if ($Name == "" || $Descr == "" || $Price == "" || $Image == ""){
          echo "<p> Please fill the form fully.</p><br><a href='admin.html'>Return</a>";
        } else{
          if(mysqli_query($con, $sql)){
            echo "<p>Successfully added a product! click <a href='admin.php'>here</a> to add another";
          }else{
            echo "<p>Failed to add product</p>";
          }
        }
      }


    
  
?>
