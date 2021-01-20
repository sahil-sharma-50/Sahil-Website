<?php

    include 'conn.php';

    $id = $_POST['id'];

   
    $query = "DELETE from post where id = '$id'";
    $result = mysqli_query($conn,$query);
    if($result){
    header("refresh:0;url=../php/adminpanel.php");
    }

?>