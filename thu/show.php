<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <header>
        <div class="container">
            <h2>List Products</h2>
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Mã sản phẩm </th>
                        <th>Tên sản phẩm</th>
                        <!-- <th>Loại sản phẩm</th> -->
                        <th>Ảnh sản phẩm</th>
                        <th>Số lượng sản phẩm</th>
                        <th>Gía sản phẩm</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "connect.php";

                $show ="SELECT *FROM danhsach_sp order by masp, tensp, gia, sl, h_anh";
                $thu= mysqLi_query($conn, $show);
                while ($i=mysqli_fetch_assoc($thu)){
                    ?>
                    <tr>
                        <td><?php echo $i['masp']?></td>
                        <td><?php echo $i['tensp']?></td>
                        <td><?php echo $i['gia']?></td>
                        <td><?php echo $i['sl']?></td>
                        <td><img src='<?php echo $i['h_anh']?>' height="100" width="100"></td>

                    </tr>
                    <?php
                }
                    ?>
                 include 
                </tbody>
            </table>
        </div>
    </header>
</body>
</html>