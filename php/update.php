<?php

    include 'conn.php';
    $id = $_POST['id'];
    $query = "SELECT * from post where id = '$id'";
    $result = mysqli_query($conn,$query);
    $rows = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/addpost.css">
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text&family=Sansita+Swashed:wght@300&display=swap" rel="stylesheet">
    <title>Update Post</title>
</head>
<body>
    <div class="box">
    <h1>Update Post in Website</h1>
    <form method="POST" action="../php/updatepost.php">

        <input type="number" name="id" value="<?php echo $rows['id'];?>">
        <label>Title</label>
        <input type="text" name="title" value="<?php echo $rows['title']; ?>" required>

        <label>Description</label>
        <input type="text" name="des" class="des2" value="<?php echo $rows['des']; ?>" required>

        <label>Img</label>
        <input type="file" name="img">

        <label>Content</label>
        <input type="text" name="content" value="<?php echo $rows['content']; ?>" required>

        <button type="submit">Post</button>
    </form>
    </div>
</body>
</html>