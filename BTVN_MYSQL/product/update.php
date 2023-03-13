<?php
// nhận dữ liệu từ form
$masp = $_POST['masp'];
$tensp = $_POST['tensp'];
$anhsp = $_FILES['anhsp']['name'];
$image_tmp_name=$_FILES['anhsp']['tmp_name'];
move_uploaded_file($image_tmp_name, $anhsp);
$slsp= $_POST['slsp'];
$giasp= $_POST['giasp'];
$id= $_POST['sid'];
// kết nối cơ sở dữ liệu
require_once 'ketnoi.php';
// viết lệnh sql để thêm dl
$updatesql = "UPDATE sp SET masp='$masp',tensp='$tensp', imagesp='$anhsp', slsp='$slsp', giasp='$giasp' WHERE id=$id";
// echo $updatesql;
// exit;
// thực thi câu lệnh 
if(mysqLi_query($conn, $updatesql)){
    // echo "Thành công";
    header("location:lietke.php");
}
?>