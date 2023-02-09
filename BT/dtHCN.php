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
<?php
$DTHCN=0;
    if(isset($_POST['dai'] , $_POST['rong']) ){
        $dai = (int)$_POST['dai'];
        $rong=(int)$_POST['rong'];
        $DTHCN =$dai*$rong;
        
    }
    ?>
    <center>
    <div class=container>
        <div class=tittle><p>DIỆN TÍCH HÌNH CHỮ NHẬT</p></div>
        <div class="form">
        <form method="post" action ="">
            <label>
                <p>Chiều dài:</p>
                <input type="text" name="dai" placeholder="nhập số" />
            </label>
            <br>
            <br>
            <label>
                <p>Chiều rộng:</p>
                <input type="text" name="rong" placeholder="nhập số" />
            </label>
            <br>
            <br>
            <label>
                <p>Diện tích:</p>
                <input type="text" name="dt" value="<?php echo $DTHCN?>" placeholder="0"/>
            </label>
            <br>
            <br>
            <button type="submit" name="cal" >Tính</button>
        </form>
    </div>
    </div>
    
    </center>
    
</body>
</html>
