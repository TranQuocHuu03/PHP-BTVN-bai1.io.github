<?php
$n=1234;
// $sum=0;
// do{
//     $a = $n%10;                // lay gia tri 
//           $sum +=$a;
//           $a = $n/10;                //bo ai de vong lap tiep tuc voi a(i-1)
//       } 
//       while( $a<=0 ); 
//       echo "$sum" ;

$arr=str_split($n);
$i=0 ; $b=0;
while($i< count($arr)){
    $b=$arr[$i];
}
echo $b;

?>