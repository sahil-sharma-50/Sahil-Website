<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/blog.css">
    <title>Sahil Website</title>
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
    <!-- Content starts here -->
    <div class="home">
        <div class="left">
                <?php
                    include 'conn.php';
                    $query = "SELECT * from post ORDER BY id DESC";
                    $result = mysqli_query($conn,$query);
                    while($rows = mysqli_fetch_array($result)){
                        ?>
                        <?php echo $rows['date']; ?>
                        <div class="img">   
                            <img src="../images/<?php echo $rows['img']; ?>">
                        </div>
                        <div class="title">
                            <?php echo $rows['title']; ?>
                        </div>
                        <div class="des">
                        <p>
                            <?php echo $rows['des']; ?>
                        </p>
                        </div>
                        <hr>
                        <?php
                    }
                ?>
            </div>

            <div class="right">
                <div class="social">
                    <hr>
                    <p>Follow Me On</p>
                    <a href="https://www.facebook.com/sahilsharma50s/" target="_blank" class="fa fa-facebook"></a><br>
                    <a href="https://twitter.com/Sahil_Sharma_50" target="_blank" class="fa fa-twitter"></a><br>
                    <a href="https://www.linkedin.com/in/sahil-sharma-472b24199/" target="_blank" class="fa fa-linkedin"></a><br>
                    <a href="https://www.youtube.com/channel/UCOx2xh8uHYv1jxtqsRHNhVQ?view_as=subscriber" target="_blank" class="fa fa-youtube"></a><br>
                    <a href="https://www.instagram.com/sahil_sharma_50/" target="_blank" class="fa fa-instagram"></a><br>
                </div>
                <hr>
            </div>
        </div>
    <!-- Footer Starts Here -->
    <footer>
        <p>Sahil Sharma | Made with your Love | Blog of 2020</p>
    </footer>
</body>
</html>