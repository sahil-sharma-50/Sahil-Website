<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/aboutpage.css">
    <title>About</title>
</head>
<body>
<div class="top">
        <div class="logo"><h1>Sahil Website</h1></div><br>
        <hr>
        <ul>
            <li><a href="../html/index.html">Home</a></li>
            <li><a href="../php/blog.php">Blog</a></li>
            <li><a href="../php/about.php">About</a></li>
            <li><a href="../html/contact.html">Contact</a></li>
            <li><a href="../html/login.html" target="_blank">Login</a></li>
            <li><a href="../html/signup.html">Signin</a></li>
        </ul>
</div>
<hr>
<div class="home">
    <?php
        include 'conn.php';
        $query = "SELECT * from about ORDER BY id DESC";
        $result = mysqli_query($conn,$query);
        $row = mysqli_fetch_assoc($result);
    ?>
    <u><h1><?php echo $row['title']; ?></h1></u>
    <img src="../images/<?php echo $row['img']; ?>">
    <p><?php echo $row['des']; ?></p>
</div>
<footer>
        <p>Sahil Sharma | Made with your Love | Blog of 2020</p>
    </footer>
</body>
</html>