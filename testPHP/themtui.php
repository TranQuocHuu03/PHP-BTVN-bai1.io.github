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

<form method="post" action="table.php"> 
<b>Túi xách</b> 
<br>
<br>
<br>
<table class="table">
                    <tr>
                        <td>Tên sản phẩm</td>
                        <td><input type="text" name="nametx" id="supplier_code" class="form-control" placeholder="name"/></td>
                    </tr>
                    <tr>
                        <td>Mã sản phẩm </td>
                        <td><input type="text" name="codetx" id="supplier_name" class="form-control" placeholder="code"/></td>
                    </tr>
                    <tr>
                        <td>Gía sản phẩm </td>
                        <td><input type="text" name="pricetx" id="supplier_name" class="form-control" placeholder="price"/></td>
                    </tr>
                    <tr>
                        <td>Hình ảnh</td>
                        <td><input type="text" name="imagetx" id="image" class="form-control" placeholder="image" /></td>
                    </tr>
                    
                    <tr>
                        <td colspan="2">
                            <button name="Save" class="btn btn-primary"><i class="fas fa-save"></i> Thêm sản phẩm</button>
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

    if (isset($_POST['Save'])) {
        $n = 0;
        if (isset($_SESSION['tttx']))
            $n = count($_SESSION['tttx']);
        $_SESSION['tttx'][$n]['nametx'] = $_POST['nametx'];
        $_SESSION['tttx'][$n]['codetx'] = $_POST['codetx'];
        $_SESSION['tttx'][$n]['pricetx'] = $_POST['pricetx'];
        $_SESSION['tttx'][$n]['imagetx'] = $_POST['imagetx'];
        header("location:table.php");
       
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