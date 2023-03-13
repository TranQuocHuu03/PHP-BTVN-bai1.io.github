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
<style>
    .table tr td p{
        color:red;
    }
</style>
</head>

<body>
    <header>
        <!-- place navbar here -->

        <div class="container">
            <h1>Thêm sản phẩm mới vào danh sách</h1>

            <form name="frmCreate" method="post" action="" class="form" enctype="multipart/form-data">
                <table class="table">
                    <tr>
                        <td>Tên sản phẩm</td>
                        <td><input type="text" name="name" id="supplier_code" class="form-control" /></td>
                    </tr>
                    <tr>
                        <td>Gía sản phẩm</td>
                        <td><input type="text" name="price" id="supplier_name" class="form-control" placeholder="0"/></td>
                    </tr>
                    <tr>
                        <td>Gía sản phẩm cũ</td>
                        <td><input type="text" name="priceold" id="supplier_name" class="form-control" placeholder="0"/></td>
                    </tr>
                    <tr>
                        <td>Ghi chú</td>
                        <td><textarea name="note" id="description" class="form-control"></textarea></td>
                    </tr>
                    <tr>
                        <td>Giảm giá
                            <!-- <p>*Bắt buộc nhập:</p> -->
                        </td>
                        <td><input name="giamgia" id="description" class="form-control" placeholder="0"></input></td>
                        <td>Giảm có mã</td>
                        <td>
                            <input name="maone" id="description" class="form-control" placeholder="0"></input>
                            <input name="matwo" id="description" class="form-control" placeholder="0"></input>
                            <input name="mathree" id="description" class="form-control" placeholder="0"></input>
                    </td>
                    </tr>
                    <tr>
                        <td>Ảnh đại diện</td>
                        <td><input type="file" name="image" id="image" class="form-control" value="upload" /></td>
                    </tr>
                    <tr>
                        <td>Ảnh liên quan</td>
                        <td><input type="file" name="imageone" id="image" class="form-control" value="upload" /></td>
                    </tr>
                    <tr>
                        <td>Ảnh liên quan</td>
                        <td><input type="file" name="imagetwo" id="image" class="form-control" value="upload" /></td>
                    </tr>
                    
                    <tr>
                        <td colspan="2">
                            <button name="btnSave" class="btn btn-primary"><i class="fas fa-save"></i> Thêm sản phẩm</button>
                        </td>
                    </tr>
                </table>
            </form>
            <?php
            if (isset($_POST['btnSave'])) {
                if (isset($_FILES['imageone'])) {
                    if ($_FILES['imageone']['size'] == 0) {
                        echo "bạn chưa chọn file";
                    } else {
                        if (isset($_FILES['image'])) {
                            $file = $_FILES['image'];
                            $tenfile = $file['name'];
                            // move_uploaded_file($file['tmp_name'], $tenfile);
                            move_uploaded_file($file['tmp_name'],   $tenfile);
                            echo "up file success!";
            ?>
                            <img src='<?php echo $tenfile ?>' width="200" ; height="200">
            <?php
                        }
                    }
                }
                if (isset($_FILES['imageone'])) {
                    $fileone = $_FILES['imageone'];
                    $tenfileone = $fileone['name'];
                    // move_uploaded_file($file['tmp_name'], $tenfile);
                    move_uploaded_file($fileone['tmp_name'],$tenfileone);
                   
    ?>
                    <img src='<?php echo $tenfileone ?>' width="100" ; height="100">
    <?php
                }
                if (isset($_FILES['imagetwo'])) {
                    $filetwo = $_FILES['imagetwo'];
                    $tenfiletwo = $filetwo['name'];
                    // move_uploaded_file($file['tmp_name'], $tenfile);
                    move_uploaded_file($filetwo['tmp_name'],$tenfiletwo);
                    
    ?>
                    <img src='<?php echo $tenfiletwo ?>' width="100" ; height="100">
    <?php
                }
               
                

                
                if (isset($_POST['btnSave'])) {
                    $n = 0;
                    if (isset($_SESSION['traicay']))
                        $n = count($_SESSION['traicay']);
                    $_SESSION['traicay'][$n]['name'] = $_POST['name'];
                    $_SESSION['traicay'][$n]['price'] = $_POST['price'];
                    $_SESSION['traicay'][$n]['priceold'] = $_POST['priceold'];
                    $_SESSION['traicay'][$n]['note'] = $_POST['note'];
                    $_SESSION['traicay'][$n]['giamgia'] = $_POST['giamgia'];
                    $_SESSION['traicay'][$n]['maone'] = $_POST['maone'];
                    $_SESSION['traicay'][$n]['matwo'] = $_POST['matwo'];
                    $_SESSION['traicay'][$n]['mathree'] = $_POST['mathree'];
                    $_SESSION['traicay'][$n]['image'] = $tenfile;
                    $_SESSION['traicay'][$n]['imageone'] = $tenfileone;
                    $_SESSION['traicay'][$n]['imagetwo'] = $tenfiletwo;
                   
                    
                    header("location:index.php");
                }
            }



            ?>

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