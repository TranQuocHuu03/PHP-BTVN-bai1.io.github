<?php
// function check_prime($n)
// {
//     for ($i = 2; $i <= sqrt($n); $i++) {
//         if ($n % $i == 0){
//             return false;
//         }
//     }
//     return true;
// }
// function show_prime($a, $b){
//     for ($i = $a; $i <= $b; $i++){
//         if($i>2){
//             if(check_prime($i))
//             echo $i, '<br>';
//         }
//     }
// }
// show_prime(1, 10);

function isPrimeNumber($n) {
    // so nguyen n < 2 khong phai la so nguyen to
    if ($n < 2) {
        return false;
    }
    // check so nguyen to khi n >= 2
    $squareRoot = sqrt ( $n );
    for($i = 2; $i <= $squareRoot; $i ++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}
echo ("Các số nguyên tố nhỏ hơn 10 là: <br>");
for($i = 0; $i < 10; $i ++) {
    if (isPrimeNumber ( $i )) {
        echo ($i . " ");
    }
}


?>
