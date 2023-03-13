<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" href="./Sp.css">
<style>
.error {color: #FF0000;}
</style>
</head>
<body>

<?php
// define variables and set to empty values
$nameErr = $emailErr = $phoneErr="";
$name = $email = $commen =$phone="";



if (isset($_POST['submit']) && $_SERVER['REQUEST_METHOD'] == "POST")
{

    function Check(){
  
        $check_phone=trim($_POST['phone']);
        $check_validate_phone='/^0[0-9]{9}$/';
        $check_wrong=preg_match($check_validate_phone,$check_phone);
       if (empty($check_wrong))
         {$phoneErr = "So dien thoai khong hop le";}
       else
         {$phone =($_POST["phone"]);}
    
        //  Email
        $check_email=trim($_POST['email']);
    
    
       if (!filter_var($check_email,FILTER_VALIDATE_EMAIL))
         {$emailErr = "Email khong hop le";}
       else
         {$email =($_POST["email"]);}
    
    
    
        //  Name
        $check_name=trim($_POST['name']);
        $check_validate_name='/^[a-zA-Z].*$/';
        $check_wrong=preg_match($check_validate_name,$check_name);
       if (empty($check_wrong))
         {$nameErr = "Name khong hop le";}
       else
         {$name =($_POST["name"]);}
    
    
        $commen=($_POST["content"]);
        

        
if($name ==true && $email ==true && $phone ==true){
    ?>
    <div class="css">
        <?php
            echo "<h2>Your Input:</h2>";
            echo $phone;
            echo "<br>";
            echo $email;
            echo "<br>";
            echo $name;
            echo "<br>";
            echo $commen;
        ?>
    </div>
  <?php
}
    }
   
    Check();
    
}

?>

<div class="container">


<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="">
   Phone: <input type="text" name="phone"> <br> <br>
   <span class="error"><?php echo $phoneErr;?></span>
   <br><br>
   E-mail: <input type="text" name="email">  <br> <br>
   <span class="error"><?php echo $emailErr;?></span>
   <br><br>
   Name: <input type="text" name="name"> <br> <br>
   <span class="error"><?php echo $nameErr;?></span>
   <br><br>
   Comment: <textarea name="content" id="" cols="30" rows="10"></textarea>
   <br><br>


   <input type="submit" name="submit" value="Submit">
</form>

<?php




?>
</div>
</body>
</html>