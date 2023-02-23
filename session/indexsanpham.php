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
    <div>
        <?php
        $traicay = array();
        $traicay[0]["tensp"] = "Xoai";
        $traicay[0]["giasp"] = "25";
        $traicay[0]["motasp"] = "Xoai ngon";
        $traicay[0]["hinhanhsp"] = "https://bizweb.dktcdn.net/100/333/744/products/4b918258125bd805814a.jpg?v=1648095375027";

        $traicay[1]["tensp"] = "tao";
        $traicay[1]["giasp"] = "30";
        $traicay[1]["motasp"] = "tao ngon";
        $traicay[1]["hinhanhsp"] = "https://bizweb.dktcdn.net/100/333/744/products/4b918258125bd805814a.jpg?v=1648095375027";

        $traicay[2]["tensp"] = "cam";
        $traicay[2]["giasp"] = "40";
        $traicay[2]["motasp"] = "cam ngon";
        $traicay[2]["hinhanhsp"] = "https://bizweb.dktcdn.net/100/333/744/products/4b918258125bd805814a.jpg?v=1648095375027";

        $traicay[3]["tensp"] = "man";
        $traicay[3]["giasp"] = "50";
        $traicay[3]["motasp"] = "man ngon";
        $traicay[3]["hinhanhsp"] = "https://bizweb.dktcdn.net/100/333/744/products/4b918258125bd805814a.jpg?v=1648095375027";

        ?>
        <form method="post" action="" name="1">
            Danh sách trái cây <br>
            <table border="1">
                <tr>
                    <td> Tên sản phẩm </td>
                    <td> Giá sản phẩm </td>
                    <td> Mô tả </td>
                    <td> Hình ảnh </td>
                </tr>
                <?php
                $n = count($traicay);
                for ($i = 0; $i < $n; $i++) {

                ?>
                    <tr>
                        <td>
                            <?php echo $traicay[$i]["tensp"]; ?>
                        </td>
                        <td>
                            <?php echo $traicay[$i]["giasp"]; ?>
                        </td>
                        <td>
                            <?php echo $traicay[$i]["motasp"]; ?>
                        </td>
                        <td><img src=<?php echo $traicay[$i]["hinhanhsp"]; ?> height="70" , width="70"></td>;
                    </tr>
                <?php
                }
                ?>
                <?php
                if (isset($_SESSION['traicay'])) {
                    $n = count($_SESSION['traicay']);
                    for ($i = 0; $i < $n; $i++) {
                ?>
                        <tr>
                            <td><?php echo $_SESSION['traicay'][$i]["tensp"] ?></td>
                            <td><?php echo $_SESSION['traicay'][$i]["giasp"] ?></td>
                            <td><?php echo $_SESSION['traicay'][$i]["motasp"] ?></td>
                            <td><img src=<?php echo $_SESSION['traicay'][$i]["hinhanhsp"] ?> height="70" , width="70"></td>
                        </tr>
                <?php
                    }
                }
                ?>

            </table>
    </div>