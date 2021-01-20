<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("location:../php/home.php");
    }

?>

<?php
    include 'conn.php';
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/adminpanel.css">
    <script type="text/javascript" src="../script/script.js"></script>
    <title>Sahil Website</title>
</head>
<body>
    <div class="top">
        <div class="logo"><h1>Sahil Website</h1></div><br>
        <hr>
        <ul>
            <li><a href="#" onclick="dash()">Dashboard</a></li>
            <li><a href="#" onclick="post()">Posts</a></li>
            <li><a href="#" onclick="update()">Update</a></li>
            <li><a href="#" onclick="user()">User</a></li>
            <li><a href="../html/signup.html">Add User</a></li>
            <li><a href="../html/about.html">Write About</a></li>
            <li><a href="../html/addpost.html">Add Post</a></li>
            <li><a href="../php/logout.php" id="logout">Logout</a></li>
        </ul>
    </div>
    <hr>
    
    <h1>Welcome  <?php echo $_SESSION['username']; ?></h1>
    <!-- Dashboard Code -->
    <div id="dash" style="display: block;">
        <div class="content">
            <p style="color:red">Dashboard</p><br>
            <?php
                $query = "SELECT * from post";
                $result = mysqli_query($conn,$query);
            ?>
                <table>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Description</th>
                            
                        </tr>
                        <?php   
                while($rows = mysqli_fetch_array($result)){
                    ?>
                    <tr>
                        <td><?php echo $rows['id'];?></td>
                        <td><?php echo $rows['title'];?></td>
                        <td><?php echo $rows['des'];?></td>
                        
                    </tr>
                <?php }
            ?>  
                </table>
<br><br><hr><br>
            <p style="color:red">Users</p><br>
            <?php
                $query = "SELECT * from users";
                $result = mysqli_query($conn,$query);
            ?>
                <table>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Mobile</th>
                        </tr>
                        <?php   
                while($rows = mysqli_fetch_array($result)){
                    ?>
                    <tr>
                        <td><?php echo $rows['id'];?></td>
                        <td><?php echo $rows['name'];?></td>
                        <td><?php echo $rows['username'];?></td>
                        <td><?php echo $rows['email']?></td>
                        <td><?php echo $rows['mobile']?></td>
                    </tr>
                <?php }
            ?>  
                </table>
        </div>
    </div>
    <!-- Dashboard Code End -->

    <!-- Posts Code -->
    <div id="post" style="display: none;">
        <div class="content">
        <p style="color:red">Posts</p><br>
        <div class="del">
            <form method="POST" action="del.php">
            <label>Enter ID: </label>
            <input type="number" name="id">
            <button type="submit">Delete</button>
            </form>
        </div><br>
            <?php
                $query = "SELECT * from post ORDER BY id DESC";
                $result = mysqli_query($conn,$query);
            ?>
                <table>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Description</th>
                        </tr>
                        <?php   
                while($rows = mysqli_fetch_array($result)){
                    ?>
                    <tr>
                        <td><?php echo $rows['id'];?></td>
                        <td><?php echo $rows['title'];?></td>
                        <td><?php echo $rows['des'];?></td>
                    </tr>
                <?php }
            ?>  
                </table>
        </div>
    </div>
    <!-- Posts Code End -->

    <!-- Update Code -->
    <div id="update" style="display: none;">
    <div class="content">
        <p style="color:red">Update Post</p><br>
        <div class="del">
            </form>
            <form method="POST" action="update.php">
            <label>Enter ID: </label>
            <input type="number" name="id">
            <button type="submit">Update</button>
            </form>
        </div><br>
            <?php
                $query = "SELECT * from post ORDER BY id DESC";
                $result = mysqli_query($conn,$query);
            ?>
                <table>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Description</th>
                        </tr>
                        <?php   
                while($rows = mysqli_fetch_array($result)){
                    ?>
                    <tr>
                        <td><?php echo $rows['id'];?></td>
                        <td><?php echo $rows['title'];?></td>
                        <td><?php echo $rows['des'];?></td>
                    </tr>
                <?php }
            ?>  
                </table>
    </div>


            <div class="content">
            <p style="color:red">Update Users</p><br>
        <div class="del">
            </form>
            <form method="POST" action="../php/updateuser.php">
            <label>Enter ID: </label>
            <input type="number" name="id">
            <button type="submit">Update</button>
            </form>
        </div><br>
                <?php
                $query = "SELECT * from users";
                $result = mysqli_query($conn,$query);
            ?>
                <table>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Mobile</th>
                        </tr>
                        <?php   
                while($rows = mysqli_fetch_array($result)){
                    ?>
                    <tr>
                        <td><?php echo $rows['id'];?></td>
                        <td><?php echo $rows['name'];?></td>
                        <td><?php echo $rows['username'];?></td>
                        <td><?php echo $rows['email']?></td>
                        <td><?php echo $rows['mobile']?></td>
                    </tr>
                <?php }
            ?>  
                </table>
            </div>
    </div>
    <!-- Update Code End -->

    <!-- Users Code -->
    <div id="user" style="display: none;">
        <div class="content">
        <p style="color:red">Users</p><br>
        <div class="del">
            <form method="POST" action="deluser.php">
            <label>Enter ID: </label>
            <input type="number" name="id">
            <button type="submit">Delete</button>
            </form>
        </div><br>
            <?php
                $query = "SELECT * from users";
                $result = mysqli_query($conn,$query);
            ?>
                <table>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Mobile</th>
                        </tr>
                        <?php   
                while($rows = mysqli_fetch_array($result)){
                    ?>
                    <tr>
                        <td><?php echo $rows['id'];?></td>
                        <td><?php echo $rows['name'];?></td>
                        <td><?php echo $rows['username'];?></td>
                        <td><?php echo $rows['email']?></td>
                        <td><?php echo $rows['mobile']?></td>
                    </tr>
                <?php }
            ?>  
                </table>
        </div>
    </div>
    <!-- Users Code End -->

    <footer>
        <p>Sahil Sharma | Made with your Love | Blog of 2020</p>
    </footer>

    
</body>
</html>