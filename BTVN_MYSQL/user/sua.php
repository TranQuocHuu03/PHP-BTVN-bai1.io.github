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

    require_once 'db_conn.php';
    // lấy thông tin về lại 

    $edit_sql = "SELECT * FROM thanhvien WHERE id=$sid";
    $result = mysqli_query($conn, $edit_sql);
    $row = mysqli_fetch_assoc($result);
    // hiển thị thông tin lên form
    ?>
    <div class="container">
        <h1>Form sửa thành viên</h1>
        <form action="update.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="sid" value="<?php echo $sid; ?>" id="">
            <div class="form-group">
                <label for="taikhoan">Tài khoản</label>
                <input type="text" id="taikhoan" class="form-control"  name="taikhoan" value="<?php echo $row['taikhoan'] ?>">
            </div>
            <div class="form-group">
                <label for="matkhau">Mật khẩu</label>
                <input type="text" id="matkhau" class="form-control"  name="matkhau"value="<?php echo $row['matkhau'] ?>">
            </div>
            
            <div class="form-group">
                <label for="ghichu">Ghi chú</label>
                <input type="text" id="ghichu" class="form-control" name="ghichu" value="<?php echo $row['ghichu'] ?>">
            </div>
            <div class="form-group">
                <label for="anh">Hình ảnh thành viên</label>
                <input type="text" id="anh"class="form-control" name="anh"value="<?php echo $row['anh'] ?>">
            </div>
            
            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </form>
    </div>
</body>

</html>