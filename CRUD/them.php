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
        .container{
            border: 5px solid black;
            width: 300px;
            height:500px;
            background-color:aqua;
            margin-top: 70px;
        }
    </style>
</head>

<body>
    <center>
        <div class="container">
    <form method="post" action="">
        <h1>Add type fruits</h1>
        <label>
            <p>Tên sản phẩm</p>
            <input type="text" name="tensp" placeholder="nhập tên" />
        </label>
        <br>
        <br>
        <label>
            <p>Gía tiền</p>
            <input type="text" name="giasp" placeholder="nhập giá" />
        </label>
        <br>
        <br>
        <label>
            <p>Mô tả</p>
            <input type="text" name="motasp" placeholder="nhập mô tả" />
        </label>
        <br>
        <br>
        <label>
            <p>Hình ảnh</p>
            <input type="text" name="hinhanhsp" placeholder="Gán link hình ảnh" />
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
        if (isset($_SESSION['traicay']))
            $n = count($_SESSION['traicay']);
        $_SESSION['traicay'][$n]['tensp'] = $_POST['tensp'];
        $_SESSION['traicay'][$n]['giasp'] = $_POST['giasp'];
        $_SESSION['traicay'][$n]['motasp'] = $_POST['motasp'];
        $_SESSION['traicay'][$n]['hinhanhsp'] = $_POST['hinhanhsp'];
        header("location:index.php");
    }
    ?>
</body>

</html>