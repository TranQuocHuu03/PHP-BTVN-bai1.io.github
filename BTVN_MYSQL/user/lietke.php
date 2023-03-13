<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <header>
        <div class="container">
            <h2>List Products</h2>
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Tài khoản </th>
                        <th>Mật khẩu</th>
                        <th>Ghi chú</th>
                        <th>Hình ảnh</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>


                    <?php
                    //ket noi
                    require_once 'db_conn.php';
                    //câu lệnh
                    $lietke_sql = "SELECT * FROM thanhvien order by taikhoan, matkhau, ghichu, anh";

                    // kêt thúc câu lệnh

                    $result  = mysqli_query($conn, $lietke_sql);
                    // duyệt qua rồi in ra các dòng dữ liệu 

                    while ($r = mysqli_fetch_assoc($result)) {
                    ?>
                        <!--  kiểm tra dữ liệu lấy ra được chưa-->
                        <!-- echo $r['masv'] . " - " . $r['hoten'] . " - " . $r['lop']; -->
                        <tr>
                            <td><?php echo $r['taikhoan'] ?></td>
                            <td><?php echo $r['matkhau'] ?></td>
                            <td><?php echo $r['ghichu'] ?></td>
                            <td><img src='<?php echo $r['anh'] ?>' alt="" width="100px" ; height=" 120px" ;></td>
                            <td><a onclick="return confirm('Bạn có muốn sửa thành viên này không?');" href="sua.php? edit=<?php echo $r['id']; ?>">
                                    <button type="button" class="btn btn-primary"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                            <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                        </svg></button>
                                </a>
                                <a onclick="return confirm('Bạn có muốn xóa thành viên này không?');" href="xoa.php? delete=<?php echo $r['id']; ?>">
                                    <button type="button" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                        </svg></button>
                                </a>
                                
                            </td>

                        </tr>
                    <?php


                    }
                    ?>
                </tbody>
            </table>
            <a href="signup.php">
                <button class="them" name="them" style="border-radius:5px;">Thêm thành viên mới</button>
            </a>
        </div>
        <!-- place navbar here -->

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