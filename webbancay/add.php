<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form cation="add.php" method="post" enctype="multipart/form-data">
    <h2>Add Trees</h2>
        <label>Name</label>
        <input type="text" name="name" placeholder="name">
        <br>
        <label>Price</label>
        <input type="price" name="price" placeholder="price">
        <br>
        <label>Image</label>
        <input type="file" name="image" placeholder="image">
        <br>
        <label>Warranty</label>
        <input type="text" name="warranty" placeholder="warranty">
        <br>
        <button type="submit" name="save"> ADD</button>
        
    </form>
    <?php
    include "connect.php";
        if(isset($_POST['save'])){
            if (isset($_FILES['image'])) {
                if ($_FILES['image']['size'] == 0) {
                    echo "bạn chưa chọn file";
                } else {
                    if (isset($_FILES['image'])) {
                        $file = $_FILES['image'];
                        $tenfile = $file['name'];
                        // move_uploaded_file($file['tmp_name'], $tenfile);
                        move_uploaded_file($file['tmp_name'],   $tenfile);
                        echo "up file success!";
        ?>
                        <img src='<?php echo $tenfile ?>' width="200" ; height="200">
        <?php
                    }
                }
            }
            if (isset($_POST['save'])) {
               
                $name= $_POST['name'];
                $price = $_POST['price'];
                $image= $tenfile;
                $warranty= $_POST['warranty'];
                
                $sql ="INSERT INTO sanpham (name, image, price, warranty)
                VALUE('$name','$image','$price','$warranty')
                ";

                mysqli_query($conn, $sql);
                
            }
        }
    ?>
</body>
</html>