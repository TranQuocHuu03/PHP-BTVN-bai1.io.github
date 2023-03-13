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
    <style>
        .container {
            width: 500px;
            height: 400px;
            background-color: aqua;
            border: 3px solid black;
        }

        .container form {
            margin-top: 50px;
        }
    </style>
</head>

<body>
    <?php
    if (isset($_GET['edit']) && ($_GET['edit']) >= 0) {
        $tensp = $_SESSION['traicay'][$_GET['edit']]["tensp"];
        $giasp = $_SESSION['traicay'][$_GET['edit']]["giasp"];
        $motasp = $_SESSION['traicay'][$_GET['edit']]["motasp"];
        $hasp = $_SESSION['traicay'][$_GET['edit']]["hinhanhsp"];
    }
    if (isset($_POST['cal'])) {
        $n = 0;
        if (isset($_SESSION['traicay'])) {
            $n = count($_SESSION['traicay']);
            $_SESSION['traicay'][$_GET['edit']]['tensp'] = $_POST['name'];
            $_SESSION['traicay'][$_GET['edit']]['giasp'] = $_POST['price'];
            $_SESSION['traicay'][$_GET['edit']]['motasp'] = $_POST['descrypt'];
            $_SESSION['traicay'][$_GET['edit']]['hinhanhsp'] = $_POST['image'];
            header("location:index.php");
        }
    }
    ?>
    <center>
        <div class="container">

            <form border="4" action="" method="post">
                <h1>Cập nhật lại thông tin mới</h1>
                <label for="">Tên trái cây
                    <br>
                    <input type="text" name="name" value="<?php echo $tensp; ?>">
                </label>
                <br>
                <br>
                <label for="">Gía
                    <br>
                    <input type="text" name="price" value="<?php echo $giasp; ?>">
                </label>
                <br>
                <br>
                <label for="">Mô tả
                    <br>
                    <input type="text" name="descrypt" value="<?php echo $motasp; ?>">
                </label>
                <br>
                <br>
                <label for="">Hình ảnh
                    <br>
                    <input type="text" name="image" value="<?php echo $hasp; ?>">
                </label>
                <br>
                <br>
                <button style="background-color:coral;" name="cal">Edit</button>
            </form>
        </div>
    </center>
</body>

</html>