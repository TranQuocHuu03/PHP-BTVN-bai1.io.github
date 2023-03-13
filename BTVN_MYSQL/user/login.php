<?php
session_start();
include "db_conn.php";
if(isset($_POST['taikhoan'] , $_POST['matkhau'])){
    function validate($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }
    $taikhoan= validate($_POST['taikhoan']);
    $matkhau= validate($_POST['matkhau']);
    if(empty($taikhoan)){
        header("location:index.php?error= Account  is required   ");
        exit();

    }
    else if(empty($matkhau)){
        header("location:index.php?error= Password  is required   ");
        exit();
    }
    else{
        $matkhau = md5($matkhau);
       $sql="SELECT *FROM thanhvien WHERE  taikhoan='$taikhoan'  AND matkhau='$matkhau'";
       $result = mysqli_query($conn ,  $sql);
       if (mysqli_num_rows($result)===1){
        $row= mysqli_fetch_assoc($result);
        if($row['taikhoan'] === $taikhoan && $row['matkhau'] === $matkhau){
            // echo "Logged in!";
            $_SESSION['taikhoan']= $row['taikhoan'];
            $_SESSION['matkhau']= $row['matkhau'];
            $_SESSION['id']= $row['id'];
            header("Location: home.php");
        }
      
       }
       else{
        header("location:index.php?error= Incorrect user name or password  ");
        exit();
       }
    }
}

else{
    header("location: index.php");
}
