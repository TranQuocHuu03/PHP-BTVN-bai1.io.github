<form action="" method="post">
    <label for="">Tên</label>
    <input type="text" name="name" value="">  <br>
    <label for="">Gía</label>
    <input type="text" name="price" value="">  <br>
    <label for="">Mô tả</label>
    <input type="text" name="descrypt" value="">  <br>
    <label for="">Hình ảnh</label>
    <input type="text" name="image" value="">  <br>
    <button name="submit">Add</button>
</form>

<?php 
    error_reporting(0);
    session_start();
    if(!isset($_SESSION['fruits']))$_SESSION['fruits']=[];
    if(isset($_POST['submit'])){
        $ten=$_POST['name'];
        $gia=$_POST['price'];
        $mota=$_POST['descrypt'];
        $hinhanh=$_POST['image'];
        if($ten!="" && $gia!=""&&$mota!=""&&$hinhanh!=""){
            $fruits=[$ten,$gia,$mota,$hinhanh];
            $_SESSION['fruits'][]=$fruits;
            header("location:index.php");
        }
        else{
            echo "<script> alert('Bạn điền chưa đủ thông tin trên!') </script>";
        }
        
    }