<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="signup-check.php" method="post">
        <h2>Sign up</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>

        <?php if (isset($_GET['success'])) { ?>
            <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>

        <label>Tài khoản</label>
        <?php if (isset($_GET['taikhoan'])) { ?>
            <input type="text" 
            name="taikhoan" 
            placeholder="tài khoản" 
            value="<?php echo $_GET['taikhoan']; ?>">
        <?php } else { ?>
            <input type="text" 
            name="taikhoan" 
            placeholder="   Tài khoản">
        <?php } ?>


        <label>Mật khẩu</label>
        <?php if (isset($_GET['matkhau'])) { ?>
            <input type="password" 
            name="matkhau" 
            placeholder="Mật khẩu" 
            value="<?php echo $_GET['matkhau']; ?>">
        <?php } else { ?>
            <input type="password" 
            name="matkhau" 
            placeholder="Mật khẩu">
        <?php } ?>



        <!-- <label>Name</label>
        <input type="text" name="name" placeholder="Name">
        <br> -->

        <!-- <label>User Name</label>
        <input type="text" name="uname" placeholder="User name">
        <br> -->
        <label>Ghi chú</label>
        <input 
        type="text" 
        name="ghichu" 
        placeholder=" Ghi chú">
        <br>

        <label>Ảnh thành viên</label>
        <input 
        type="text" 
        name="anh" 
        placeholder="Ảnh">
        <br>
        <button type="submit"> Signup</button>
        <a href="index.php" class="ca"> Already have an account</a>
    </form>
</body>

</html>