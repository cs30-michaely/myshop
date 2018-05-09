<!DOCTYPE html>
<html>

  <?php $name = "home"; include 'header.php';?>
  
<!--
<head>
	<title>Shop Home</title>
	<link rel='stylesheet' type="text/css" href="stylesheet.css">
</head>

<body>
	  Top navigation bar
	<header>
		<a><img id='logo' src="img/desktop2.0.png"></a>

		<ul id="bar">
			<li class="sections"><a href="#">Home</a></li>
			<li class="sections"><a href="#">Computers</a></li>
			<li class="sections"><a href="#">Software</a></li>
			<li class="sections"><a href="login.html">Login</a></li>
			<li class="sections"><a href="#">Contact Us</a></li>
		</ul>

	</header>
-->
	<h2 class="clear">New Products</h2>
	<!--  list of products floating left on screen-->
	<!-- Database (name, descr) -->
	<div id="products">
		<?php
    //create connection
    $con = mysqli_connect('127.0.0.1','root','','products');
    
    // Check Connecion
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    
    // Query Database
    $sql = "SELECT Name,Description FROM products";
  
    // Try to get results from query
    if ($result = mysqli_query($con, $sql)) {
      // Fetch Rows
      while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="product">
                <p>' . $row["Name"] . '</p>
                <img class="productImg" src="https://www.thesource.ca/medias/L2-CategoryImage-Desktops.jpg?context=bWFzdGVyfGltYWdlc3wyMjIwNnxpbWFnZS9qcGVnfGltYWdlcy9oOGQvaGRkLzg4Mzc3NTk3NjI0NjIuanBnfGIxMDc2MjM3YWRmN2RhNDVkZmQ1ZjRkOTZlN2E1YzVjYjJlZDQ5MjdjMWM1NGM1ZjhjZmViZmY1MjRjMDI1ZTM">
                <p>' . $row["Description"] . '</p>
                <button>More Info</button>
              </div>';
      }
      // Free result set
      mysqli_free_result($result);
    }
  
    // Close Connection
    mysqli_close($con);
  ?>

	</div>




	<!--

    <div class="product">
      <h2>Name</h2>
      <img class="productImg" src="https://www.thesource.ca/medias/L2-CategoryImage-Desktops.jpg?context=bWFzdGVyfGltYWdlc3wyMjIwNnxpbWFnZS9qcGVnfGltYWdlcy9oOGQvaGRkLzg4Mzc3NTk3NjI0NjIuanBnfGIxMDc2MjM3YWRmN2RhNDVkZmQ1ZjRkOTZlN2E1YzVjYjJlZDQ5MjdjMWM1NGM1ZjhjZmViZmY1MjRjMDI1ZTM">
      <p>This is a computer! Info info info...</p>
      <button>More Info</button>
    </div>
    <div class="product">
      <img class="productImg" src="https://www.staples-3p.com/s7/is/image/Staples/s0639227_sc7?">
      <p>This is a computer! Info info info...</p>
      <button>More Info</button>
    </div>
    <div class="product">
      <img class="productImg" src="https://www.visions.ca/Images/Catalogue/Product/English/GUA4500INC_l_1.jpg">
      <p>This is a computer! Info info info...</p>
      <button>More Info</button>
    </div>
    <div class="product">
      <img class="productImg" src="https://www.visions.ca/Images/Catalogue/Product/English/GUA4500INC_l_1.jpg">
      <p>This is a computer! Info info info...</p>
      <button>More Info</button>
    </div>
    <div class="product">
      <img class="productImg" src="https://www.visions.ca/Images/Catalogue/Product/English/GUA4500INC_l_1.jpg">
      <p>This is a computer! Info info info...</p>
      <button>More Info</button>
    </div>
    <div class="product">
      <img class="productImg" src="https://www.visions.ca/Images/Catalogue/Product/English/GUA4500INC_l_1.jpg">
      <p>This is a computer! Info info info...</p>
      <button>More Info</button>
    </div>
-->
	<p class="clear">fdasfdas</p>
	<!--  Break in backround and new segment start-->
	<div id="aboutUs">
		<h1>The Goal</h1>
		<h3>When I was looking for a computer there was a large amount of information that I could not understand. My goal is to have a one stop shop where anyone regardless of computer knowledge can find the product that suits their needs and budget the best.</h3>
		<h2 id="survey">Take a survey to discover the type of computer that fits your needs <a href=#>here</a></h2>
		<h2 id="parts">Want to learn more about the parts of a computer and what their basic purpose is? Click <a href=#>here</a></h2>
	</div>


</body>

</html>
