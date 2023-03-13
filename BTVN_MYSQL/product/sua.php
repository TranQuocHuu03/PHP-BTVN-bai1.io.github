<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa thông tin sản phẩm</title>
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
    $sid = $_GET['edit'];
    // echo $id;
    // ket noi

    require_once 'ketnoi.php';
    // lấy thông tin về lại 

    $edit_sql = "SELECT * FROM sp WHERE id=$sid";
    $result = mysqli_query($conn, $edit_sql);
    $row = mysqli_fetch_assoc($result);
    // hiển thị thông tin lên form
    ?>
    <div class="container">
        <h1>Form sửa sản phẩm</h1>
        <form action="update.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="sid" value="<?php echo $sid; ?>" id="">
            <div class="form-group">
                <label for="masp">Mã sản phẩm</label>
                <input type="text" id="masp" class="form-control"  name="masp" value="<?php echo $row['masp'] ?>">
            </div>
            <div class="form-group">
                <label for="tensp">Tên sản phẩm</label>
                <input type="text" id="tensp" class="form-control"  name="tensp"value="<?php echo $row['tensp'] ?>">
            </div>
            
            <div class="form-group">
                <label for="anhsp">ảnh sản phẩm</label>
                <span> <img src="<?php echo $row['imagesp']?>" width="50px" height ="50px"></span>
                <input type="file" id="anhsp" class="form-control" name="anhsp">
            </div>
            <div class="form-group">
                <label for="slsp">Số lượng sản phẩm</label>
                <input type="text" id="slsp"class="form-control" name="slsp"value="<?php echo $row['slsp'] ?>">
            </div>
            <div class="form-group">
                <label for="giasp">Gía sản phẩm</label>
                <input type="text" id="giasp"class="form-control" name="giasp"value="<?php echo $row['giasp'] ?>">
            </div>
            
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </form>
    </div>
</body>

</html>