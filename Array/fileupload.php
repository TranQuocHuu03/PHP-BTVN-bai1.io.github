<?php
    // $a=$_FILES['hinhanh'];
    // print_r($a);

    if(isset($_POST['btn'])){
        if(isset($_FILES['hinhanh'])){
            if($_FILES['hinhanh']['size']==0){
                echo "bạn chưa chọn file";
            }
            else{
                move_uploaded_file($_FILES['hinhanh']["tmp_name"],'./img' . $_FILES['hinhanh']['name']);
                echo "up file success!";
            }
        }
    }
?>