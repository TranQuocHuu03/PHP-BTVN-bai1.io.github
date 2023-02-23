<?php
session_start();
function Show_table()
{
    if (isset($_SESSION['fruits']) && (is_array($_SESSION['fruits']))) {
        for ($i = 0; $i < sizeof($_SESSION['fruits']); $i++) {
?>
            <tr>
                <td><?php echo ($i + 1) ?></td>
                <td><?php echo $_SESSION['fruits'][$i][0] ?></td>
                <td><?php echo $_SESSION['fruits'][$i][1] ?></td>
                <td><?php echo $_SESSION['fruits'][$i][2] ?></td>
                <td><img src=<?php echo $_SESSION['fruits'][$i][3] ?> width="50px" ; height="60px"></td>

                <td> <a href="sua.php? update=<?php echo ($i) ?>">Sửa</a>
                    <a href="index.php? delete=<?php echo ($i) ?>">Xóa</a>
                </td>
            </tr>


<?php
        }
    }
}




if (isset($_GET['delete']) && ($_GET['delete'] >= 0)) {
    array_splice($_SESSION['fruits'], $_GET['delete'], 1);
}
?>
<table border=2>
    <tr>
        <th>STT</th>
        <th>Tên trái cây</th>
        <th>Gía trái cây</th>
        <th>Mô tả</th>
        <th>Hình ảnh</th>
        <th>Hoạt động</th>
    </tr>
    <?php Show_table(); ?>
    <p><a href="them.php">ADD</a></p>

</table>