<?php
session_start();
include "db_conn.php";
if (isset($_POST['taikhoan'], $_POST['matkhau'], $_POST['ghichu'], $_POST['anh'])) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $taikhoan = validate($_POST['taikhoan']);
    $matkhau = validate($_POST['matkhau']);
    $anh = validate($_POST['anh']);
    $ghichu = validate($_POST['ghichu']);
    $user_data = 'taikhoan=' . $taikhoan . 'matkhau=' . $matkhau . 'ghichu=' . $ghichu . 'anh=' . $anh;
    // echo $user_data;
    if (empty($taikhoan)) {
        header("location:signup.php?error= Account  is required&$user_data   ");
        exit();
    } else if (empty($matkhau)) {
        header("location:signup.php?error= Password  is required&$user_data   ");
        exit();
    } else if (empty($ghichu)) {
        header("location:signup.php?error= Note  is required&$user_data   ");
        exit();
    } else if (empty($anh)) {
        header("location:signup.php?error= Image is required&$user_data ");
        exit();
    } 
    else {


        $matkhau = md5($matkhau);
        $sql = "SELECT *FROM thanhvien WHERE  taikhoan='$taikhoan' ";
        $result = mysqli_query($conn,  $sql);
        if (mysqli_num_rows($result) > 0) {
            header("location:signup.php?error= The user name is taken try another&$user_data ");
            exit();
        } else {
            $sql2 = "INSERT INTO thanhvien(taikhoan,matkhau,ghichu, anh  ) VALUES ('$taikhoan','$matkhau','$ghichu','$anh') ";
            $result2 = mysqli_query($conn, $sql2);
            if ($result2) {
                header("location:lietke.php?success= Your account has been created successfully");
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
    header("location: lietke.php");
}
?>