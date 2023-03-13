<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Them sinh vien</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php
     include 'connect.php';
    $sid = $_GET['edit'];
    // echo $id;
    // ket noi

   
    // lấy thông tin về lại 

    $edit_sql = "SELECT * FROM sanpham WHERE id=$sid";
    $result = mysqLi_query($conn, $edit_sql);
    $row = mysqli_fetch_assoc($result);
    // hiển thị thông tin lên form
    ?>
    <div class="container">
        <h1>Form sửa sản phẩm</h1>
        <form action="update.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="sid" value="<?php echo $sid; ?>" id="">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="hoten" class="form-control" name="name" value="<?php echo $row['name'] ?>">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" id="price" class="form-control" name="price" value="<?php echo $row['price'] ?>">
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <span> <img src="<?php echo $row['image']?>" width="50px" height ="50px"></span>
                <input type="file" id="image" class="form-control" name="images" >
            </div>
            <div class="form-group">
                <label for="warranty">Warranty</label>
                <input type="text" id="warranty" class="form-control" name="warranty" value="<?php echo $row['warranty'] ?>">
            </div>
            <button type="submit" class="save btn-primary">Cập nhật</button>
        </form>
    </div>
</body>

</html>