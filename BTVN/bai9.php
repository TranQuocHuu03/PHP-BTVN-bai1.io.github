<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class=container>
        <div class=tittle><p>tính tổng</p></div>
        <div class="form">
        <form method="post" action ="">
            <label>
                <p>số a</p>
                <input type="text" name="a" placeholder="nhập số" />
            </label>
            <br>
            <br>
            <label>
                <p>số b</p>
                <input type="text" name="b" placeholder="nhập số" />
            </label>
            <br>
            <br>
            
            <br>
            <br>
            <button type="submit" name="cal" >Kiểm tra</button>
        </form>
    </div>
    </div>
    <?php
    if(isset($_POST['a'],$_POST['b'])){
    $a=(int)$_POST['a'];
    $b=(int)$_POST['b'];
    if($a<$b){
        for ($i=$a+1; $i<$b ;$i++){
            if($i%3==0)
            {
                echo "$i chia hết cho 3 .<br> ";
            } 
        }
    }
    else if($a>$b){
        for ($i=$b+1 ; $i<$a;$i++){
            if($i%3==0)
            {
                echo "$i chia hết cho 3 .<br> ";
            } 
        }
    }
    }
?>
</body>
</html>