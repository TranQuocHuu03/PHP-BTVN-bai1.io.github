<?php
// nhận dữ liệu từ form
$ht = $_POST['hoten'];
$msv = $_POST['msv'];
$lop = $_POST['lop'];

// kết nối cơ sở dữ liệu
require_once 'ketnoi.php';
// viết lệnh sql để thêm dl
$themdl = "INSERT INTO sinhvien(msv, hoten, lop) VALUES('$msv','$ht','$lop')";
// echo $themdl;
// exit;
// thực thi câu lệnh 
mysqli_query($conn, $themdl);
echo "Thành công";