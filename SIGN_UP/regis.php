<?php   

require 'db/connect.php';
    echo "<pre>";
    print_r($_POST);

    if(isset($_POST['btn'])){
        
        $fullname =$_POST['hoten'];
        $username =$_POST['tennhap'];
        $password =$_POST['mk'];
        $email =$_POST['email'];
        $address =$_POST['dchi'];
        $gender =$_POST['optradio'];

      if(!empty($fullname) && !empty($username)&& !empty($password)&& !empty($email)&& !empty($address)&& !empty($gender)){
        // echo "đã submit";
        // echo "<pre>";
        // print($_POST);
        $sql="INSERT INTO users (hoten,tennhap,mk,optradio,email,dchi)
        VALUES('$fullname','$username',md5('$password'),'$gender','$email','$address')" ;
        if($conn->query($sql)===TRUE){
            echo"Thêm dl thành công";
        }
        else{
            echo "Lỗi {$sql}".$conn->error;
        }
      }
      else{
        echo "Bạn cần nhập đầy thủ thông tin trước khi đăng ký!";
      }


    }
?>