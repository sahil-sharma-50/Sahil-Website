<?php

    include 'conn.php';

    $title = $_POST['title'];
    $des = $_POST['des'];
    $img = $_POST['img'];
    if($img == NULL){
        $img = "no.png";
    }
    $content = $_POST['content'];

    $query = "INSERT into post(title,des,img,content) VALUES('$title','$des','$img','$content')";

    $result = mysqli_query($conn,$query);
    if($result){
        echo '<script>alert("Post Publish!");</script>';
        header("refresh:0;url=../php/adminpanel.php");
    }
    else{
        echo '<script>alert("Error!");</script>';
        header("refresh:0;url=../php/addpost.php");
    }
?>