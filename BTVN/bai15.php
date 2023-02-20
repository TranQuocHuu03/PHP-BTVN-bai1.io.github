<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $var=[1000,5675];
            $counts= count($var);
            $max = $var[0];
            $min = $var[0];
            for ($i = 1; $i < $counts; $i++){
                if ($max < $var[$i]){
                    $max = $var[$i];
                    $position=$i +1; 
                }
                if ($min > $var[$i]){
                    $min = $var[$i];
                    $positions=$i +1;   
                }
            }
            for ($j = 0; $j < $counts; $j++){
                if($max==$var[$j]){
                    $max= $var[$j];
                    $position=$j+1;
                    echo "$max tại vị trí $position là lớn nhất <br>";
                }
                if($min==$var[$j] ){
                    $min= $var[$j];
                    $positions=$j+1;
                    echo "$min tại vị trí $positions là nhỏ nhất <br>";
                }
            }
    ?>
</body>
</html>