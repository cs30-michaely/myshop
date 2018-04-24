<?php
    //create connection
    $con = mysqli_connect('127.0.0.1','root','');
    
    if(!$con){
        echo "Not Connected to database";
    }

    if (!mysqli_select_db($con, 'products')){
        echo "Database Not Selected";
    }

    $query = "INSERT INTO `products` (`Name`, `Description`, `Price`, `Img`) VALUES ('Cool Computer', 'This is a very cool computer', '12345', 'Image')";
    
if(mysqli_query($con, $query)){
  echo 'alert("yes you did it")';
}else{
  echo 'OOOOOOFF';
}
   
?>
