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
        <input type="text" name="sob" value="" placeholder="Nhập số b"/>
        <br>
        <br>
        <input type="submit" name="cal" value="Kiểm tra"/>
    </form>
</div>
<br>
<div style="width:200px; height:auto; background-color:yellow" class="kq">
<?php
if (isset($_POST['soa'],$_POST['sob']))
        {
            // Lấy giá trị của ô input có tên là number theo phương thức POST
            $a = (int)$_POST['soa'];
            $b = (int)$_POST['sob'];
            if($a>$b){
                for($i=1;$i<=$b;$i++){
                    if($a%$i==0 && $b%$i==0){
                        $c=$i;
                    }
                }
                
                if($a*$b%$c==0){
                    $d=$a*$b/$c;
                }
            }
            else if($a<$b){
                for($i=1;$i<=$a;$i++){
                    if($a%$i==0 && $b%$i==0){
                        $c=$i;
                    }
                }
                if($a*$b%$c==0){
                    $d=$a*$b/$c;
                }
            }
            
                echo "USCLN của $a, $b là $c <br>"." BSCNN của $a, $b là $d";
               
            }    
?>   
</div>
</body>
</html>