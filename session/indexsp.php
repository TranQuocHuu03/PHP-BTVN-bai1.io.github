<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="">
        <table border="1">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên sp</th>
                    <th>Gía</th>
                    <th>Hình ảnh</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $cars = array(
                    array("Volvo", 22, 18, "<img  src='https://bizweb.dktcdn.net/100/333/744/products/4b918258125bd805814a.jpg?v=1648095375027'>"),
                    array("BMW", 15, 13, "<img  src='https://bizweb.dktcdn.net/100/333/744/products/4b918258125bd805814a.jpg?v=1648095375027'>"),
                    array("Saab", 5, 2, "<img  src='https://bizweb.dktcdn.net/100/333/744/products/4b918258125bd805814a.jpg?v=1648095375027'>"),
                    array("Land Rover", 17, 15, "<img  src='https://bizweb.dktcdn.net/100/333/744/products/4b918258125bd805814a.jpg?v=1648095375027'>")
                );
                echo $cars[0][0] . ": Gía : " . $cars[0][1] . ", Gía mới : " . $cars[0][2] . ", Hình ảnh : " . $cars[0][3] . "<br>";
                echo $cars[1][0] . ": Gía: " . $cars[1][1] . ", Gía mới: " . $cars[1][2] . ", Hình ảnh : " . $cars[1][3] . "<br>";
                echo $cars[2][0] . ": Gía: " . $cars[2][1] . ", Gía mới: " . $cars[2][2] .  ", Hình ảnh : " . $cars[2][3] . "<br>";
                echo $cars[3][0] . ": Gía: " . $cars[3][1] . ", Gía mới: " . $cars[3][2] .  ", Hình ảnh : " . $cars[3][3] . "<br>";
                for ($row = 0; $row < 5; $row++) {
                    echo "<tr>";
                    echo " <td> $row </td>";
                    echo "</tr>";
                    for ($col = 0; $col < 3; $col++) {
                        echo "<tr>";
                        echo " <td>" . $cars[$row][$col] . "</td>";
                        echo "</tr>";
                    }
                    echo "<br>";
                }
               
                ?>
            </tbody>
        </table>
</body>

</html>