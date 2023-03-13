<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            width:500px;
            height:auto;
            margin-top: 100px;
        }
        .tittle{
            width:500px;
            height:100px;
            background-color:coral;
            color:aqua;
        }
        .tittle p{
            padding: 35px;
            font-size: 25px;
        }
        .form{
            width:500px;
            height:auto;
            background-color:darksalmon ;
        }
        button:hover{
            cursor: pointer;
        }
        button{
            background-color:aqua ;
        }
        label input{
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <center>
    <div class=container>
        <div class=tittle><p>Đăng nhập</p></div>
        <div class="form">
        <form method="post" action ="">
            <label>
                Tài khoản:
                <input type="text" name="tk" placeholder="nhập tài khoản" />
            </label>
            <br>
            <br>
            <label>
                Passwork:
                <input type="text" name="pw" placeholder="nhập passwork" />
            </label>
            <br>
            <br>
            <br>
            <br>
            <button type="submit" name="cal" >Đăng nhập</button>
        </form>
    </div>
    </div>
    
    </center>
    <?php
    session_start();
        if(isset($_SESSION['tk'])){
            header('location:ATM.php'); // kiểm tra xem tk có tồn tại chưa nếu r vào luôn trang đó , nếu chưa bảo mình tk  
        }
    $tks = ("123");
    $pws= ("abc");
    if(isset($_POST["cal"])){
        $tk=$_POST['tk'];
        $pw=$_POST['pw'];
        if($tk== $tks && $pw==$pws){
            $_SESSION['tk']=$tk;   // hướng đến trang mình muốn đến
            header("Location: ATM.php");
            exit();
        }
        else if($tk!= $tks && $pw==$pws ){
            echo "<script> alert('Tên tài khoản sai xin vui lòng kiểm tra lại!') </script>";
        }
        else if($tk == $tks && $pw!=$pws){
            echo "<script> alert('Passwork sai xin vui lòng kiểm tra lại!') </script>";
        }
        else{
            echo "<script> alert('Tên tài khoản hoặc passwork sai xin vui lòng kiểm tra lại!') </script>";
        }
    }
    ?>
    
</body>
</html> 
