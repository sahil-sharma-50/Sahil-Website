<?php

    include 'conn.php';
    $id = $_POST['id'];
    $username = $_POST['username'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $pass = $_POST['password'];
    
    $query = "UPDATE users SET name = '$name', username = '$username', email = '$email', mobile = '$mobile', password = '$pass' WHERE id = $id";

    $result = mysqli_query($conn,$query);
    if($result){
        echo '<script>alert("User Update Successfully");</script>';
        header("refresh:0;url=../php/adminpanel.php");
    }
?>