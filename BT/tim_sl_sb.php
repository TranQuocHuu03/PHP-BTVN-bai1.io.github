<?php
$a=1;
$b=2;
$c=3;
$d=4;
$e=5;
$min=$a;
$max=$a;
if ($min>$b){
    $min=$b;
}
if ($min>$c){
    $min=$c;
}
if ($min>$d){
    $min=$d;
}
if ($min>$e){
    $min=$e;
}
echo "số nhỏ nhất là $min".'<br>';

if ($max<$b){
    $max=$b;
}
if ($max<$c){
    $max=$c;
}
if ($max<$d){
    $max=$d;
}
if ($max<$e){
    $max=$e;
}
echo "số lớn nhất là $max";