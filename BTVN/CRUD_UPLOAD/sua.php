<!doctype html>
<?php
session_start();
?>
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
        <!-- place navbar here -->
        <div class="container">
            <h1>Cập nhật lại thông tin</h1>

            <form name="frmCreate" method="post" action="" class="form" enctype="multipart/form-data">

                <?php
                if (isset($_GET["edit"])){
                    $names = $_SESSION['traicay'][$_GET['edit']]["name"];
                    $prices = $_SESSION['traicay'][$_GET['edit']]["price"];
                    $priceold = $_SESSION['traicay'][$_GET['edit']]["priceold"];
                    $notes = $_SESSION['traicay'][$_GET['edit']]["note"];
                    $images = $_SESSION['traicay'][$_GET['edit']]["image"];
                ?>

                    <table class="table">
                        <tr>
                            <td>Tên sản phẩm</td>
                            <td><input type="text" name="names" id="supplier_code" class="form-control" value="<?php echo $names ?>" /></td>
                        </tr>
                        <tr>
                            <td>Gía sản phẩm</td>
                            <td><input type="text" name="prices" id="supplier_name" class="form-control" value="<?php echo $prices ?> " /></td>
                        </tr>
                        <tr>
                            <td>Gía sản phẩm cũ</td>
                            <td><input type="text" name="priceold" id="supplier_name" class="form-control" value="<?php echo $priceold ?> " /></td>
                        </tr>
                        <tr>
                            <td>Ghi chú</td>
                            <td><input name="notes" id="description" class="form-control" value="<?php echo $notes ?>" ></td>
                        </tr>
                        <tr>
                            <td>Ảnh đại diện mới</td>
                            <td><input type="file" name="images" id="image" class="form-control" /></td>

                        </tr>
                        <tr>
                            <td colspan="2">
                                <button name="btnSave" class="btn btn-primary"><i class="fas fa-save"></i> Lưu dữ liệu</button>
                            </td>
                        </tr>
                    </table>
                <?php } ?>
            </form>
        </div>
        <?php
        if (isset($_POST['btnSave'])) {
                $n = 0;
                if (isset($_SESSION['traicay']))
                    $n = count($_SESSION['traicay']);
                $_SESSION['traicay'][$_GET['edit']]['name'] = $_POST['names'];
                $_SESSION['traicay'][$_GET['edit']]['price'] = $_POST['prices'];
                $_SESSION['traicay'][$_GET['edit']]['priceold'] = $_POST['priceold'];
                $_SESSION['traicay'][$_GET['edit']]['note'] = $_POST['notes'];
                if (isset($_FILES['images'])) {
                    $file = $_FILES['images'];
                    $tenfile = $file['name'];
                    // move_uploaded_file($file['tmp_name'], $tenfile);                  
                    if ($tenfile!=""){
                        move_uploaded_file($file['tmp_name'],$tenfile);
                        $_SESSION['traicay'][$_GET['edit']]['image'] = $tenfile;
                    }

                }
                header("location:index.php");
            }

        ?>
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