<?php
$a=2;
$b=20;
$c=4;

$e=(2*$b)-(4*$a*$c) ;// tạo delta    //trường hợp này có a!=0 nên k cần nhập lại a nếu a<=0 phải nhập lại a
if($e<0)
echo "phương trình vô nghiệm";
else if($e==0)
echo 'phương trình nghiệm kép x1=x1='.(-$b/2*$a);
else
echo 'phương trình có hai nghiệm phân biệt <br>'.'x1='. ((-$b + sqrt($e))/2*$a) ."<br>".
'x2='.((-$b - sqrt($e))/2*$a);
?>