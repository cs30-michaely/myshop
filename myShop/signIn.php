<?php
    //create connection
    $con = mysqli_connect('127.0.0.1','root','');
    
    if(!$con){
        echo "Not Connected to database";
    }

    if (!mysqli_select_db($con, '')){
        echo "Database Not Selected";
    }

</php>