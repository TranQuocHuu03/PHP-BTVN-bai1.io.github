<!DOCTYPE HTML> 
<?php
session_start();
?> 
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"]=="POST"){
  if (empty($_POST["name"]) || strlen($_POST["name"]) <6) {
    $nameErr = "Name is required";
    echo"<script> alert( 'Bạn chưa nhập Tên, hãy nhập tên vào!')</script>";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"]) ||filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) ) {
    $emailErr = "Email is required";
    echo"<script> alert( 'Bạn chưa nhập Mail, hãy nhập mail vào!')</script>";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

  if (empty($name) && empty($email) ) {
    header("location:index.php");
  }
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="email" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website: <input type="text" name="website">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
// echo "<h2>Your Input:</h2>";
// echo $name;
// echo "<br>";
// echo $email;
// echo "<br>";
// echo $website;
// echo "<br>";
// echo $comment;
// echo "<br>";
// echo $gender;

    if (isset($_POST['submit'])) {
        $n = 0;
        if (isset($_SESSION['tt']))
            $n = count($_SESSION['tt']);
        $_SESSION['tt'][$n]['name'] = $_POST['name'];
        $_SESSION['tt'][$n]['email'] = $_POST['email'];
        $_SESSION['tt'][$n]['website'] = $_POST['website'];
        $_SESSION['tt'][$n]['comment'] = $_POST['comment'];
        $_SESSION['tt'][$n]['gender'] = $_POST['gender'];
       
    }
    
?>

</body>
</html>