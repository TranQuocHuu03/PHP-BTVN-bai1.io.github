<?php
// nhận dữ liệu từ form
$name = $_POST['name'];
$price = $_POST['price'];
$image = $_FILES['images']['name'];
$image_tmp_name=$_FILES['images']['tmp_name'];
move_uploaded_file($image_tmp_name, $image);
$id= $_POST['sid'];
$warranty= $_POST['warranty'];
// kết nối cơ sở dữ liệu
include 'connect.php';
// viết lệnh sql để thêm dl
$updatesql = "UPDATE sanpham  SET name='$name',image='$image', price='$price' ,warranty='$warranty' WHERE id=$id";
// echo $updatesql;
// exit;
// thực thi câu lệnh 
if(mysqli_query($conn, $updatesql)){
    
    // echo "Thành công";
    header("location:product.php");
}
?>