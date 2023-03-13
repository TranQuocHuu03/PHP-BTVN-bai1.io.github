<?php
//kết nối database
include "connect.php";

// tạo database
$sql = "CREATE DATABASE cosodulieu";

// thực thi truy vấn
if (mysqli_query($conn, $sql)) {
    echo "Tạo database thành công";
} else {
    echo "Tạo database thất bại";
}






//tạo table
// $sql = "CREATE TABLE thanhvien ( 
//     id  INT (6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
//     taikhoan VARCHAR(30) NOT NULL,
//     pass VARCHAR(30) NOT NULL,
//     level INT(6)
// )";

// Thực thi truy vấn 

// if($conn ->query($sql) ==TRUE){
//     echo" Tạo bảng thành công ";
// }
// else{
//     echo "Tạo bảng không thành công ";
// }




// tạo dữ liệu cho bảng
// $id="";
// $taikhoan="admin";
// $pass="654321";
// $level= 1;
// $sql= "INSERT INTO thanhvien(id, taikhoan, pass, level)
// VALUE('$id','$taikhoan','$pass','$level')";

// mysqli_query($conn, $sql)



//Lấy dữ liệu ra 
// $sql = "SELECT  * FROM thanhvien";
// $result = mysqli_query($conn, $sql);
// if (mysqli_num_rows($result) > 0) {
//     while ($row = mysqli_fetch_array($result)) {
//         echo $row['id'] . "|" . $row['taikhoan'] . "|" . $row['pass'] . "|" . $row['level'];
//         echo "<br>";
//     }
// };






//xóa dữ liệu trong bảng

// $sql = "DELETE FROM thanhvien WHERE id=  '2'  ";
// mysqLi_query($conn ,$sql);






// sửa dữ liệu trong table

// $id="4";
// $taikhoan="hhhhhhh";
// $pass="hhhhhhhhhh";
// $level = 4;
// $sql = "UPDATE thanhvien SET id='$id' , taikhoan='$taikhoan', pass='$pass', level='$level'
// WHERE id=1
// ";
// mysqLi_query( $conn, $sql);

?>
