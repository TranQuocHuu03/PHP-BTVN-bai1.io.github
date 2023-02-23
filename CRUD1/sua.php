<?php
error_reporting(0);
session_start();
    if(isset($_GET['update']) && ($_GET['update'])>=0){
        for ($i=0; $i <sizeof($_SESSION['fruits']); $i++) { 
            $tensp=$_SESSION['fruits'][$i][0];
            $giasp=$_SESSION['fruits'][$i][1];
            $motasp=$_SESSION['fruits'][$i][2];
            $hasp=$_SESSION['fruits'][$i][3];
        }
    
    }

    if(isset($_POST['submit'])){
        $ten=$_POST['name'];
        $gia=$_POST['price'];
        $mota=$_POST['descrypt'];
        $hinhanh=$_POST['image'];
        $fruits=[$ten,$gia,$mota,$hinhanh];
        $_SESSION['fruits'][$_GET['update']]=$fruits;
        header("location:index.php");
      
    }

?>

<form action="" method="post">
    <label for="">Tên trái cây</label>
    <input type="text" name="name" value="<?php  echo $tensp; ?>">  <br>
    <label for="">Gía</label>
    <input type="text" name="price" value="<?php  echo $giasp; ?>">  <br>
    <label for="">Mô tả</label>
    <input type="text" name="descrypt" value="<?php  echo $motasp; ?>">  <br>
    <label for="">Hình ảnh</label>
    <input type="text" name="image" value="<?php  echo $hasp; ?>">  <br>
    <button name="submit">Edit</button>
</form>