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
    <form action="signup-check.php" method="post">
        <h2>Sign up</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>

        <?php if (isset($_GET['success'])) { ?>
            <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>

        <label>Name</label>
        <?php if (isset($_GET['name'])) { ?>
            <input type="text" 
            name="name" 
            placeholder="Name" 
            value="<?php echo $_GET['name']; ?>">
        <?php } else { ?>
            <input type="text" 
            name="name" 
            placeholder="Name">
        <?php } ?>


        <label>User Name</label>
        <?php if (isset($_GET['uname'])) { ?>
            <input type="text" 
            name="uname" 
            placeholder="User Name" 
            value="<?php echo $_GET['uname']; ?>">
        <?php } else { ?>
            <input type="text" 
            name="uname" 
            placeholder="User Name">
        <?php } ?>



        <!-- <label>Name</label>
        <input type="text" name="name" placeholder="Name">
        <br> -->

        <!-- <label>User Name</label>
        <input type="text" name="uname" placeholder="User name">
        <br> -->
        <label>Password</label>
        <input 
        type="password" 
        name="password" 
        placeholder="Password">
        <br>

        <label>Re password</label>
        <input 
        type="password" 
        name="re_password" 
        placeholder="Re_password">
        <br>
        <button type="submit"> Signup</button>
        <a href="index.php" class="ca"> Already have an account</a>
    </form>
</body>

</html>