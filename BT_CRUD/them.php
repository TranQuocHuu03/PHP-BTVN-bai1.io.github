<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>

<body>
    <center>
        <div class="container">
    <form method="post" action="">
        <h1>Thông tin người dùng</h1>
        <label>
            <p>Tên</p>
            <input type="text" name="ten" placeholder="nhập tên" />
        </label>
        <br>
        <br>
        <label>
            <p>mật khẩu</p>
            <input type="text" name="mk" placeholder="nhập mật khẩu" />
        </label>
        <br>
        <br>
        
        <button type="submit" name="cal">Add</button>
    </form>
        </div>
    </center>
    <?php
    if (isset($_POST['cal'])) {
        $n = 0;
        if (isset($_SESSION['user']))
            $n = count($_SESSION['user']);
        $_SESSION['user'][$n]['ten'] = $_POST['ten'];
        $_SESSION['user'][$n]['mk'] = $_POST['mk'];
        header("location:index.php");
    }
    ?>
</body>

</html>