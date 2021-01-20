<?php

    include 'conn.php';
    $id = $_POST['id'];
    $title = $_POST['title'];
    $des = $_POST['des'];
    $img = $_POST['img'];
    $con = $_POST['content'];
    
    $query = "UPDATE post SET title = '$title', des = '$des', img = '$img', content = '$con' WHERE id = $id";

    $result = mysqli_query($conn,$query);
    if($result){
        echo '<script>alert("Post Update Successfully");</script>';
        header("refresh:0;url=../php/adminpanel.php");
    }
?>