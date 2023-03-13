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
    <?php
    if (isset($_GET['edit']) && ($_GET['edit']) >= 0) {
        $ten = $_SESSION['user'][$_GET['edit']]["ten"];
        $mk = $_SESSION['user'][$_GET['edit']]["mk"];
    }
    if (isset($_POST['cal'])) {
        $n = 0;
        if (isset($_SESSION['user'])) {
            $n = count($_SESSION['user']);
            $_SESSION['user'][$_GET['edit']]['ten'] = $_POST['name'];
            $_SESSION['user'][$_GET['edit']]['mk'] = $_POST['password'];

            header("location:index.php");
        }
    }
    ?>
    <center>
        <div class="container">

            <form border="4" action="" method="post">
                <h1>Cập nhật lại thông tin mới</h1>
                <label for="">Tên người dùng
                    <br>
                    <input type="text" name="name" value="<?php echo $ten; ?>">
                </label>
                <br>
                <br>
                <label for="">Mật khẩu người dùng
                    <br>
                    <input type="text" name="password" value="<?php echo $mk; ?>">
                </label>
                <br>
                <br>
                <button style="background-color:coral;" name="cal">Edit</button>
            </form>
        </div>
    </center>
</body>

</html>