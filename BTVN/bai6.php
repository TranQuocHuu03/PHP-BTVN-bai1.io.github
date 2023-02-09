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
        <input type="text" name="dai" value="" placeholder="Nhập chiều dài"/>
        <br>
        <br>
        <input type="text" name="rong" value="" placeholder="Nhập chiều rộng"/>
        <br>
        <br>
        <input type="submit" name="cal" value="Kiểm tra"/>
    </form>
</div>
<br>
<div style="width:200px; height:auto; background-color:yellow" class="kq">
<?php
if (isset($_POST['dai'],$_POST['rong']))
        {
            // Lấy giá trị của ô input có tên là number theo phương thức POST
            $d = (int)$_POST['dai'];
            $r = (int)$_POST['rong'];
            for($i=1;$i<=$r;$i++){
                for($x=1;$x<=$d;$x++){
                    echo"*";
                }
                echo"<br>";
            }
        }
?>   
</div>
</body>
</html>