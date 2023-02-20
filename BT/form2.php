<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class=container>
        <div class=tittle><p>viết câu xin chào</p></div>
        <div class="form">
        <form method="post" action ="">
            <label>
                <p>Tên:</p>
                <input type="text" name="name" placeholder="nhập tên" />
            </label>
            <br>
            <br>
            
            <br>
            <br>
            <button type="submit" name="cal" >Chào</button>
        </form>
    </div>
    </div>
    <?php
    $n="";
    if(isset($_POST['name'])){
        $n = $_POST['name'];
        echo "xin chào: $n";
    }
    ?>
</body>
</html>