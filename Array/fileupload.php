<?php
// $a=$_FILES['hinhanh'];
// print_r($a);

if (isset($_POST['btn'])) {
    if (isset($_FILES['hinhanh'])) {
        if ($_FILES['hinhanh']['size'] == 0) {
            echo "bạn chưa chọn file";
        } else {
            if (isset($_FILES['hinhanh'])) {
                $ten = $_FILES['hinhanh'];
                $tenfile = $ten['name'];
                move_uploaded_file($ten["tmp_name"], $tenfile);
                // move_uploaded_file($_FILES['hinhanh']["tmp_name"],'./image' . $_FILES['hinhanh']['name']);
                echo "up file success!";
?>
                <img src='<?php echo $tenfile ?>' width="100" ; height="100">
                <?php
            }
        }
    }
}



                ?>