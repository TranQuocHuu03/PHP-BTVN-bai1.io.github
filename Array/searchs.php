<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<form action="" method="post">
    <table>
        <tr>
            <td>Tra Từ: </td>
            <td><input type="text" name="name"></td>
        </tr>
    </table>
        <input name="btn-sub" type="submit" value="Đăng nhập"> <br>
        <td>Kết quả:</td>
    </form>
<body>
<?php
$dict=array("ogran"=>"cam","lemon"=>"chanh","banana"=>"chuối");
    if(isset($_POST["name"])){
        $name = $_POST["name"];
    }
    if(isset($_POST["btn-sub"])){
        foreach($dict as$u=>$p){
            if($u==$name|| strtolower($name)==$u){
                echo $p;
                break;
            }
            // else{
            //     echo "not found!";
            //     break;
            // }
        }


    }
    ?>
    
    
</body>
</html>