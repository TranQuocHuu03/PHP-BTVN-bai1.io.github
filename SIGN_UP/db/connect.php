<?php
     $conn = mysqli_connect("localhost","root","","SIGN_UP");
    if($conn->connect_error){
        die("kết nối không thành công:". $conn->connect_error);
    }
    echo "kết nối thành công"
?>