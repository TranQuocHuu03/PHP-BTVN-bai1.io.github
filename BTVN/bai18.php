<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <div class=container>
            <div class=tittle>
                <p>Thông tin các thành viên</p>
            </div>
            <div class="form">
                <form method="post" action="">
                    <table border="1">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tài khoản</th>
                                <th>Mật khẩu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            $arr = array("ogran" => "123", "huu" => "456", "di" => "789");
                            foreach ($arr as $tk => $pw) {
                                echo "<tr>";
                                echo " <td> $i </td>";
                                echo " <td> $tk </td>";
                                echo " <td> $pw </td>";
                                echo "</tr>";
                                $i++;
                            }

                            ?>
                        </tbody>
                </form>
            </div>
        </div>

    </center>


</body>

</html>