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
    
    <form method="post" action ="">
            <label>
                <p>Nhập tên:</p>
                <input type="text" name="a" placeholder="Nhập bất kỳ" />
            </label>
            <br>
            <br>
            <button type="submit" name="cal" >Xác nhận</button>
            <?php
        
                if(isset($_POST['a'])){
                    $user=$_POST['a'];
                }
                if(isset($_POST['cal'])){
                    $_SESSION['tk']=$user;
                    header('Location:hi.php');
                }
            ?>
    </form>
</body>
</html>