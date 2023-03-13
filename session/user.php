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
      
        <form method="post" action="" name="1">
            Danh sách thông tin người dùng <br>
            <table border="1">
                <tr>
                    <td> Tên người dùng </td>
                    <td> Mật khẩu </td>
                    <td> Action </td>
                </tr>
                <?php
                $user=$_SESSION['users'];
                $n = count($user);
                for ($i = 0; $i < $n; $i++) {
                ?>
                    <tr>
                        <td>
                            <?php echo $user[$i]["ten"]; ?>
                        </td>
                        <td>
                            <?php echo $user[$i]["mk"]; ?>
                        </td>
                        <td><a href="xoa.php? xoa=<?php echo ($i) ?>">xoa</a></td>
                    </tr>
                <?php
                }
                ?>
            </table>
    </div>