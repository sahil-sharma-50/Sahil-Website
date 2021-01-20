<?php

    include 'conn.php';

    $img = $_POST['img'];
    $title = $_POST['title'];
    $des = $_POST['des'];

    $query = "INSERT into about(img,title,des) VALUES('$img','$title','$des')";
    $result = mysqli_query($conn,$query);
    if($result){
        echo'<script>alert("About Page Update.)";</script>';
        header("refresh:0;url=../php/adminpanel.php");
    }
?>