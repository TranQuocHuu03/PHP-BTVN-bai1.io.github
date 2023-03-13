<!doctype html>
<?php
session_start();
?>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        .error {
            color: #FF0000;
        }

        form {
            width: 500px;
        }

        form {
            border: 1px solid black;
        }

        thead tr th {
            border: 1px solid black;
        }

        /* table tr td.two{
            display:inline-flex;
        } */
    </style>
</head>

<body>
    <header>
        <!-- place navbar here -->

        <?php

        // define variables and set to empty values
        $emailErr = $firstnameErr = $lastnameErr = $passwordErr = "";
        $email = $firstname = $lastname = $password = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // if(isset($_SESSION['email'])){
            //     header('location:show.php'); // kiểm tra xem tk có tồn tại chưa nếu r vào luôn trang đó , nếu chưa bảo mình tk  
            // }
            // if (!empty($_POST["email"])) {
            //     $emailErr = "email is required";
            // } 
            // else {
            //     $email = test_input($_POST["email"]);
            // }

            // if (!empty($_POST["firstname"])) {
            //     $firstnameErr = "firstname is required";
            // } 
            // else {
            //     $firstname = test_input($_POST["firstname"]);
            // }

            // if (!empty($_POST["lastname"])) {
            //     $lastnameErr = "lastname is required";
            // } 
            // else {
            //     $lastname = test_input($_POST["lastname"]);
            // }

            // if (!empty($_POST["password"])) {
            //     $passwordErr = "password is required";
            // } 
            // else {
            //     $password = test_input($_POST["password"]);
            // }
            header("location:show.php");
            // }

            // function test_input($data)
            // {
            //     $data = trim($data);
            //     $data = stripslashes($data);
            //     $data = htmlspecialchars($data);
            //     return $data;

        }

        ?>
        <center>



            <form name="frmCreate" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="form">
                <h2>Thông tin cá nhân</h2>
                <table border=0 class="table">
                    <tr>

                        <td><input type="Email" name="email" id="supplier_code" class="form-control one" placeholder="work mail" />
                            <span class="error">* <?php echo $emailErr; ?></span>
                        </td>
                        <td></td>
                    </tr>

                    <tr>

                        <td><input type="text" pattern="[a-zA-Z]+" name="firstname" id="supplier_name" class="form-control two" placeholder="First Name" required />
                            <span class="error">* <?php echo $firstnameErr; ?></span>

                        </td>
                        <td>
                            <input type="text" pattern="[a-zA-Z]+" name="lastname" id="supplier_name" class="form-control" placeholder="Last Name" required />
                            <span class="error">* <?php echo $lastnameErr; ?></span>
                        </td>
                    </tr>

                    <tr>
                        <td><input type="password" name="password" id="supplier_name" class="form-control" placeholder="Password" minlength="8" />
                            <span class="error">* <?php echo $passwordErr; ?></span>
                        </td>
                        <td></td>
                    </tr>


                    <tr>
                        <td colspan="2">
                            <button name="btnSave" class="btn btn-primary"><i class="fas fa-save"></i> Sign up</button>
                        </td>
                    </tr>
                </table>
            </form>


            <br>
            <br>
            <br>
            <br>
            <table border=2>
                <thead>
                    <tr>
                        <th>Email</th>
                        <th>Fist name</th>
                        <th>Last name</th>
                        <th>Password</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $_POST['email'] ?></td>
                        <td><?php echo  $_POST['firstname'] ?></td>
                        <td><?php echo  $_POST['lastname'] ?></td>
                        <td><?php echo  md5($_POST['password']) ?></td>
                    </tr>
                </tbody>
            </table>
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