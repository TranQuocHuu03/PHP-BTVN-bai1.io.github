<?php
$year =2020;
$thang=2;
Switch($thang){
    case 1: 
    case 3: 
    case 5: 
    case 7: 
    case 8: 
    case 10: 
    case 12: 
    echo "có 31 ngày";
    break;
    case 4: 
    case 6: 
    case 9: 
    case 11: 
     echo "có 30 ngày";
      break;
     case 2:
        if ($year%4==0 || $year % 400 == 0 ){  // && $year%100==0 || $year % 400 == 0
            echo "Có 29 ngày vì năm đó là năm nhuận" ;
        }
        else{
            echo "có 28 ngày";
        }
        break;
     default:
      echo "không hợp lệ";
      break;
    }
?>