<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
<form action="login.php" method="post">
        <h2>Log In</h2>
        
        <label>User Name</label>
        <input type="text" name="uname" placeholder="user name">
        <br>
        <label>Password</label>
        <input type="password" name="password" placeholder="password">
        <br>
        <button type="submit" name="login"> Login</button>
        <a href="signup.php" class="ca" > Create an account</a>
        </form>

        <?php
        include "connect.php";

        session_start();

        if(isset($_SESSION['mySession'])){
            header("location: index.php");
        }
        if(isset($_POST['login'])){
            $username=$_POST['uname'];
            $password=$_POST['password'];
            $sql="SELECT * FROM thanhvien WHERE uname='$username' and password='$password'";
            $result= mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) == 1){
                $_SESSION['mySession'] =$username;
                header("location: index.php");
            }
            else{
                echo"Tài khoản hoặc mật khẩu sai!";
            }
        }
        ?>
</body>
</html>