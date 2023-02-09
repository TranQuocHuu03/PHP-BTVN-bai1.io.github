<!DOCTYPE html>
<html>
    <head>
        <title>Freetuts.net</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
        // Kiểm tra có phải người dùng click vào nút Kiểm Tra
        if (isset($_POST['number']))
        {
            // Lấy giá trị của ô input có tên là number theo phương thức POST
            $number = (int)$_POST['number'];
             
            if ($number % 7 == 0){
                echo "$number chia hết cho 7";
            }
            else {
                echo "$number KHÔNG chia hết cho 7";
            }
        }
        ?>
        <div>
            <form method="post" action="">
                <input type="text" name="number" value=""/>
                <input type="submit" name="cal" value="Kiểm tra"/>
            </form>
        </div>
    </body>
</html>