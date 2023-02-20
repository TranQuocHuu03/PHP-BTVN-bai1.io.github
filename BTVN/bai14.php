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
        <p>số n</p>
        <input type="text" name="a" value="<?php if(isset($_POST['a'])) echo $_POST['a'] ?>" placeholder="nhập số n" />
        <button type="submit" name="cal" >Tính</button>
    </label>
    <br>
    <br>
    <label>
        <p>Tổng </p>
        <input type="text" name="b" value="<?php echo $t ?>" placeholder="Kết quả" />
    </label>
    <?php
        $c=0;
        $t=0;
        if(isset($_POST['a'])) {
            $n= $_POST['a'] ; 
            while ($n>0){
                $c = $n%10;
                $t=$t+$c;
                $n = $n/10;
            }
        echo"Kết quả: $t";
        }    
    ?>
    
</form>
</body>
</html>