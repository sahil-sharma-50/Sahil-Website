<?php

    include 'conn.php';
    $username = $_POST['username']; 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $pass = $_POST['pass'];

    $query = "INSERT into users(username,name,email,mobile,password) VALUES('$username','$name','$email','$mobile','$pass')";

    $query2 = "SELECT * from users where username = '$username'";
    $result2 = mysqli_query($conn,$query2);
    if(mysqli_num_rows($result2) >0 ){
        echo '<script>alert("Username already exits!");</script>';
        header("refresh:0;url=../html/signup.html");
    }

    else{
        $result = mysqli_query($conn,$query);
        if($result){
        echo '<script>alert("Signup Successfull!");</script>';
        header("refresh:0 ; url = ../php/adminpanel.php");
        }
        else{
        echo"Data does not inserted";
        }
    }
    
?>