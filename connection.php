<?php      
    $host = "localhost";  
    $user = "id14438666_username";  
    $password = "Nm6~&S[uWn3hL~An";  
    $db_name = "id14438666_coviddb";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>  