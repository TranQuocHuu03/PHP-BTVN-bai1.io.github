<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
        .tittle{
            width:500px;
            height:100px;
            background-color:coral;
            color:aqua;
        }
        .tittle p{
            padding: 35px;
            font-size: 25px;
        }
        .form{
            width:500px;
            height:100px;
            background-color:darksalmon ;
        }
        button:hover{
            cursor: pointer;
        }
        button{
            background-color:aqua ;
        }
    </style>
</head>
<body>

        <div class="form">
        <form method="post" action ="">
            <label>
                <p>Chuỗi thông tin</p>
                <input type="text" name="a" placeholder="nhập chuỗi bất kì..." />
            </label>
            <br>
            <br>
            <button type="submit" name="cal" >Xác nhận</button>
        </form>
    </div>
<?php
if (isset($_POST["cal"])){   
    $arr = $_POST["a"]; 
    $array = explode(';',$arr);
    $max = $array[0];
    $min = $array[0];
for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] > $max) {
        $max = $array[$i];
    }
    if ($array[$i] < $min) {
        $min = $array[$i];
    }
}

echo "<br> Phân tử nhỏ nhất là $min ở các vị trí ";
for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] == $min) {
        echo  "<br>". $i + 1 ;
    } 
}
echo "<br> Phân tử lớn nhất là $max ở các vị trí ";
for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] == $max) {
        echo  "<br>". $i + 1 ;
    }
}
}
?>
</body>
</html>