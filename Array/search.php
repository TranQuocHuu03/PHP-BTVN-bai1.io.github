<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action ="">
            <label>
                <p>Từ cần tra:</p>
                <input type="text" name="a" placeholder="nhập từ" value="<?php if(isset($_POST['a'])) echo $_POST['a'] ?>"/>
            </label>
            <br>
            <br>
            <label>
                <p>Kết quả:</p>
                <input type="text" name="b" placeholder="kết quả" value="<?php  echo $V ?>" />
            </label>
            <br>
            <br>
            <button type="submit" name="cal" >Xác định</button>
            <?php
            $arr=array("dog"=>"chó","cat"=>"mèo","fruit"=>"trái chanh");
            if(isset($_POST['a'])){
                $t=$_POST['a'];
            }
            if(isset($_POST['cal'])){
                foreach($arr as $E => $V){
                    if($E==$t || strtolower($t)==$E){
                    }
                    // else if($t!=$E || strtolower($t)){
                    //     echo "not found!";
                    //     break;
                    // }
                    
                }
            }
            ?>
        </form>
</body>
</html>