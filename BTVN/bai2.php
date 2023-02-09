//nhập ngày bất kì kiểm tra xem ngày hôm sau là ngày mấy .<br>
<?php
$ngay=21;
$thang=12;
$nam=2021;
if($thang==1 || $thang==3|| $thang==5 ||$thang==7 || $thang==8|| $thang==10 ||$thang==12 )
Switch($ngay){ 
    case 1: 
    case 2: 
    case 3: 
    case 3: 
    case 4: 
    case 5: 
    case 6: 
    case 7: 
    case 8: 
    case 9: 
    case 10: 
    case 11:
    case 12:
    case 13:
    case 14:
    case 15:
    case 16: 
    case 17: 
    case 18: 
    case 19: 
    case 20:
    case 21:
    case 22:
    case 23:
    case 24:
    case 25:
    case 26:
    case 27:
    case 28:
    case 29:
    case 30:
        echo "Hôm sau là ngày " . $ngay+1 . "<br>".
        "của tháng .$thang - $nam ";
        break;
    case 31:
        if($thang != 12){
            echo "Hôm sau là ngày " . 1 . "<br>".
        "của tháng ".$thang+1 ."- $nam  ". "<br>";
        }
        if ($thang ==12){
        echo "Hôm sau là ngày " . 1 . "<br>".
        "của tháng $thang - $nam  ". "<br>";
        }
        break;
}
if($thang==2  )
Switch($ngay){ 
    case 1: 
    case 2: 
    case 3: 
    case 3: 
    case 4: 
    case 5: 
    case 6: 
    case 7: 
    case 8: 
    case 9: 
    case 10: 
    case 11:
    case 12:
    case 13:
    case 14:
    case 15:
    case 16: 
    case 17: 
    case 18: 
    case 19: 
    case 20:
    case 21:
    case 22:
    case 23:
    case 24:
    case 25:
    case 26:
    case 27:
    case 28:
    case 29:
        echo "Hôm sau là ngày " . 1 . "<br>".
        "của tháng ".$thang+1 ." - $nam ". "<br>";
        break;
    }
if($thang==4 || $thang==6|| $thang==9 ||$thang==11 )
Switch($ngay){ 
    case 1: 
    case 2: 
    case 3: 
    case 3: 
    case 4: 
    case 5: 
    case 6: 
    case 7: 
    case 8: 
    case 9: 
    case 10: 
    case 11:
    case 12:
    case 13:
    case 14:
    case 15:
    case 16: 
    case 17: 
    case 18: 
    case 19: 
    case 20:
    case 21:
    case 22:
    case 23:
    case 24:
    case 25:
    case 26:
    case 27:
    case 28:
    case 29:
        echo "Hôm sau là ngày " . $ngay+1 . "<br>".
        "của tháng .$thang - $nam";
        break;
    case 30:
        echo "Hôm sau là ngày " . $ngay+1 . "<br>".
        "của tháng $thang - $nam";
        break;
    }
    if($thang ==2){
        switch ($nam){
                case ( $nam % 400 == 0 || $nam % 4 == 0):
                    $tday = 29;
                    if($ngay < $tday){
                        echo "Hôm sau là ngày " . $ngay+1 . "<br>".
                        "của tháng .$thang - $nam";
                        break;
                    }
                    else{
                        echo "Hôm sau là ngày " . 1 . "<br>".
                        "của tháng" .$thang+1 ." - $nam";
                        break;
                    }
                
                    
                case($nam % 400 != 0 || $nam % 4 != 0 ):
                    $tday = 28;
                    if($ngay < $tday){
                        echo "Hôm sau là ngày " . $ngay+1 . "<br>".
                        "của tháng .$thang - $nam";
                        break;
                    }
                    else{
                        echo "Hôm sau là ngày " . 1 . "<br>".
                        "của tháng ".$thang+1 . " - $nam";
                        break;
                    }
            };
    }
?>