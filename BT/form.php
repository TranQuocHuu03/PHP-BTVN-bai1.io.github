<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
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
            <button type="submit" name="cal" >Tính</button>
        </form>
    </div>
    </div>
    <?php
    if(isset($_POST['cal'] ) ){
        $soa = (int)$_POST['a'];
        $sob=(int)$_POST['b'];
        $tong =$soa+$sob;
        echo" tổng 2 số là: $tong";
    }
       ?>
    </center>
   
</body>
</html>