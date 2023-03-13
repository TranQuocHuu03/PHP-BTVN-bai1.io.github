<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post" enctype="multipart/form-data">
        <input type="file" name ="hinhanh" value="upload">
        <input type="submit" name="btn" value="Gửi">
    </form>
</body>
</html>
<?php

if (isset($_POST['btn'])) {
    if (isset($_FILES['hinhanh'])) {
        if ($_FILES['hinhanh']['size'] == 0) {
            echo "bạn chưa chọn file";
        } else {
            if (isset($_FILES['hinhanh'])) {
                $file= $_FILES['hinhanh'];
                $tenfile = $file['name'];
                // move_uploaded_file($file['tmp_name'], $tenfile);
                move_uploaded_file($file['tmp_name'],'./image/' . $tenfile);
                echo "up file success!";
?>
                <img src='<?php echo $tenfile ?>' width="100" ; height="100">
                <?php
            }
        }
    }
}



                ?>