<?php
// nhận dữ liệu từ form
$taikhoan = $_POST['taikhoan'];
$matkhau = $_POST['matkhau'];

$ghichu= $_POST['ghichu'];
$anh= $_POST['anh'];
$id= $_POST['sid'];
// kết nối cơ sở dữ liệu
require_once 'db_conn.php';
// viết lệnh sql để thêm dl
$updatesql = "UPDATE thanhvien SET taikhoan='$taikhoan',matkhau='$matkhau', ghichu='$ghichu', anh='$anh' WHERE id=$id";
// echo $updatesql;
// exit;
// thực thi câu lệnh 
if(mysqLi_query($conn, $updatesql)){
    // echo "Thành công";
    header("location:lietke.php");
}
?>