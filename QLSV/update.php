<?php
// nhận dữ liệu từ form
$ht = $_POST['hoten'];
$msv = $_POST['masv'];
$lop = $_POST['lop'];
$id= $_POST['sid'];
// kết nối cơ sở dữ liệu
require_once 'ketnoi.php';
// viết lệnh sql để thêm dl
$updatesql = "UPDATE sinhvien SET masv='$msv',hoten='$ht', lop='$lop' WHERE id=$id";
// echo $updatesql;
// exit;
// thực thi câu lệnh 
if(mysqli_query($conn, $updatesql)){
    // echo "Thành công";
    header("location:lietke.php");
}
?>