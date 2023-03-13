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
    <div class="container">
        <h1>ĐĂNG KÝ TÀI KHOẢN</h1>
        <form action="regis.php" method="post">
            <div class="form-group">
                <label for="hoten">Họ và tên</label>
                <input type="text" id="hoten" class="form-control" name="hoten">
            </div>
            <div class="form-group">
                <label for="msv">Tên đăng nhập</label>
                <input type="text" id="msv" class="form-control" name="tennhap">
            </div>
            <div class="form-group">
                <label for="lop">Mật khẩu</label>
                <input type="password" id="lop" class="form-control" name="mk">
            </div>
            <div class="form-group">
                <label for="lop">Email</label>
                <input type="text" id="lop" class="form-control" name="email">
            </div>
            <div class="form-group">
                <label for="lop">giới tính</label>
                <br>
                <input type="radio" name="optradio">Nam
                </t >
                <input type="radio" name="optradio">Nữ
            </div>
            <div class="form-group">
                <label for="lop">Địa chỉ</label>
                <input type="text" id="lop" class="form-control" name="dchi">
            </div>


            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
</body>

</html>