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
            background-color: aquamarine;
            height: auto;
            width: 800px;
            border: 3px solid black;
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <center>

        <div class="container">
            <form method="post" action="" name="1">
                <h1>Danh sách trái cây </h1><br>
                <table border="5">
                    <tr>
                        <td> STT </td>
                        <td> Name </td>
                        <td> Email </td>
                        <td> Website </td>
                        <td> comment </td>
                        <td> giới tính </td>
                    </tr>
                    <?php
                    if (isset($_SESSION['tt'])) {
                        $n = count($_SESSION['tt']);
                        for ($i = 0; $i < $n; $i++) {
                    ?>
                            <tr>
                                <td><?php echo $i + 1  ?></td>
                                <td><?php echo $_SESSION['tt'][$i]["name"] ?></td>
                                <td><?php echo $_SESSION['tt'][$i]["email"] ?></td>
                                <td><?php echo $_SESSION['tt'][$i]["website"] ?></td>
                                <td><?php echo $_SESSION['tt'][$i]["comment"] ?></td>
                                <td><?php echo $_SESSION['tt'][$i]["gender"] ?></td>
                                <td><a href="xoa.php? xoa=<?php echo ($i) ?>">Xóa</a></td>
                                <td><a href="sua.php? edit=<?php echo ($i) ?>">Sửa</a></td>
                               
                            </tr>
                    <?php
                        }
                    }
                    ?>
                </table>
                <br>
                <br>
                <a href="http://localhost/PHP/CRUD/them.php">
                    <button style="background-color:forestgreen; width:50px; height:20px " type="button" name="them">Add</button>
                </a>
                <?php
                if (isset($_POST['them'])) {
                    header("location:them.php");
                }
                ?>
            </form>
        </div>
    </center>
</body>

</html>