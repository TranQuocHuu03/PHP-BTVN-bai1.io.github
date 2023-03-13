<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="signup.php" method="post">
        <h2>Sign up</h2>
        



        <!-- <label>Name</label>
        <input type="text" name="name" placeholder="Name">
        <br> -->

        <label>User Name</label>
        <input type="text" name="uname" placeholder="User name">
        <br>
        <label>Password</label>
        <input type="password" name="password" placeholder="Password">
        <br>

        <!-- <label>Re password</label>
        <input type="password" name="re_password" placeholder="Re_password">
        <br> -->
        <button type="submit" name="btn"> Signup</button>
        <a href="index.php" class="ca"> Already have an account</a>
    </form>
    <?php
    include "connect.php";
    if(isset($_POST['btn'])){
        $id="";
        $uname=$_POST['uname'];
        $password=$_POST['password'];
        $level= 2;

        $sql= "INSERT INTO thanhvien (id , uname, password, level) VALUE('$id','$uname','$password','$level')";

        mysqli_query($conn, $sql);

        header("location: login.php");
    }
    ?>
</body>

</html>