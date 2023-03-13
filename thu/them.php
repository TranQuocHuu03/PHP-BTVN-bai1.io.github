<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Them san pham</title>
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
    <div class="container">
        <h1>Form thêm thông tin sản phẩm</h1>
        <form action="them.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="masp">Mã sản phẩm</label>
                <input type="text" id="masp" class="form-control"  name="masp">
            </div>
            <div class="form-group">
                <label for="tensp">Tên sản phẩm</label>
                <input type="text" id="tensp" class="form-control"  name="tensp">
            </div>
            <!-- <div class="form-group">
                <label for="loaisp">Loại sản phẩm</label>
                <input type="text" id="loaisp" class="form-control" name="loaisp">
            </div> -->
            <div class="form-group">
                <label for="anhsp">ảnh sản phẩm</label>
                <input type="text" id="anhsp" class="form-control" name="anhsp">
            </div>
            <div class="form-group">
                <label for="slsp">Số lượng sản phẩm</label>
                <input type="text" id="slsp"class="form-control" name="slsp">
            </div>
            <div class="form-group">
                <label for="giasp">Gía sản phẩm</label>
                <input type="text" id="giasp"class="form-control" name="giasp">
            </div>
            <button type="submit" name="save" class="btn btn-primary">Add</button>
        </form>
        <?php
            include "connect.php";
            if(isset($_POST['save'])){
                $masp=$_POST['masp'];
                $tensp=$_POST['tensp'];
                $giasp=$_POST['giasp'];
                $slsp=$_POST['slsp'];
                $anhsp=$_POST['anhsp'];
               
                $add="INSERT INTO danhsach_sp( masp, tensp, gia, sl, h_anh) VALUES('$masp', '$tensp','$giasp','$slsp','$anhsp')";
            if(mysqLi_query($conn,$add)){
                header("location: show.php");
            }
            }
        ?>
    </div>
</body>
</html>