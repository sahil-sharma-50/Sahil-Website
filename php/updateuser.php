<?php

    include 'conn.php';
    $id = $_POST['id'];

    $query = "SELECT * from users WHERE id = '$id'";
    $result = mysqli_query($conn,$query);
    $rows = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/signupstyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text&family=Sansita+Swashed:wght@300&display=swap" rel="stylesheet">
    <title>Update User</title>
</head>
<body>
    <div class="box">
    <h1>Update Post in Website</h1>
    <form method="POST" action="../php/updateuser2.php">

        <input type="number" name="id" value="<?php echo $rows['id'];?>">
        <label>Username</label>
        <input type="text" name="username" value="<?php echo $rows['username']; ?>" required>

        <label>Name</label>
        <input type="text" name="name" value="<?php echo $rows['name']; ?>" required>

        <label>Email</label>
        <input type="email" name="email" value="<?php echo $rows['email']; ?>" required>

        <label>Mobile</label>
        <input type="number" name="mobile" value="<?php echo $rows['mobile']; ?>" required>

        <label>Passsword</label>
        <input type="password" name="password" value="<?php echo $rows['password']; ?>" required>

        <button type="submit">Post</button>
    </form>
    </div>
</body>
</html>