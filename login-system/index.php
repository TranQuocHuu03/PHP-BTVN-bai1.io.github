<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="login.php" method="post">
        <h2>Log In</h2>
        <?php if(isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label>User Name</label>
        <input type="text" name="uname" placeholder="user name">
        <br>
        <label>Password</label>
        <input type="password" name="password" placeholder="password">
        <br>
        <button type="submit"> Login</button>
        <a href="signup.php" class="ca" > Create an account</a>
        </form>
</body>

</html>