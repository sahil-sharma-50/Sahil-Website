<?php
    session_start();
    include 'conn.php';
    $username = $_POST['username'];
    $pass = $_POST['pass'];

    $query = "SELECT * from users where username = '$username' and password = '$pass'";
    $result = mysqli_query($conn,$query);
    if(mysqli_num_rows($result) == 1){
        echo '<script> alert("Login Successfull!");</script>';
        $_SESSION['username'] = $username;
        header("refresh:0;url=../php/adminpanel.php");
    } 
    else{
        echo '<script> alert("Invalid Data!");</script>';
        header("refresh:0;url=../html/login.html");
    }

?>