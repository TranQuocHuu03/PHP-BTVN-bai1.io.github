<!doctype html>
<?php
session_start()
?>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
    <h2>Sản phẩm thời trang</h2>

<form method="post" action="" enctype="multipart/form-data"> 
<b>giày dép</b> 
<br>
<br>
<br>
<table class="table">
                    <tr>
                        <td>Tên sản phẩm</td>
                        <td><input type="text" name="name" id="supplier_code" class="form-control" placeholder="name"/></td>
                    </tr>
                    <tr>
                        <td>Mã sản phẩm </td>
                        <td><input type="text" name="code" id="supplier_name" class="form-control" placeholder="code"/></td>
                    </tr>
                    <tr>
                        <td>Gía sản phẩm </td>
                        <td><input type="text" name="price" id="supplier_name" class="form-control" placeholder="price"/></td>
                    </tr>
                    <tr>
                        <td>Voucher</td>
                        <td><input type="text" name="vourch" id="supplier_name" class="form-control" placeholder="price"/></td>
                    </tr>
                    <tr>
                        <td>Hình ảnh</td>
                        <td><input type="file" name="image" id="image" class="form-control" placeholder="image" /></td>
                    </tr>
                    
                    <tr>
                        <td colspan="2">
                            <button name="btnSave" class="btn btn-primary"><i class="fas fa-save"></i> Thêm sản phẩm</button>
                        </td>
                    </tr>
                </table>

    </form>
    <?php
// echo "<h2>Your Input:</h2>";
// echo $name;
// echo "<br>";
// echo $email;
// echo "<br>";
// echo $website;
// echo "<br>";
// echo $comment;
// echo "<br>";
// echo $gender;
if (isset($_POST['btnSave'])) {
  if (isset($_FILES['image'])) {
      if ($_FILES['image']['size'] == 0) {
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
    if (isset($_POST['btnSave'])) {
      
        $n = 0;
        if (isset($_SESSION['tt']))
            $n = count($_SESSION['tt']);
        $_SESSION['tt'][$n]['name'] = $_POST['name'];
        $_SESSION['tt'][$n]['code'] = $_POST['code'];
        $_SESSION['tt'][$n]['price'] = $_POST['price'];
        $_SESSION['tt'][$n]['vourch'] = $_POST['vourch'];
        $_SESSION['tt'][$n]['image'] = $tenfile;
        header("location:table.php");
       
    }
  }  
?>

  </header>
  <main>

  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>