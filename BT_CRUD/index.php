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
            <form method="post" action="" name="1">
                <h1>Danh sách trái cây </h1><br>
                <table border="5">
                    <tr>
                        <td> STT </td>
                        <td> Tên người dùng </td>
                        <td> Mật khẩu người dùng</td>
                    </tr>
                    <?php
                    if (isset($_SESSION['user'])) {
                        $n = count($_SESSION['user']);
                        for ($i = 0; $i < $n; $i++) {
                    ?>
                            <tr>
                                <td><?php echo $i + 1  ?></td>
                                <td><?php echo $_SESSION['user'][$i]["ten"] ?></td>
                                <td><?php echo $_SESSION['user'][$i]["mk"] ?></td>
                                <td><a href="xoa.php? xoa=<?php echo ($i) ?>">Xóa</a></td>
                               
                            </tr>
                    <?php
                        }
                    }
                    if (isset($_GET['xoa']) ) {
                        array_splice($_SESSION['user'], $_GET['xoa'], 1);
                    }
                    ?>
                </table>
                <br>
                <br>
                <a href="http://localhost/PHP/BT_CRUD/them.php">
                    <button type="button" name="them">Add</button>
                </a>
                <?php
                if (isset($_POSST['them'])) {
                    header("location:them.php");
                }
                ?>
            </form>
        </div>
    </center>
</body>

</html>