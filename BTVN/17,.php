<table border="1">
    <thead>
        <tr>
            <th>Tài khoản</th>
            <th>Mật khẩu</th>
        </tr>
    </thead>
    <tbody>

    
<?php
  if (isset($_POST['cal'])) {
    $_SESSION['test'] = $_POST['tk'];
    $_SESSION['matkhau'] = $_POST['pw'];
    echo "<tr>";
    echo " <td> ".$_SESSION['test']." </td>";
    echo " <td>".$_SESSION['matkhau']."</td>"; 
    echo "</tr>";
  } 
?>
</tbody>