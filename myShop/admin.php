<html>

<head>
  <title>adminpage</title>
  <link rel='stylesheet' type="text/css" href="stylesheet.css">
</head>

<body>
  <h1>Add a new product</h1>
  <form action="addProduct.php" method="post">
    Name <input type="text" name="Name"><br> Description <input type="text" name="Description"><br> Price <input type="number" name="Price"><br> Image <input type="text" name="Img"><br>
    <input type="submit">
  </form>
  <?php
   //create connection
    $con = mysqli_connect('127.0.0.1','root','','products');
    
    // Check Connecion
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    
    // Query Database
    $sql = "SELECT Name,Description,Price,Img FROM products";
  
    // Try to get results from query
    if ($result = mysqli_query($con, $sql)) {
      // Fetch Rows
		$productNum = 1;
       while ($row = mysqli_fetch_assoc($result)) {
        echo '<div id="product' . $productNum . '" class="product">
              <p class="name">' . $row["Name"] . '</p>
              <textarea>' . $row["Description"] . '</textarea><br>
              <input type="number" value="' . $row["Price"] . '"><br>
              <input type="text" value="' . $row["Img"] . '"><br>
              <button class="update">Update</button>
              <button class="delete">Delete</button>
              </div>';
         $productNum++;
       }
    }
    
  
  ?>
  
  <!--  Load JavaScript-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="script.js"></script>
</body>
