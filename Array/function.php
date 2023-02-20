<?php
// hàm bình thường 
    // function ham(){
    //     echo "xin chao";
    // }
    // ham();


    // hàm truyền tham số
    
    // function ham($ten){
    //     echo "xin chào $ten";
    // }
    // ham("Hữu");



// return


// function phepcong(int $a, int $b){
//     $tong =$a +$b;
//     return $tong;
// }
//  echo phepcong(3 ,5);


if($_SERVER["REQUEST_METHOD"] =="POST"){
    $name  =$_POST['ten'];
    if($name="huu"){
        echo "tên huu sinh năm 2003 lập trình ";
    }
    else if($name="hung"){
        echo "ten hung sinh năm 200 thiết kế";
    }
}

?>

<form action="" method="post">
    Tên :
    <input type="text" name="ten">
    <input type="submit">
</form>