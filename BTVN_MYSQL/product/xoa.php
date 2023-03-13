<?php
    // lấy dữ liệu cần xóa

    $id=$_GET['delete'];
    require_once 'ketnoi.php';
    $xoa_sql="DELETE  FROM sp WHERE id=$id";
    mysqli_query($conn, $xoa_sql);
    // echo "xoa thanh công";
    // trở lại trang show dữ liệu

    header("location:lietke.php");
?>