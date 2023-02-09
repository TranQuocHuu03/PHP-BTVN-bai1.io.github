<?php
    $n=100;
    $a=0;
    for($i=0; $i<=$n; $i++){
        if($n<2){
            echo "không có số nguyên tố nào?";
        }
        else if($n>2){
            for($i=1; $i<=$n;$i++){
                if($i%$i==0 ){
                    $a=$a+1;
                    if($a==2){
                        echo "$i là số nguyên tố!";
                    }
                }
            }

        }
    }
    // $n=9;
    // $a=0;
    // for($i=1;$i<=$n;$i++){
    //     if($n%$i==0){
    //         $a=$a+1;
    //     }
    // }
    // if($a==2){
    //     echo  "$n là số nguyên tố!";
    // }
    // else{
    //     echo "$n không phải là số nguyên tố!";
    // }
?>