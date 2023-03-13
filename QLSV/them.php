<?php
// nhận dữ liệu từ form
$ht = $_POST['hoten'];
$msv = $_POST['masv'];
$lop = $_POST['lop'];

// kết nối cơ sở dữ liệu
require_once 'ketnoi.php';
// viết lệnh sql để thêm dl
$themdl = "INSERT INTO sinhvien(masv, hoten, lop) VALUES('$msv','$ht','$lop')";
// echo $themdl;
// exit;
// thực thi câu lệnh 
if(mysqli_query($conn, $themdl)){
    // echo "Thành công";
    header("location:lietke.php");
}
?>