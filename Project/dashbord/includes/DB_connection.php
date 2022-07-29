<?php
   
        $db_host= '127.0.0.1';
        $db_user_name ='root';
        $db_user_password ='';
        $db_name ="final";

        $connection= mysqli_connect($db_host ,$db_user_name,$db_user_password ,$db_name);

        if(!$connection){
            echo"connection faild";
            die("connection faild".mysqli_connect_error());

        }

    
?>

