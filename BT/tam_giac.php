<?php
$a=4;
$b=6;
$c=5;
 if(($a+$b>$c) && ($a+$c>$b) &&($c+$b>$a))
 {
    echo 'đây là tam giac! <br>';
 }
 
 if(($a==$b)||($c==$b) ||($a==$c))
 {
    echo 'đây là tam giac cân!  <br>';
 }
 
 if(($a==$b)&&($c==$b) &&($a==$c))
 {
    echo 'đây là tam giac đều!<br>';
 }
 else 
    echo 'Đây là  tam giác bình thường!<br>'
 
?>