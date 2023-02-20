<?php
$mang=array('phan tu 1','phan tu 2',7);
$mang2=array(
    'key1'=> 'phần tử 1',
    'key2'=> 'Phần tử 2',
    'key3'=> '3'
);
$arr=[
    'toan' =>10,
    'ly' =>9
];
// echo "<pre>";
// var_dump($mang);
// echo "</pre>";

// echo "<pre>";
// var_dump($arr);
// echo "</pre>";
// foreach($mang as $key => $value){
//     echo $key . "=>".$value;
// }

// foreach ($mang as $value){
//     echo $value;
// }



$arr=array('1');
array_push($mang,'phần tử 4');
// var_dump($mang);

array_push($mang, $arr);
// echo "<pre>";
// var_dump($mang);
// echo "</pre>";

$mang_3=array_merge($mang,$arr); // hứng vào mảng 
echo "<pre>";
var_dump($mang_3);
echo "</pre>";

echo count($mang).'<br/>';
$ktpt=3;
if(in_array($ktpt,$mang)){
    echo $ktpt;
}
var_dump(in_array($ktpt,$mang)); // kiểm tra xem mảng có phần tử đó không


var_dump(array_key_exists('key1',$mang2)); // kiểm tra key có tồn tại trên mảng không


if(array_key_exists('key1',$mang)){ // lấy phần tử của key trong mảng đó ra 
    echo $mang['key1'];
}

$mang_kq =array_slice($mang,1);
var_dump($mang_kq);
?>