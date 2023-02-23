<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Login</title>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />  <!-- link icon -->
</head>
<?php if (isset($_POST["btn"])) {
 $a = $_POST["1"];
 $b = $_POST["2"];
// $boolean='';
 $validation = -1;
 $c = array("hovandi" => "hovandi123",
            "athi" =>"handsome",
            "huutran" => "tranquoc",
            "thaihoang" => "xautrai");
   foreach ($c as $name =>$passwork){
       if ($a == '' || $b == '') {
           $validation = 1;
           break;
       } else {
         if ($a == $name) {
           if ($b == $passwork) {
               $validation = 0;
               break;
           } else {
               $validation = 2;
           }
         }
       }
   }
   switch ($validation) {
       case -1 :
           echo "<script> alert ('đăng nhập sai tai khoan') </script>";
           break;
       case 2 :
           echo "<script> alert ('đăng nhập sai passwork') </script>";
           break;
       case 0:
           echo "<script> alert ('Đăng nhập thành công')</script>";
           echo "<script> location.href ='https://www.youtube.com'</script>";
           break;
       default:
           echo "<script> alert ('Form trống')</script>";
           break;
   }
   }
?>
<style>
 * {
   margin: 0;
   padding: 0;
   box-sizing: border-box;
   font-family: "Poppins", sans-serif;
   /*  kiểu chữ */
 }

 body {
   width: 100%;
   height: 100vh;
   display: flex;
   align-items: center;
   justify-content: center;
   background: aquamarine;




 }




 ::selection {   /*  bôi đèn sẽ chuyển màu */
   color: #fff;
   background: #5372F0;
 }




 .wrapper {
   width: 380px;
   padding: 40px 30px 50px 30px;
   background: #fff;
   border-radius: 5px;
   text-align: center;
   box-shadow: 20px 20px 20px 15px rgba(0.3, 0.1, 0.1, 0.1);
   /* bóng */
 }




 .wrapper header {
   font-size: 35px;
   font-weight: 600;
 }




 .wrapper form {
   margin: 40px 0;
 }




 form .field {
   width: 100%;
   margin-bottom: 20px;
 }




 /* form .field a.shake {
   animation: shake 0.3s ease-in-out; 
 } */




 /* @keyframes shake {




   0%,
   100% {
     margin-left: 0px;
   }




   20%,
   80% {
     margin-left: -12px;
   }




   40%,
   60% {
     margin-left: 12px;
   }
 } */




 form .field .input-area {
   height: 50px;
   width: 100%;
   position: relative;
 }




 form input {
   width: 100%;
   height: 100%;
   outline: none;
   padding: 0 45px;
   font-size: 18px;
   background: none;
   caret-color: #5372F0;
   border-radius: 5px;
   /*  border login */
   border: 1px solid #bfbfbf;
   /*  border email,password */
   border-bottom-width: 2px;
   /*  border login */
   transition: all 0.2s ease;
   /*  thay đổi giá trị thuộc tính trong một khoảng thời gian nhất định.*/
 }

form .field input:focus,
 form .field.valid input {
   border-color: #5372F0;
   /* màu xanh các đường viền trong input.*/
 }




 /* form .field.shake input,
 form .field.error input {
   border-color: #dc3545;
 }  */




 .field .input-area i {
   position: absolute;
   top: 50%;
   font-size: 18px;
   pointer-events: none;
   transform: translateY(-50%);
 }




 .input-area .icon {
   left: 15px;
   color: #bfbfbf;
   transition: color 0.2s ease;
 }




 .input-area .error-icon {
   right: 15px;
   color: #dc3545;
 }




 form input:focus~.icon,
 form .field.valid .icon {
   color: #5372F0;
   /* Icon sẽ đổi màu khi mình kịch vào */
 }




 /* form .field.shake input:focus~.icon,
 form .field.error input:focus~.icon {
   color: #bfbfbf;
 } */




 form input::placeholder {
   color: #bfbfbf;
   font-size: 17px;
   /* style trong input */
 }




 /* form .field .error-txt {
   color: #dc3545;
   text-align: left;
   margin-top: 5px;
 } */




 form .field .error {
   display: none;
 }




 /* form .field.shake .error,
form .field.error .error{
 display: block;
} */
 form .pass-txt {
   text-align: left;
   margin-top: -10px;
 }




 .wrapper a {
   color: #5372F0;
   text-decoration: none;  /* bỏ gạch chân */
 }




 .wrapper a:hover {
   text-decoration: underline;
 }




 form input[type="submit"] { /*  [type="submit"] tức là nó chỉ style cho iput login*/
   height: 50px;
   margin-top: 30px;
   color: #fff;
   padding: 0;
   border: none;
   background: #5372F0;
   cursor: pointer;
   /* chuyển đổi chuột thành tay */
   border-bottom: 2px solid rgba(0, 0, 0, 0.1);
   transition: all 0.3s ease;
 }




 form input[type="submit"]:hover{
 background: #2c52ed;
}
</style>




<body>
 <div class="wrapper">
   <header>Login Form</header>
   <form action="#" method="post">
     <div class="field email">
       <div class="input-area">
         <input type="text" placeholder="Email Address" name="1">
         <i class="icon fas fa-envelope"></i>
         <!-- <i class="error error-icon fas fa-exclamation-circle"></i> -->
       </div>
       <div class="error error-txt">Email can't be blank</div>
     </div>
     <div class="field password">
       <div class="input-area">
         <input type="password" placeholder="Password" name="2" requests ="true">
         <i class="icon fas fa-lock"></i>
         <!-- <i class="error error-icon fas fa-exclamation-circle"></i> -->
       </div>
       <div class="error error-txt">Password can't be blank</div>
     </div>
     <div class="pass-txt"><a href="#">Forgot password?</a></div>
     <input type="submit" value="Login" name="btn">
   </form>
   <div class="sign-txt">Not yet member? <a href="#">Signup now</a></div>
 </div>




</body>
</html>