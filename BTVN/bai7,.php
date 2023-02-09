<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
    <form method="post" action=""> 
        <input type="text" name="soa" value="" placeholder="Nhập số a"/>
        <br>
        <br>
        <input type="submit" name="cal" value="Kiểm tra"/>
    </form>
</div>
<br>
<div style="width:200px; height:auto; background-color:yellow" class="kq">
<?php
if (isset($_POST['soa']))
        {
            // Lấy giá trị của ô input có tên là number theo phương thức POST
            $a = (int)$_POST['soa'];
            $b = 10;
            for($i=1;$i<=$a;$i++){
                for($x=1; $x<=$b;$x++){
                echo "$i"."*"."$x = ".$i*$x."<br>";
                }
                echo "<br>";
                echo "<br>";
                echo "<br>";
            }
        }
?>   
</div>
</body>
</html>