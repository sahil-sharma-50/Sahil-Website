<?php

    $host = "localhost";
    $user = "root";
    $pass = '';
    $db_name = "projectx";

    $conn = mysqli_connect($host,$user,$pass,$db_name);
    if(mysqli_connect_errno()){
        die("Failed to connect " .mysqli_connect_errno());
    }

?>