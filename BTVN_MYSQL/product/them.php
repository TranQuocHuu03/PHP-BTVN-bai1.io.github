<?php
 if(isset($_POST['save'])){
    if (isset($_FILES['anhsp'])) {
        if ($_FILES['anhsp']['size'] == 0) {
            echo "bạn chưa chọn file";
        } else {
            if (isset($_FILES['anhsp'])) {
                $file = $_FILES['anhsp'];
                $tenfile = $file['name'];
                // move_uploaded_file($file['tmp_name'], $tenfile);
                move_uploaded_file($file['tmp_name'],   $tenfile);
                echo "up file success!";

            }
        }
    }}
// nhận dữ liệu từ form
$masp = $_POST['masp'];
$tensp = $_POST['tensp'];
// $loaisp = $_POST['loaisp'];
$anhsp = $tenfile;
$slsp = $_POST['slsp'];
$giasp = $_POST['giasp'];
 

// kết nối cơ sở dữ liệu
require_once 'ketnoi.php';
// viết lệnh sql để thêm dl
$them = "INSERT INTO sp( masp, tensp,  slsp, giasp, imagesp) VALUES('$masp','$tensp','$slsp','$giasp','$anhsp')";
// echo $themdl;
// exit;
// thực thi câu lệnh 
if(mysqLi_query($conn, $them)){
    // echo "Thành công";
    header("location:lietke.php");
}
 
?>