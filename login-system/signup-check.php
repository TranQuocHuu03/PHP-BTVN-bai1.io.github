<?php
session_start();
include "db_conn.php";
if (isset($_POST['uname'], $_POST['password'], $_POST['name'], $_POST['re_password'])) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);
    $repass = validate($_POST['re_password']);
    $name = validate($_POST['name']);
    $user_data = 'uname=' . $uname . 'name=' . $name . 'password=' . $pass . 'Re_password=' . $repass;
    // echo $user_data;
    if (empty($uname)) {
        header("location:signup.php?error= User name  is required&$user_data   ");
        exit();
    } else if (empty($pass)) {
        header("location:signup.php?error= Password  is required&$user_data   ");
        exit();
    } else if (empty($repass)) {
        header("location:signup.php?error= Re_password  is required&$user_data   ");
        exit();
    } else if (empty($name)) {
        header("location:signup.php?error= Name is required&$user_data ");
        exit();
    } else if ($pass !== $repass) {
        header("location:signup.php?error= The confirmation password does  not match&$user_data ");
        exit();
    } else {


        $pass = md5($pass);
        $sql = "SELECT *FROM users WHERE  user_name='$uname' ";
        $result = mysqli_query($conn,  $sql);
        if (mysqli_num_rows($result) > 0) {
            header("location:signup.php?error= The user name is taken try another&$user_data ");
            exit();
        } else {
            $sql2 = "INSERT INTO users(user_name,password, name ) VALUES ('$uname','$pass','$name') ";
            $result2 = mysqli_query($conn, $sql2);
            if ($result2) {
                header("location:signup.php?success= Your account has been created successfully");
                exit();
            } else {
                header("location:signup.php?error= unknown error  occured&$user_data ");
                exit();
            }
        }
        //    $sql="SELECT *FROM users WHERE  user_name='$uname'  AND password='$pass'";
        //    $result = mysqli_query($conn ,  $sql);
        //    if (mysqli_num_rows($result)===1){
        //     $row= mysqli_fetch_assoc($result);
        //     if($row['user_name'] === $uname && $row['password'] === $pass){
        //         // echo "Logged in!";
        //         $_SESSION['user_name']= $row['user_name'];
        //         $_SESSION['name']= $row['name'];
        //         $_SESSION['id']= $row['id'];
        //         header("Location: home.php");
        //         exit();
        //     }
        //     else{
        //         header("location:signup.php?error= Incorrect user name or password  ");
        //         exit();
        //        }

        //    }
        //    else{
        //     header("location:signup.php?error= Incorrect user name or password  ");
        //     exit();
        //    }
    }
} else {
    header("location: signup.php");
}
?>