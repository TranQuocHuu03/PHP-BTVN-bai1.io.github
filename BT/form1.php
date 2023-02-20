<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            width:500px;
            height:auto;
            margin-top: 100px;
        }
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
            height:auto;
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
<div class=container>
        <div class=tittle><p>xác định tam giác</p></div>
        <div class="form">
        <form method="post" action ="">
            <label>
                <p>Cạnh a</p>
                <input type="text" name="a" placeholder="nhập số a" />
            </label>
            <br>
            <br>
            <label>
                <p>Cạnh b</p>
                <input type="text" name="b" placeholder="nhập số b" />
            </label>
            <br>
            <br>
            <label>
                <p>Cạnh c</p>
                <input type="text" name="c" placeholder="nhập số c" />
            </label>
            <br>
            <br>
            <button type="submit" name="cal" >Xác định tam giác</button>
        </form>
    </div>
    </div>
    <?php
        if(isset($_POST['a'] , $_POST['b'], $_POST['b']) ){
            $a = (int)$_POST['a'];
            $b=(int)$_POST['b'];
            $c=(int)$_POST['c'];
            if(($a+$b>$c) && ($a+$c>$b) &&($c+$b>$a))
            {
                echo 'đây là tam giac! <br>';
                if(($a==$b) &&($a==$c)&&($b==$c))
                {
                    echo 'đây là tam giac đều!<br>';
                }
                else if(($a==$b)||($c==$b) ||($a==$c))
                {
                    echo 'đây là tam giac cân!  <br>';
                }
        
                else {
                    echo 'Đây là  tam giác bình thường!<br>';
                }
            }
            else{
                echo "Đây không phải là tam giác!";
            }
        }
    ?>
    
</body>
</html>