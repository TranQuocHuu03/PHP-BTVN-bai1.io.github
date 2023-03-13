<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified CSS -->



</head>

<body>
    <header>
        <!-- place navbar here -->
        <?php
        session_start();
        ?>
        <div class="container">
            <h1>Danh sách mặt hàng</h1>

            <form action="#" method="post">
                <table border="3" class="table table-borderd">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên sản phẩm</th>
                            <th>Mã sản phẩm</th>
                            <th>Gía sản phẩm </th>
                            <th>Ảnh đại diện</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php if (isset($_SESSION['tt'])) {
                            $n = count($_SESSION['tt']);
                            for ($i = 0; $i < $n; $i++) {
                                // print_r($_SESSION['traicay']);
                        ?>
                                <tr>
                                    <td><?php echo $i + 1 ?>
                                    <td><?php echo $_SESSION['tt'][$i]['name'] ?></td>
                                    <td><?php echo  $_SESSION['tt'][$i]['code'] ?></td>
                                    <td><?php echo  $_SESSION['tt'][$i]['price'] ?></td>
                                    <td><img src='<?php echo $_SESSION['tt'][$i]['image'] ?>' width="100" ; height="100"></td>

                                    <td>
                                        <!-- Button Sửa -->
                                        <a href=".php?edit=<?php echo ($i); ?>">
                                            <button type="button" class="btn btn-primary"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                                    <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                                </svg></button>

                                        </a>

                                        <!-- Button Xóa -->
                                        <a href="xoa.php? delete=<?php echo ($i); ?>">
                                            <button type="button" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                                </svg></button>

                                        </a>

                                    </td>
                                </tr>
                        <?php }
                        } ?>
                    </tbody>
                </table>
                <br>
                <br>
                <table border="3" class="table table-borderd">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên sản phẩm</th>
                            <th>Mã sản phẩm</th>
                            <th>Gía sản phẩm </th>
                            <th>Ảnh đại diện</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php if (isset($_SESSION['tttx'])) {
                            $n = count($_SESSION['tttx']);
                            for ($i = 0; $i < $n; $i++) {
                                // print_r($_SESSION['tt']);
                        ?>
                                <tr>
                                    <td><?php echo $i + 1 ?>
                                    <td><?php echo $_SESSION['tttx'][$i]['nametx'] ?></td>
                                    <td><?php echo  $_SESSION['tttx'][$i]['codetx'] ?></td>
                                    <td><?php echo  $_SESSION['tttx'][$i]['pricetx'] ?></td>
                                    <td><img src='<?php echo $_SESSION['tttx'][$i]['imagetx'] ?>' width="100" ; height="100"></td>

                                    <td>
                                        <!-- Button Sửa -->
                                        <a href=".php?edit=<?php echo ($i); ?>">
                                            <button type="button" class="btn btn-primary"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                                    <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                                </svg></button>
                                        </a>
                                        <!-- Button Xóa -->
                                        <a href="xoa.php? delete=<?php echo ($i); ?>">
                                            <button type="button" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                                </svg></button>
                                        </a>

                                    </td>
                                </tr>
                        <?php }
                        } ?>
                    </tbody>
                </table>
                <br>
                <br>
                <!-- Button xem trang người dùng -->
                <a href="show.php">
                    <button type="button" name="add" class="btn btn-primary">Trang người dùng</button>
                </a>
                    <br>
                    <br>
                    <a href="http://localhost/PHP/testPHP/themdep.php">
                        <button type="button" name="addd" class="btn btn-primary"> Thêm mới dép</button>
                    </a>
                    <?php
                    if (isset($_POST['addd'])) {
                        header("location:http://localhost/PHP/testPHP/themdep.php");
                    }
                    ?>
                    <br>
                    <br>
                    <a href="http://localhost/PHP/testPHP/themtui.php">
                        <button type="button" name="addt" class="btn btn-primary"> Thêm mới túi xách</button>
                    </a>
                    <?php
                    if (isset($_POST['addt'])) {
                        header("location:http://localhost/PHP/testPHP/themtui.php");
                    }
                    ?>
            </form>
        </div>
    </header>
    <main>

    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>