<?php
    $server="localhost";
    $user ="root";
    $pass="";
    $database="cosodulieu";
    $conn= new mysqli($server, $user,$pass,$database);
    if($conn){
        mysqli_query($conn,"SET NAMES 'utf8'");
        echo "đã kết nối thành công!";
        echo "<br>";
    }
    else{
        echo" kết nối thất bại";
    }
?>