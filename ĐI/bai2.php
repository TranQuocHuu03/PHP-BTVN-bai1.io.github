//nhập ngày bất kì kiểm tra xem ngày hôm sau là ngày mấy  <br><br>
<?php
$ngay =31 ; 
$thang =12; 
$nam =2022; 
switch ($thang) {
    case 1:
    case 3:
    case 5:
    case 7:
    case 8:
    case 10:
    case 12:
        $tday=31;
        break;
    case 4:
    case 6:
    case 9:
    case 11:
        $tday = 30;
        break;
    case 2:
        // switch ($nam){
        //     case ( $nam % 400 == 0 || $nam % 4 == 0):
        //         $tday = 29;
        //         break;
        //     case($nam % 400 != 0 || $nam % 4 != 0 ):
        //         $tday = 28;
        //         break;
        // };
        if( $nam % 400 == 0 || $nam % 4 == 0){
            $tday = 29;
            break;
        }
        else {
            $tday = 28;
            break;
        }
        break;
        default:
        echo "không hợp lệ";
        break;
    }
if ($ngay < $tday && $nam > 0 && $thang > 0 && $ngay >0 ){
    $nngay= $ngay + 1;
    echo "Ngày tiếp theo là: $nngay/$thang/$nam "; 
};
if ($ngay >= $tday  && $nam > 0 && $thang < 12 && $ngay >0){
    $nthang= $thang + 1;
    $nngay  = 1;
    echo "Ngày tiếp theo là: $nngay/$nthang/$nam "; 
};
if ( $thang==12){
    $nthang= 1;
    $nngay  =  1;
    $nnam = $nam+1;
    echo "Ngày tiếp theo là: $nngay/$nthang/$nnam "; 
};





?>