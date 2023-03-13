
<?php
session_start();
if (!isset($_SESSION['mySession'])) {
    header("location: login.php");
}
?>

<h1> Đây là trang chủ</h1>
<a href="logout.php">
    <button type="button" name="logout" class="btn btn-primary">
        <h3>Log out</h3>
    </button>
</a>
<br>
<br>

<form action="" method="post">
    <input type="text" name="nd">
    <button type="submit" name="btn">Tìm Kiếm</button>

</form>
<?php


if (isset($_POST['btn'])) {
    $nd = $_POST['nd'];
} else {
    echo $nd = false;
}

?>
<?php
include "connect.php";

$sql = "SELECT *FROM sanpham WHERE name LIKE '%$nd%'";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_array($result)) {
    echo $row['name'];
}
?>