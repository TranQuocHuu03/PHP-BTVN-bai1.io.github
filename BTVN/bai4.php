<!DOCTYPE html>
<html>
    <head>
        <title>Freetuts.net</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>

    <div>
        <form method="post" action="">
            <input type="text" name="dtb" value=""/>
            <input type="submit" name="cal" value="Kiểm tra"/>
        </form>
    </div>
<?php

// $diemTB=10;
if (isset($_POST['dtb']))
        {
            // Lấy giá trị của ô input có tên là number theo phương thức POST
            $diemTB = (int)$_POST['dtb'];
Switch($diemTB){
    case 0:
        case 1:
            case 2:
                case 3:
                    case 4:
                            if($diemTB >=0 && $diemTB < 5){
                                echo "Loại yếu!";
                            }
                            break;
    case 5:  
        case 6:  
            case 7:  
                if($diemTB >=5 && $diemTB <= 7){
                    echo "Loại TB!";
                }
                break;
    case 8:
        case 9:
            if($diemTB > 7 && $diemTB <9){
                echo "Loại Khá!";
            }  
            break;
    case 9:
        if($diemTB ==9){
            echo "Loại giỏi!";
        }  
        break;
    case 10:
        if($diemTB >=9 && $diemTB <=10){
            echo "Loại xuất sắc!";
        }       
        break;        
}
        }
?>

    </body>
</html>