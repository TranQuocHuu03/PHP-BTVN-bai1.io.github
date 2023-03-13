<?php
    // lấy dữ liệu cần xóa
    include "connect.php";
    $id=$_GET['delete'];
   
    $xoa_sql="DELETE FROM sanpham WHERE id=$id";
    mysqLi_query($conn, $xoa_sql);
    // echo "xoa thanh công";
    // trở lại trang show dữ liệu

    header("location:product.php");
?>