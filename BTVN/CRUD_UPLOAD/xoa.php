<!DOCTYPE html>
<?php
    session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $id=$_GET['delete'];
        $fileha=$_SESSION['traicay'][$id]['image'];
        echo "<img src='$fileha'>";
        if($fileha!="")
        unlink($fileha);
        array_splice($_SESSION['traicay'], $id, 1);
        header("location: index.php");
    ?>
</body>
</html>