<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
session_start();
?>
<form method="post" action="" name="1">
    <button type="submit" name="click" >Gửi</button>
</form>


<?php
if(isset($_POST['click'])){
    if(isset($_SESSION['users'])){
    header("location:user.php");
    }
}
        $user = array();
        $user[0]["ten"] = "huu";
        $user[0]["mk"] = "25";
       
        $user[1]["ten"] = "ti";
        $user[1]["mk"] = "30";
        

        $user[2]["ten"] = "di";
        $user[2]["mk"] = "40";
       

        $user[3]["ten"] = "nam";
        $user[3]["mk"] = "50";

        $user[4]["ten"] = "hồng";
        $user[4]["mk"] = "90";

        $user[5]["ten"] = "kha";
        $user[5]["mk"] = "60";
       
        $_SESSION['users']=$user;

        ?>
</body>
</html>